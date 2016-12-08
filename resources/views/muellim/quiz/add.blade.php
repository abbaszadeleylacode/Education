<!DOCTYPE html>
<html>
<head>
	<title>Quizlər</title>
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
				
				<form action="{{url('save-quiz')}}" enctype="multipart/form-data" method="post">
					 @if ($message = Session::get('success'))
				        <p>{{$message}}</p>
				     @endif

					<input class="hidden" type="text" value="" name="id">

					<input type="text" name="name" placeholder="Başlıq" class="form-control">
					<br>
					<textarea name="content" id="" cols="30" rows="10" placeholder="Məzmun..." class="form-control"></textarea>
					<br>
					<select name="sinif_id" id="" class="form-control">
						@foreach($sinifler as $sinif)
							<option value="{{$sinif->id}}">{{$sinif->text}}</option>
						@endforeach
					</select>
					<br>
					<input type="file" class="form-control" name="photo">
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