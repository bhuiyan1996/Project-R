@extends('backend.master')
@section('backend_content')
<h1>jjjkghkmjl</h1>


<form action="{{route('category.store')}}" method='POST'>
    @csrf
  <div class="form-group">
    <label for="text">Category Name</label>
    <input type="text" class="form-control" id="text" name='category_name' placeholder="Category Name">
  </div>
  <div class="form-group">
    <label for="text">Category Dis</label>
    <input type="text" class="form-control" id="text" name='category_dis' placeholder="Category Dis">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection