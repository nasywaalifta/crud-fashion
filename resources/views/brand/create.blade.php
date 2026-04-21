@include('layout.header')

<h3>Buat Brand</h3>
<form action="{{ route('brand.store') }}" method="post">
    @csrf

    <div class="form-group">
        <label>Nama Brand:</label>
        <input type="text" name="nama_brand" placeholder="Masukkan nama brand">
    </div>

    <div class="form-group">
        <label>Asal Negara:</label>
        <input type="text" name="asal_negara" placeholder="Masukkan asal negara">
    </div>

    <button type="submit" class="tombol">Submit</button>
</form>

@include('layout.footer')