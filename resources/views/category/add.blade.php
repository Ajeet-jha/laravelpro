<!DOCTYPE html>
<html lang="en">
<head>
  <title>add category</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
@if(!empty($category))
<h2>Edit Category</h2>
@else
<h2>Add Category</h2>
@endif
  <form action="{{route('add_category')}}" method="post" class="was-validated"> 
  @csrf
    <div class="form-group">
      <label for="cname">Category Name:</label>
      <input type="text" class="form-control" id="cname" placeholder="Enter Category Name" name="cname" value="{{ $category->category_name ?? '' }}" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="status" 
        @if(!empty($category->status)) {{ 'checked' }} @endif > Click to make status true.
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div>
    <input type="hidden" value="{{ $category->category_id ?? '' }}"  name="id" >
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>