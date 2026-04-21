@include('layout.header')

<h3>
    Produk
    <a href="{{ route('produk.create') }}" class="tombol">Tambah</a>
</h3>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Produk</th>
            <th>Kategori</th>
            <th>Brand</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($allProduk as $key => $r)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $r->nama_produk }}</td>
            <td>{{ $r->kategori->nama_kategori ?? '-' }}</td>
            <td>{{ $r->brand->nama_brand ?? '-' }}</td>
            <td>Rp {{ number_format($r->harga, 0, ',', '.') }}</td>
            <td>{{ $r->stok }}</td>
            <td>{{ $r->deskripsi }}</td>
            <td>
                <form action="{{ route('produk.destroy', $r->id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <a href="{{ route('produk.show', $r->id) }}" class="tombol">Detail</a>
                    <a href="{{ route('produk.edit', $r->id) }}" class="tombol">Edit</a>

                    <button type="submit" class="tombol" onclick="return confirm('Yakin hapus?')">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@include('layout.footer')