@extends('backend.master')
@section('backend_content')
<h1>jjjkghkmjl</h1>


<form action="{{route('subcategory.store')}}" method="POST" enctype="multipart/form-data" >
    @csrf

    <h6>Category Name</h6>
    <select name="category_name" id="text">
    <option selected>Category Name </option>
    @foreach($categories as $data)
    <option value="{{$data->id}}">{{$data->name}}</option>
    @endforeach
    </select>

    <!-- <div class="form-group">
    <label for="text"></label>
    <input type="text" class="form-control" id="text" name='category_name' placeholder="Category Name">
  </div> -->
  <div class="form-group">
    <label for="text">Sub Category Name</label>
    <input type="text" class="form-control" id="text" name='subcategory_name' placeholder="subCategory Name">
  </div>
  <div class="form-group">
    <label for="text">Category Dis</label>
    <input type="text" class="form-control" id="text" name='subcategory_dis' placeholder="subcategory Dis">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection