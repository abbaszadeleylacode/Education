<!DOCTYPE html>
<html>
<head>
	<title>Tənzimləmələr</title>
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
			<a href="{{url('muellim-panel/logout')}}">Çıxış et</a>
		</div>
		
		@if ($message = Session::get('success'))
			<div class="alert alert-success col-md-10 col-md-offset-1" style="margin-top: 20px">{{$message}}</div>
		@endif
		<div class="info col-md-10 col-md-offset-1 text-center">
			<h2 class="text-center">TƏNZİMLƏMƏLƏR</h2>
			<img src="{{$muellim->avatar}}" class="img img-responsive">
			<p>{{$muellim->name.' '.$muellim->surname}}</p>
			<i>Müəllim</i>
			<br>
		</div>	
		

		<div class="update col-md-10 col-md-offset-1 text-center" >
			<form action="{{url('update-muellim')}}" method="post" enctype="multipart/form-data">
				<br>
				<input type="text" name="name" value="{{$muellim->name}}" placeholder="Ad" class="form-control">
				<br>
				<input type="text" name="surname" value="{{$muellim->surname}}" placeholder="Soyad" class="form-control">
				<br>
				<input type="email" name="email" value="{{$muellim->email}}" placeholder="E-poçt ünvanı" class="form-control">
				<br>
				<input type="password" name="password" value="{{$muellim->password}}" class="form-control">
				<br>
				<input type="file" class="form-control" name="photo">
				<br>
				<input type="submit" class="btn btn-success" value="Yenilə">
				<br>
				<input type="hidden" name="_token" value="{{csrf_token()}}">
			</form>
		</div>
	</div>
</body>
</html>
<script src="{{url('assets/js/slide.js')}}"></script>