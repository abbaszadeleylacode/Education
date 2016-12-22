 <!DOCTYPE html>
<html>
<head>
	<title>Müəllim</title>
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
		<div class="panel col-md-4 col-sm-10 col-xs-10 col-md-offset-4 col-sm-offset-1 col-xs-offset-1" style="margin-top:40px">
			<div class="panel-head">
				<i class="fa fa-paper-plane-o"></i>
			</div>

			<div class="panel-body">
				
				<form action="{{url('saveteacher')}}" enctype="multipart/form-data" method="post">
					 @if ($message = Session::get('success'))
				        <p>{{$message}}</p>
				     @endif

					<input class="hidden" type="text" value="" name="id">
					<input type="text" placeholder="Müəllimin adı" name="name" class="form-control">
					@if($errors->has('name'))
			         <p style="color:red;text-align: left"><b>Ad yazın.</b></p>
			        @endif
					<br>
					<input type="text" placeholder="Soyadı" name="surname" class="form-control">
					@if($errors->has('surname'))
			         <p style="color:red;text-align: left"><b>Soyad yazın.</b></p>
			        @endif
					<br>
					<input type="text" placeholder="Fənn" name="fenn" class="form-control">
					@if($errors->has('fenn'))
			         <p style="color:red;text-align: left"><b>Fənn yazın.</b></p>
			        @endif
					<br>
					<input type="file" placeholder="Şəkil" name="photo" class="form-control">
					<br>
					<input type="email" placeholder="E-poçt ünvanı" name="email" class="form-control">
					@if($errors->has('email'))
			         <p style="color:red;text-align: left"><b>E-poçt yazın.</b></p>
			        @endif
					<br>
					<input type="password" placeholder="Şifrə" name="password" class="form-control">
					@if($errors->has('password'))
			         <p style="color:red;text-align: left"><b>Şifrə yazın.</b></p>
			        @endif
					<br>
					<input type="number" placeholder="Telefon nömrəsi" name="phone" class="form-control">
					@if($errors->has('phone'))
			         <p style="color:red;text-align: left"><b>Telefon nömrəsi yazın.</b></p>
			        @endif
					<br>
					<input type="submit" value="Əlavə et" class="form-control submit">
					<a href="{{url('muellimsiyahisi')}}" class="btn-info form-control btn">Geri</a>

					<input type="hidden" name="_token" value="{{csrf_token()}}">
				</form>				
				
			</div> 
		</div>
	</div>
</div>
</body>
</html>
		