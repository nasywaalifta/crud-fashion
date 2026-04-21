@include('layout.header')

<h3>Buat Produk</h3>

<form action="{{ route('produk.store') }}" method="post">
    @csrf

    <div class="form-group">
        <label>Nama Produk:</label>
        <input type="text" name="nama_produk" placeholder="Masukkan nama produk" value="{{ old('nama_produk') }}">
        @error('nama_produk')
            <div style="color:red;">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>Kategori:</label>
        <select name="kategori_id">
            <option value="">-- Pilih Kategori --</option>
            @foreach($allKategori as $kategori)
                <option value="{{ $kategori->id }}" {{ old('kategori_id') == $kategori->id ? 'selected' : '' }}>
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
            <option value="">-- Pilih Brand --</option>
            @foreach($allBrand as $brand)
                <option value="{{ $brand->id }}" {{ old('brand_id') == $brand->id ? 'selected' : '' }}>
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
        <input type="number" name="harga" placeholder="Masukkan harga" value="{{ old('harga') }}">
        @error('harga')
            <div style="color:red;">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>Stok:</label>
        <input type="number" name="stok" placeholder="Masukkan stok" value="{{ old('stok') }}">
        @error('stok')
            <div style="color:red;">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>Deskripsi:</label>
        <textarea name="deskripsi" placeholder="Masukkan deskripsi">{{ old('deskripsi') }}</textarea>
        @error('deskripsi')
            <div style="color:red;">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="tombol">Submit</button>
</form>

@include('layout.footer')