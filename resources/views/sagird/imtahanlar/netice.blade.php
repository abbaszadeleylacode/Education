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
		</div>
		
		<div class="container">
			<a href="{{url('imtahanlar-sagird')}}" class="sagirdButton btn">Geri</a>
			<h1>NƏTİCƏNİZ</h1>			
			<h2>
				@if(@$netice->imtahan_netice==null)
					{{'Nəticəniz açıqlanmayıb.'}}
					@else
					{{$netice->imtahan_netice}}
				@endif
			</h2>
		</div>
	</div>
</div>
</body>
</html>