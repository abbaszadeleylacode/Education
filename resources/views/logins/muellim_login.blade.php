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
<div class="text-center">
	<a href="{{url('admin-login')}}" class="btn btn-info">Administrator</a>
<a href="{{url('sagird-login')}}" class="btn btn-info">Tələbə</a>
<a href="{{url('valideyn-login')}}" class="btn btn-info">Valideyn</a>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="panel col-md-4 col-sm-10 col-xs-10 col-md-offset-4 col-sm-offset-1 col-xs-offset-1">
			<div class="panel-head">
				<i class="fa fa-lock"></i><br>
				<h3 style="color:white">Müəllim girişi</h3>
			</div>

			<div class="panel-body">
				 @if ($message = Session::get('wrong'))
				    <p>{{$message}}</p>
				 @endif
				<form action="{{url('checkMuellim')}}" enctype="multipart/form-data" method="post"> 
					<input class="hidden" type="text" value="" name="id" >
					<input type="text" name="email" class="form-control" placeholder="E-poçt ünvanınız" >
					<br>
					<input type="password" name="password" class="form-control" placeholder="Şifrəniz" >
					<br>
					<input type="submit" value="Giriş Et" class="form-control submit">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
				</form>
			</div> 
		</div>
	</div>
</div>
</body>
</html>

