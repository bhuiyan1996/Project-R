@extends('backend.master')
@section('backend_content')



<h1>Sub Categories</h1>

<a href="{{route('subcategory.create')}}" class="btn btn-success">Create Category</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Category Name</th>
      <th scope="col">sub Category Name</th>
      <th scope="col">Category Dis</th>
    </tr>
  </thead>

  <tbody>
     
  </tbody>
</table>

@endsection