@extends('template/admin')

@section('content')
<h1>Add Product</h1>
<form action=" {{ route('pelanggan.store2') }} " method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="address">Alamat:</label>
        <input type="text" name="address" id="address" class="form-control">
    </div>
    <div class="form-group">
        <label for="no_hp">No. Hp:</label>
        <input type="text" name="no_hp" id="no_hp" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
</form>
@endsection