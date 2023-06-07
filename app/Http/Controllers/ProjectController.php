<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\tb_m_project;
use App\Models\tb_m_client;
use Illuminate\Http\Request;
use App\Http\Requests\ProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $keyword = $request->input('keyword');
        $clientId = $request->input('client_id');
        $status = $request->input('project_status');

        $query = tb_m_project::query();

        if (!empty($keyword)) {
            $query->where('project_name', 'LIKE', '%' . $keyword . '%');
        }

        if (!empty($clientId)) {
            $query->where('client_id', $clientId);
        }

        if (!empty($status)) {
            $query->where('project_status', $status);
        }

        $datas = $query->get();
        $clients = tb_m_client::all();

        return view('project.index', compact('datas', 'clients'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $model = new tb_m_project;
        return view('project.create', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectRequest $request)
    {

        $model = new tb_m_project;
        $model->project_name = $request->project_name;
        $model->client_id = $request->client_id;
        $model->project_start = $request->project_start;
        $model->project_end = $request->project_end;
        $model->project_status = $request->project_status;
        $model->timestamps = false;
        $model->save();

        return redirect('project');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($project_id)
    {
        $model = tb_m_project::find($project_id);
        return view('project.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $project_id)
    {
        $model = tb_m_project::find($project_id);
        $model->project_name = $request->project_name;
        $model->client_id = $request->client_id;
        $model->project_start = $request->project_start;
        $model->project_end = $request->project_end;
        $model->project_status = $request->project_status;
        $model->timestamps = false;
        $model->save();

        return redirect('project');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($project_id)
    {
        // Temukan model proyek berdasarkan ID
        $project = tb_m_project::find($project_id);

        // Lakukan tindakan penghapusan
        $project->delete();
        return redirect('project');
    }
}