@extends('backend.master')
@section('backend_content')

<h1>Product</h1>

<a href="{{route('product.create')}}" class="btn btn-success">Create Category</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Category Name</th>
      <th scope="col">sub Category Name</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Dis</th>
      <th scope="col"> Image </th>
    </tr>
  </thead>

  <tbody>
     @foreach($product as $data)
     <tr>
     <td>{{$data->id}}</td>
       <td>{{$data->category->name}}</td>
       <td>{{$data->subcategory->subname}}</td>
       <td>{{$data->productname}}</td>
       <td>{{$data->description}}</td>
       <td> <img style="width:60px;" src="{{url('/uploads/product/'.$data->image)}}" alt="" srcset=""></td>
     </tr>
     @endforeach
  </tbody>
</table>


@endsection