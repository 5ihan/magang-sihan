@extends('layouts.adm.index')

@section('content')
<table class="table table-bordered" id="table">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Phone</th>
			<th>Email</th>

		</tr>
	</thead>
    <tbody>
        @foreach ($contact as $kontak)

        <tr>
            <td>{{ $kontak->id}}</td>
            <td>{{ $kontak->nama}}</td>
            <td>{{ $kontak->phone}}</td>
            <td>{{ $kontak->email}}</td>

            <td></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
