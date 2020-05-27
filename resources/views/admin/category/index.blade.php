@extends('admin.layout')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Id Parent</th>
        <th scope="col">Image</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($list as $r)
          <tr>
            <td>{{$r->id}}</td> 
            <td>{{$r->name}}</td>
            <td>{{$r->parent_id}}</td>
            <td>
              <img src="{{$r->image}}" width="100"/></td>
          </tr>
      @endforeach
    </tbody>
  </table> 
  {{$list->render()}}
@endsection

