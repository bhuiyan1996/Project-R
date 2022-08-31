@extends('backend.master')
@section('backend_content')

<h1>Categories</h1>

<a href="{{route('category.create')}}" class="btn btn-success">Create Category</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Category Name</th>
      <th scope="col">Category Dis</th>
    </tr>
  </thead>

  <tbody>
      @foreach($categories as $key=>$cat)
      <tr>
      <th >{{$key+1}}</th>
      <th >{{$cat->name}}</th>
      <th >{{$cat->description}}</th>
    </tr>
    @endforeach
  </tbody>
</table>
{{$categories->links()}}

@endsection
