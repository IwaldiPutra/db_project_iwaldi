<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_m_project extends Model
{
    use HasFactory;

    // protected $table = "tb_m_project";
    protected $primaryKey = 'project_id';


    public function client()
    {
        return $this->belongsTo(tb_m_client::class, 'client_id');
    }
}