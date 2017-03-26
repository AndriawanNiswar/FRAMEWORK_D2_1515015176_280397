@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
			<strong><a href="{{url('pengguna') }}"><i style="color:#8a6d3b"class="fa text-default da-chevron-left"><i/></a> Detail Data Pengguna</strong>
			</div>
			<table class="table">
				<tr>
						<td>Username</td>
						<td>:</td>
						<td>{{ $pengguna->password }}</td>
				</tr>
				<tr>
						<td>Password</td>
						<td>:</td>
						<td>{{ $pengguna->created at}}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Diperbarui Tanggal</td>
						<td class="col-xs-1">:</td>
				</tr>
			</table>
		</div>
@stop