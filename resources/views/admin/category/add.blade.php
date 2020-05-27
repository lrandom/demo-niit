@extends('admin.layout')
@section('content')
<form action="" method="post">
     @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" name="name" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Parent Id Select</label>
        <input type="number" name="id_parent" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
    </div>

    <button type="submit" value="Submit" class="btn btn-primary">
    </button>
  </form>
@endsection