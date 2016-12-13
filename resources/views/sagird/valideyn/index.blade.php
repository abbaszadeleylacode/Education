@php
use App\sagird;
@endphp
<!DOCTYPE html>
<html>
<head>
	<title>Valideyn</title>
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
		</div>
		
		<div class="container">
			<a href="{{url('sagird-panel')}}" class="sagirdButton btn">Geri</a>

			{{-- Table========================== --}}
			<table class="bluetable table table-striped">
				<thead>
					<tr>
						<td>ID</td>
						<td>Ad</td>
						<td>Soyad</td>
						<td>E-poçt ünvanı</td>
						<td>Telefon</td>
					</tr>
				</thead>
				<tbody>
						<tr>
							<td>{{$valideyn->id}}</td>
							<td>{{$valideyn->name}}</td>
							<td>{{$valideyn->surname}}</td>
							<td>{{$valideyn->email}}</td>
							<td>{{$valideyn->phone}}</td>
						</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>