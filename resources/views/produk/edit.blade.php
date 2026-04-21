@include('layout.header')

<h3>Edit Produk</h3>

<form action="{{ route('produk.update', $produk->id) }}" method="post">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label>Nama Produk:</label>
        <input type="text" name="nama_produk" value="{{ old('nama_produk', $produk->nama_produk) }}">
        @error('nama_produk')
            <div style="color:red;">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>Kategori:</label>
        <select name="kategori_id">
            @foreach($allKategori as $kategori)
                <option value="{{ $kategori->id }}" 
                    {{ old('kategori_id', $produk->kategori_id) == $kategori->id ? 'selected' : '' }}>
                    {{ $kategori->nama_kategori }}
                </option>
            @endforeach
        </select>
        @error('kategori_id')
            <div style="color:red;">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>Brand:</label>
        <select name="brand_id">
            @foreach($allBrand as $brand)
                <option value="{{ $brand->id }}" 
                    {{ old('brand_id', $produk->brand_id) == $brand->id ? 'selected' : '' }}>
                    {{ $brand->nama_brand }}
                </option>
            @endforeach
        </select>
        @error('brand_id')
            <div style="color:red;">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>Harga:</label>
        <input type="number" name="harga" value="{{ old('harga', $produk->harga) }}">
        @error('harga')
            <div style="color:red;">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>Stok:</label>
        <input type="number" name="stok" value="{{ old('stok', $produk->stok) }}">
        @error('stok')
            <div style="color:red;">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>Deskripsi:</label>
        <textarea name="deskripsi">{{ old('deskripsi', $produk->deskripsi) }}</textarea>
        @error('deskripsi')
            <div style="color:red;">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="tombol">Update</button>
</form>

@include('layout.footer')