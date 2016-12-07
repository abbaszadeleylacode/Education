<!DOCTYPE html>
<html>
<head>
	<title>Valideyn</title>
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
				
				<form action="{{url('savevalideyn')}}" enctype="multipart/form-data" method="post">
					 @if ($message = Session::get('success'))
				        <p>{{$message}}</p>
				     @endif

					<input class="hidden" type="text" value="" name="id">
					<input type="text" placeholder="Adınız" name="name" class="form-control">
					<br>
					<input type="text" placeholder="Soyadınız" name="surname" class="form-control">
					<br>
					<input type="email" placeholder="E-poçt ünvanınız" name="email" class="form-control">
					<br>
					<input type="password" placeholder="Şifrəniz" name="password" class="form-control">
					<br>
					<select name="sagird_id" id="" class="form-control">
						@foreach($sagirdler as $sagird)
							<option value="{{$sagird->id}}">{{$sagird->name.' '.$sagird->surname}}</option>
						@endforeach
					</select>
					<br>
					<input type="number" placeholder="Telefon nömrəniz" name="phone" class="form-control">
					<br>
					<input type="submit" value="Əlavə et" class="form-control submit">

					<input type="hidden" name="_token" value="{{csrf_token()}}">
				</form>				
				
			</div> 
		</div>
	</div>
</div>
</body>
</html>