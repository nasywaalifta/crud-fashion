@include('layout.header')

<h3>Edit Brand</h3>

<form action="{{ route('brand.update', $brand->id) }}" method="post">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label>Nama Brand:</label>
        <input type="text" name="nama_brand" value="{{ $brand->nama_brand }}">
    </div>

    <div class="form-group">
        <label>Asal Negara:</label>
        <input type="text" name="asal_negara" value="{{ $brand->asal_negara }}">
    </div>

    <button type="submit" class="tombol">Update</button>
</form>

@include('layout.footer')