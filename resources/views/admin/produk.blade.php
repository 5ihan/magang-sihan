@extends('layouts.adm.index')

@section('content')
<table class="table table-bordered" id="table">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Kategori</th>
			<th>Harga</th>
			<th>Type</th>
			<th>Merk</th>
			<th>KM</th>
			<th>CC</th>
			<th>Warna</th>
			<th>Desk</th>
			<th>Aksi</th>
		</tr>
	</thead>
    <tbody>
        @foreach ($produk as $model)

        <tr>
            <td>{{ $model->id}}</td>
            <td>{{ $model->nama}}</td>
            <td>{{ $model->kategori}}</td>
            <td>{{ $model->harga}}</td>
            <td>{{ $model->type}}</td>
            <td>{{ $model->merk}}</td>
            <td>{{ $model->km}}</td>
            <td>{{ $model->cc}}</td>
            <td>{{ $model->warna}}</td>
            <td>{{ $model->deskripsi}}</td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
