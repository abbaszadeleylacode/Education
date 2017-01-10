<!DOCTYPE html>
<html>
<head>
	@php
	use App\muellim;
	@endphp
	<title>Şagirdlər</title>
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
		strong{
			font-size: 17px;
		}
		.profile{
			height: 300px;
			width: 300px;
			border-radius: 100%;
			margin-top: -50px;
		}
	</style>
</head>
<body>
<div class="container-fluid">
	<div class="row">


		<div class="logo col-md-12">
			<img src="{{url('assets/images/logo.png')}}">
			<a class="btn btn-info" href="{{url('admin-panel/logout')}}">Çıxış et</a>
		</div>
		
		<div class="container">
			<a href="{{url('sagirdsiyahisi')}}" class="sagirdButton btn">Geri</a>
			
			<h1>ŞAGİRD HAQQINDA</h1>

			<img src="../{{$sagirdler->avatar}}" class="pull-right img img-responsive profile">
			<strong>Nömrə: {{$sagirdler->id}}</strong>
			<br>
			<strong>Ad: {{$sagirdler->name}}</strong>
			<br>
			<strong>Soyad: {{$sagirdler->surname}}</strong>
			<br>
			<strong>Ata adı: {{$sagirdler->ata_adi}}</strong>
			<br>
			<strong>Yaş: {{$sagirdler->age}}</strong>
			<br>
			<strong>Sinif: {{$sagirdler->sinif_id}}</strong>
			<br>
			<strong>Şəhər: {{$sagirdler->city}}</strong>
			<br>
			<strong>Ünvan: {{$sagirdler->address}}</strong>
			<br>
			<strong>Vəsiqə №: {{$sagirdler->passport_no}}</strong>
			<br>
			<strong>E-poçt ünvanı: {{$sagirdler->email}}</strong>

			<h2><b>QAYIBLAR</b></h2>
			<table class="bluetable table table-striped">
				<thead>
					<tr>
						<td>Qayıb tarixi</td>
						<td>Müəllim</td>
					</tr>
				</thead>
				<tbody>
					@foreach($qayiblar as $qayib)
					<tr>
						<td>{{$qayib->created_at}}</td>
						<td>
							@php
								$muellim=muellim::find($qayib->muellim_id);
							@endphp
							{{$muellim->name.' '.$muellim->surname}}
						</td>
					</tr>
					@endforeach
					<tr style="background: red;color:white">
						<td>Cəmi:</td>
						<td>{{count($qayiblar)}}</td>
					</tr>
				</tbody>
			</table>
		</div>

	</div>
</div>
</body>
</html>