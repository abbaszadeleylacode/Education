<!DOCTYPE html>
<html>
<head>
	<title>Quizlər</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{url('assets/vendor/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{url('assets/vendor/font-awesome/css/font-awesome.css')}}">
	<link rel="stylesheet" href="{{url('assets/css/admin.css')}}">
	<script src="{{url('assets/vendor/jquery-3.1.1.min.js')}}"></script>
	<style>
		.sagirdButton{
			margin-top: 30px;
		}
		img{
			height: 40px;
		}
		.axtar{
			margin-top: 30px;
			padding:5px;
			border:2px solid #0AAAE7;
			border-radius: 2px;
			margin-left: 5px;
			background: none;
		}
	</style>
</head>
<body>
<div class="container-fluid">
	<div class="row">


		<div class="logo col-md-12">
			<img src="{{url('assets/images/logo.png')}}" alt="">
			<a class="btn btn-info" href="{{url('muellim-panel/logout')}}">Çıxış et</a>
		</div>
		
		<div class="container">
			<a href="{{url('addquiz')}}" class="sagirdButton btn">Quiz əlavə et</a>
			<a href="{{url('muellim-panel')}}" class="sagirdButton btn">Geri</a>

			{{-- Table========================== --}}
			<table class="bluetable table table-striped">
				<thead>
					<tr>
						<td>ID</td>
						<td>Ad</td>
						<td>Sual</td>
						<td>Sinif</td>
						<td>Şəkil</td>
						<td>Əməllər</td>
					</tr>
				</thead>
				<tbody>
					@foreach($quizzies as $quiz)
						<tr>
							<td>{{$quiz->id}}</td>
							<td>{{$quiz->name}}</td>
							<td>{{$quiz->content}}</td>
							<td>{{$quiz->sinif_id}}</td>
							<td>
								<img src="{{$quiz->picture}}" alt="">
							</td>
							<td>
								<a href="{{url('show-quiz',$quiz->id)}}" class="btn btn-xs btn-default">
									<i class="fa fa-eye"></i>
								</a>

								<a href="{{url('edit-quiz',$quiz->id)}}" class="btn btn-xs btn-primary">
									<i class="fa fa-cog"></i>
								</a>

								<a href="{{url('delete-quiz',$quiz->id)}}" class="btn btn-xs btn-danger">
									<i class="fa fa-trash"></i>
								</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>