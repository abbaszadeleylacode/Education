<!DOCTYPE html>
<html>
<head>
	<title>Daxil ol</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{url('assets/vendor/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{url('assets/vendor/font-awesome/css/font-awesome.css')}}">
	<link rel="stylesheet" href="{{url('assets/css/login.css')}}">
	<script src="{{url('assets/jquery-3.1.1.min.js')}}"></script>
	
</head>
<body style="background-image:url('assets/images/bg.jpg'); background-size:cover">
<div class="container-fluid">
	<div class="row">
		<div class="panel col-md-4 col-sm-10 col-xs-10 col-md-offset-4 col-sm-offset-1 col-xs-offset-1">
			<div class="panel-head">
				<i class="fa fa-lock"></i>
			</div>

			<div class="panel-body">
				<input type="text" class="form-control" placeholder="E-poçt ünvanınız">
				<br>
				<input type="password" class="form-control" placeholder="Şifrəniz">
				<br>

				<a href="{{url('muellim-login')}}">Müəllimsiniz?</a>
				<a href="{{url('sagird-login')}}">Tələbəsiniz?</a>
				<a href="{{url('valideyn-login')}}">Valideynsiniz?</a>
				
				<input type="submit" value="Giriş Et" class="form-control submit">
			</div> 
		</div>
	</div>
</div>
</body>
</html>