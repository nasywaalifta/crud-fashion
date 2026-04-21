@include('layout.header')

<h3>Detail Produk</h3>

<table>
    <tbody>   
        <tr> 
            <td width="150px">Nama Produk</td>
            <td width="2px">:</td>
            <td>{{ $produk->nama_produk }}</td>   
        </tr>

        <tr> 
            <td>Kategori</td>
            <td>:</td>
            <td>{{ $produk->kategori->nama_kategori ?? '-' }}</td>   
        </tr>

        <tr> 
            <td>Brand</td>
            <td>:</td>
            <td>{{ $produk->brand->nama_brand ?? '-' }}</td>   
        </tr>

        <tr> 
            <td>Harga</td>
            <td>:</td>
            <td>{{ $produk->harga }}</td>   
        </tr>

        <tr> 
            <td>Stok</td>
            <td>:</td>
            <td>{{ $produk->stok }}</td>   
        </tr>

        <tr> 
            <td>Deskripsi</td>
            <td>:</td>
            <td>{{ $produk->deskripsi }}</td>   
        </tr>
    </tbody>
</table>

<a href="{{ route('produk.index') }}" class="tombol">Kembali</a>

@include('layout.footer')