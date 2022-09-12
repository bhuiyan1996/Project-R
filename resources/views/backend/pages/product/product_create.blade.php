@extends('backend.master')
@section('backend_content')
<h1>jjjkghkmjl</h1>


<form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data" >
    @csrf

    <h6>Category Name</h6>
    <select name="category_id" id="text">
    <option selected>Category Name </option>
    @foreach($categories as $data)
    <option value="{{$data->id}}">{{$data->name}}</option>
    @endforeach
    </select>

    <h6>Sub Category Name</h6>
    <select name="subcategory_id" id="text">
    <option selected>Sub Category Name </option>
    @foreach($subcategories as $data)
    <option value="{{$data->category_id}}">{{$data->subname}}</option>
    @endforeach
    </select>

    
    <!-- <div class="form-group">
    <label for="text"></label>
    <input type="text" class="form-control" id="text" name='category_name' placeholder="Category Name">
  </div> -->
  <div class="form-group">
    <label for="text">Product Name</label>
    <input type="text" class="form-control" id="text" name='product_name' placeholder="product Name">
  </div>
  <div class="form-group">
    <label for="text">Product Dis</label>
    <input type="text" class="form-control" id="text" name='description' placeholder="Product description">
  </div>

  <div class="form-group">
        <label for="" ><h6>Upload Image</h6></label>
        <input type="file" name="image" class="form-control" require>
            </div>
            
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection