<!DOCTYPE html>
<html>
<head>
	<title>Sinif yarat</title>
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
				<i class="fa fa-users"></i>
			</div>

			<div class="panel-body">
				
				<form action="{{url('yaratsinif')}}" enctype="multipart/form-data" method="post">
					 @if ($message = Session::get('success'))
				        <p>{{$message}}</p>
				     @endif

					<input class="hidden" type="text" value="" name="id">
					<input type="text" placeholder="Ad" name="text" class="form-control">
					<br>
					<p>Dərs cədvəli</p>
					<textarea name=bir id="" cols="30" rows="10" placeholder="Bazar ertəsi"></textarea>
					<textarea name="iki" id="" cols="30" rows="10" placeholder="Çərşənbə axşamı"></textarea>
					<textarea name="uc" id="" cols="30" rows="10" placeholder="Çərsənbə"></textarea>
					<textarea name="dord" id="" cols="30" rows="10" placeholder="Cümə axşamı"></textarea>
					<textarea name="bes" id="" cols="30" rows="10" placeholder="Cümə"></textarea>
					<textarea name="alti" id="" cols="30" rows="10" placeholder="Şənbə"></textarea>					
					<input type="submit" value="Yarat" class="form-control submit">

					<input type="hidden" name="_token" value="{{csrf_token()}}">
				</form>				
				
			</div> 
		</div>
	</div>
</div>
</body>
</html>