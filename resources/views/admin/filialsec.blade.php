<!DOCTYPE html>
<html>
<head>
	<title>Filial Seçin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{url('assets/vendor/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{url('assets/vendor/font-awesome/css/font-awesome.css')}}">
	<link rel="stylesheet" href="{{url('assets/css/admin.css')}}">
	<script src="{{url('assets/vendor/jquery-3.1.1.min.js')}}"></script>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="logo col-md-12">
			<img src="{{url('assets/images/logo.png')}}">	
			<a class="btn btn-info" href="{{url('admin-panel/logout')}}">Çıxış et</a>
		</div>
		
		<a href="{{url('settings-admin')}}">
			<div class="settings">
				<i class="fa fa-cog"></i>
			</div>
		</a>

		<script>
			$(document).ready(function($) {
				$('.settings')
				.on('mouseover', function(event) {
					$(this).css('transform', 'translateX(0px) translateY(15px)',2000);
				});

				$('.settings')
				.on('mouseleave', function(event) {
					$(this).css('transform', 'translateX(-27px) translateY(15px)',2000);
				});
			});
		</script>
	</div>

	<h1 style="text-align:center"><b>Filial Seçin</b></h1>

	@foreach($filiallar as $filial)
		<a href="{{url('admin-panel',$filial->id)}}" class="sagirdButton">{{$filial->Filial_adi}}</a>
	@endforeach
</div>
</body>
</html>