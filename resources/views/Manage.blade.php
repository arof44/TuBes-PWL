@extends('Layouts.Master')
@section('title', 'Manage')
@section('content')
<br>
<a href="manage/add" class="btn btn-secondary btn-lg btn-block">Tambah Data</a>
<div class="container">
	<div class="row">
		
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>NO</th>
					<th>Judul</th>
					<th>Tanggal</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<tbody>
				@php $i = 1 @endphp
				@foreach($article as $a)
				<tr>
					<td>{{$i++}}</td>
					<td>{{$a->title}}</td>
					<td>{{$a->created_at}}</td>
					<td>
						<a href="manage/edit/{{ $a->id }}" class="badge badge-warning">Edit</a>
						<a href="manage/delete/{{ $a->id }}" class="badge badge-danger">Hapus</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>

	</div>
</div>
@endsection