@include('layout.header')

<h3>Detail Brand</h3>

<table>
    <tbody>   
        <tr> 
            <td width="150px">Nama Brand</td>
            <td width="2px">:</td>
            <td>{{ $brand->nama_brand }}</td>   
        </tr>

        <tr> 
            <td>Asal Negara</td>
            <td>:</td>
            <td>{{ $brand->asal_negara }}</td>   
        </tr>
    </tbody>
</table>

<a href="{{ route('brand.index') }}" class="tombol">Kembali</a>

@include('layout.footer')