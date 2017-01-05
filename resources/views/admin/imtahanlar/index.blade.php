<!DOCTYPE html>
<html>
<head>
@php
use App\muellim;
use App\sinif;
@endphp
	<title>İmtahanlar</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{url('assets/vendor/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{url('assets/vendor/font-awesome/css/font-awesome.css')}}">
	<link rel="stylesheet" href="{{url('assets/css/admin.css')}}">
	<script src="{{url('assets/vendor/jquery-3.1.1.min.js')}}"></script>
	<style>
		.sagirdButton{
			margin-top: 30px;
		}
		img{
			height: 40px;
		}
		.axtar{
			margin-top: 30px;
			padding:5px;
			border:2px solid #0AAAE7;
			border-radius: 2px;
			margin-left: 5px;
			background: none;
		}
	</style>
</head>
<body>
<div class="container-fluid">
	<div class="row">


		<div class="logo col-md-12">
			<img src="{{url('assets/images/logo.png')}}" alt="">
			<a class="btn btn-info" href="{{url('admin-panel/logout')}}">Çıxış et</a>
		</div>
		
		<div class="container">
			<a href="{{url('admin-panel')}}" class="sagirdButton btn">Geri</a>

			{{-- Table========================== --}}
			<table class="bluetable table table-striped">
				<thead>
					<tr>
						<td>ID</td>
						<td>Müəllim</td>
						<td>Fənn</td>
						<td>Sinif</td>
						<td>İmtahan tarixi</td>
						<td>Əlavələr</td>
					</tr>
				</thead>
				<tbody>
					@foreach($imtahanlar as $imtahan)
						<tr>
							<td>{{$imtahan->id}}</td>
							<td>{{muellim::where('id',$imtahan->muellim_id)->first()->name.' '.muellim::where('id',$imtahan->muellim_id)->first()->surname}}</td>
							<td>{{muellim::find($imtahan->muellim_id)->fenn}}</td>
							<td>{{$imtahan->sinif_id}}</td>
							<td>{{$imtahan->imtahan_tarixi}}</td>
							<td>{{$imtahan->melumat}}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>