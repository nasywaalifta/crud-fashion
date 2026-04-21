@include('layout.header')

<h3>
    Kategori
    <a href="{{ route('kategori.create') }}" class="tombol">Tambah</a>
</h3>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($allKategori as $key => $r)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $r->nama_kategori }}</td>
            <td>
                <form action="{{ route('kategori.destroy', $r->id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <a href="{{ route('kategori.show', $r->id) }}" class="tombol">Detail</a>
                    <a href="{{ route('kategori.edit', $r->id) }}" class="tombol">Edit</a>

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