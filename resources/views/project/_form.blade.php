<div class="form-group">
    <input type="text" id="" name="project_name" class="form-control" placeholder="Nama Project">
    @foreach ($errors -> get('project_name') as $msg)
    <p class="text-danger">{{$msg}}</p>
    @endforeach
</div>
<div class="form-group">
    <select style="width: 100%; height: 32; border-radius: 5px;" class="p-1"
        name="client_id" id="">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
    @foreach ($errors -> get('client_id') as $msg)
    <p class="text-danger">{{$msg}}</p>
    @endforeach

</div>


<div class="form-group">
    <select style="width: 100%; height: 32; border-radius: 5px;" class="p-1"
        name="project_status" id="">
        <option value="OPEN">OPEN</option>
        <option value="DOING">DOING</option>
        <option value="DONE">DONE</option>
    </select>
    @foreach ($errors -> get('project_status') as $msg)
    <p class="text-danger">{{$msg}}</p>
    @endforeach

</div>
<div class="form-group">
    <input type="date" id="" name="project_start" class="form-control" placeholder="Nama Project">
    @foreach ($errors -> get('project_start') as $msg)
    <p class="text-danger">{{$msg}}</p>
    @endforeach

</div>
<div class="form-group">
    <input type="date" id="" name="project_end" class="form-control" placeholder="Nama Project">
    @foreach ($errors -> get('project_end') as $msg)
    <p class="text-danger">{{$msg}}</p>
    @endforeach

</div>

<br>

<button type="submit" style="width: 100%;  height: 32px;" class="btn btn-sm btn-primary mt-auto">Create Data</button>

</form>