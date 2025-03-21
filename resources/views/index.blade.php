<div class="container">
<h2>Products</h2>
<a href="{{ route('products.create') }}" >Add Product</a>
<table class="table">
<thead>
<tr>
<th>Name</th>
<th>Description</th>
<th>Price</th>
<th>Action</th>
</tr>
</thead>
<tbody>
@foreach($products as $product)
<tr>
<td>{{ $product->name }}</td>
<td>{{ $product->description }}</td>
<td>{{ $product->price }}</td>
<td>
<a href="{{ route('products.show'
, $product->id) }}"
class="btn btn-info btn-sm">View</a>
<a href="{{ route('products.edit'
, $product->id) }}"
class="btn btn-primary btn-sm">Edit</a>
<form action="{{ route('products.destroy'
, $product->id) }}"
method="POST" class="d-inline">
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger btn-sm"
onclick="return confirm('Are you sure you want to delete this
product?')">Delete</button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>