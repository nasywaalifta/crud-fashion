@include('layout.header')

<h3>
    Brand
    <a href="{{ route('brand.create') }}" class="tombol">Tambah</a>
</h3>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Brand</th>
            <th>Asal Negara</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($allBrand as $key => $r)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $r->nama_brand }}</td>
            <td>{{ $r->asal_negara }}</td>
            <td>
                <form action="{{ route('brand.destroy', $r->id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <a href="{{ route('brand.show', $r->id) }}" class="tombol">Detail</a>
                    <a href="{{ route('brand.edit', $r->id) }}" class="tombol">Edit</a>

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