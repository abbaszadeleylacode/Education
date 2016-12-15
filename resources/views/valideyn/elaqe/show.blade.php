<!DOCTYPE html>
<html>
<head>
@php
use App\admin;
use App\sagird;
use App\muellim;
@endphp
	<title>Əlaqə</title>
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
			<a href="{{url('valideyn-panel/logout')}}">Çıxış et</a>
		</div>
		
		<div class="container">
			<a href="{{url()->previous()}}" class="sagirdButton btn">Geri</a>
			
			<h1>GÖNDƏRİLMİŞ MESAJ HAQQINDA</h1>

			<strong>Nömrə: {{$mail->id}}</strong>
			<br>
			<strong>Kimdən: 
			@if($mail->reciever_type=='a')
				@php
					$admin=admin::where('id',$mail->reciever_id)->first();
				@endphp
					{{$admin->name.' '.$admin->surname}}
			@endif

			@if($mail->reciever_type=='m')
				@php
				$muellim=muellim::where('id',$mail->reciever_id)->first();
				@endphp
				{{$muellim->name.' '.$muellim->surname}}
			@endif

			@if($mail->reciever_type=='s')
				@php
				$sagird=sagird::where('id',$mail->reciever_id)->first();
				@endphp
				{{$sagird->name.' '.$sagird->surname}}
			@endif
			</strong>
			<br>
			<strong>Başlıq: {{$mail->title}}</strong>
			<br>
			<strong>Məzmun: {{$mail->content}}</strong>
			<br>
			<strong>Göndərilmə tarixi: {{$mail->created_at}}</strong>
			<br>
		</div>
	</div>
</div>
</body>
</html>