<div class="container">
<h2>Add Product</h2>
<form action="{{ route('products.store') }}" method="POST">
@csrf
<div class="form-group">
<label for="name">Name:</label>
<input type="text" name="name" class="form-control">
</div>
<div class="form-group">
<label for="description">Description:</label>
<textarea name="description" class="form-control"></textarea>
</div>
<div class="form-group">
<label for="price">Price:</label>
<input type="text" name="price" class="form-control">
</div>
<button type="submit" class="btn btn-primary">Add
Product</button>
</form>
</div>