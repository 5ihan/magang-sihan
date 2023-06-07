@extends('layouts.adm.index')

@section('content')
<h3>Kategori Produk</h3>
<hr>

<table class="table table-bordered" id="table">
	<thead>
		<tr>
			<th>No</th>
			<th>Kategori</th>
			<th>Aksi</th>
		</tr>
	</thead>
    <tbody>
        @foreach ($kategori as $jenis)
            <tr>
                <td>{{ $jenis->id }}</td>
                <td>{{ $jenis->kategori }}</td>
                <td></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
