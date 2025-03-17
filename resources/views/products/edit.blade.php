<div class="container">
<h2>Edit Product</h2>
<form action="{{ route('products.update'
, $product->id) }}"
method="POST">
@csrf
@method('PUT')
<div class="form-group">
<label for="name">Name:</label>
<input type="text" name="name" class="form-control" value="{{
$product->name }}">
</div>
<div class="form-group">
<label for="description">Description:</label>
<textarea name="description" class="form-control">{{
$product->description }}</textarea>
</div>
<div class="form-group">
<label for="price">Price:</label>
<input type="text" name="price" class="form-control" value="{{
$product->price }}">
</div>
<button type="submit" class="btn btn-primary">Update
Product</button>
</form>
</div>