@extends('Layouts.Master')
@section('title', 'USER')

@section('content')

<div class="col-md-8">
	<h1 class="my-4" style="margin-bottom: 5%">Kumpuan User</h1>
</div>
<a href="manageuser/cetak_pdf" class="btn btn-primary btn-lg btn-block" target="_blank">CETAK PDF USER</a>
<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
		</tr>
	</thead>
	<tbody>
		@foreach($user as $u)
		<tr>
			<td>{{$u->id}}</td>
			<td>{{$u->name}}</td>
			<td>{{$u->email}}</td>
		</tr>
		@endforeach
	</tbody>
</table>