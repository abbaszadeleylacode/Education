<!DOCTYPE html>
<html>
<head>
	<title>Sinif yenilə</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{url('assets/vendor/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{url('assets/vendor/font-awesome/css/font-awesome.css')}}">
	<link rel="stylesheet" href="{{url('assets/css/login.css')}}">
	<script src="{{url('assets/jquery-3.1.1.min.js')}}"></script>
	
</head>
<body style="background-image:url('../assets/images/bg.jpg'); background-size:cover">
<div class="container-fluid">
	<div class="row">
		<div class="panel col-md-4 col-sm-10 col-xs-10 col-md-offset-4 col-sm-offset-1 col-xs-offset-1" style="margin-top:40px">
			<div class="panel-head">
				<i class="fa fa-users"></i>
			</div>

			<div class="panel-body">
				<?php
					$list=explode("/",$sinif->ders_cedveli);
				?>
				<form action="{{url('yenilesinif',$sinif->id)}}" enctype="multipart/form-data" method="patch">
					 @if ($message = Session::get('success'))
				        <p>{{$message}}</p>
				     @endif

					<input class="hidden" type="text" value="" name="id">
					<input type="text" value="{{$sinif->text}}" name="text" class="form-control">
					<br>
					<p>Dərs cədvəli</p>
					<p>Bazar ertəsi</p>
					<textarea name=bir id="" cols="30" rows="10" >{{$list[1]}}</textarea>
					<p>Çərşənbə axşamı</p>
					<textarea name="iki" id="" cols="30" rows="10" >{{$list[2]}}</textarea>
					<p>Çərşənbə</p>
					<textarea name="uc" id="" cols="30" rows="10">{{$list[3]}}</textarea>
					<p>Cümə axşamı</p>
					<textarea name="dord" id="" cols="30" rows="10" >{{$list[4]}}</textarea>
					<p>Cümə</p>
					<textarea name="bes" id="" cols="30" rows="10" >{{$list[5]}}</textarea>
					<p>Şənbə</p>
					<textarea name="alti" id="" cols="30" rows="10" >{{$list[6]}}</textarea>					
					<input type="submit" value="Yenilə" class="form-control submit">

					<input type="hidden" name="_token" value="{{csrf_token()}}">
				</form>				
				
			</div> 
		</div>
	</div>
</div>
</body>
</html>