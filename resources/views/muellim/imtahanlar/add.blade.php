<!DOCTYPE html>
<html>
<head>
	@php
	use App\sinif;
	@endphp
	<title>İmtahanlar</title>
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
				
				<form action="{{url('save-exam')}}" enctype="multipart/form-data" method="post">
					 @if ($message = Session::get('success'))
				        <p>{{$message}}</p>
				     @endif

					<input class="hidden" type="text" value="" name="id">
					<select name="sinif_id" id="" class="form-control">
						@foreach($sinifler as $sinif)
							@php
							$sinifAdi=sinif::find($sinif->sinif_id);
							@endphp
							<option value="{{$sinifAdi->text}}">{{$sinifAdi->text}}</option>
							
						@endforeach
					</select>
					<br>
					<textarea name="melumat" id="" cols="30" rows="10" placeholder="Əlavələriniz..." class="form-control"></textarea>
					<br>
					<input type="date" class="form-control" name="imtahan_tarixi">
					<br>
					<input type="submit" value="Əlavə et" class="form-control submit">
					<a  href="{{url('muellim-panel')}}" class="btn-info form-control btn">Geri</a>
					<input type="hidden" name="_token" value="{{csrf_token()}}">
				</form>				
				
			</div> 
		</div>
	</div>
</div>
</body>
</html>