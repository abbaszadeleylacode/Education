<!DOCTYPE html>
<html>
<head>
	<title>Siniflər(Dərs Cədvəlləri)</title>
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
	</style>
</head>
<body>
<div class="container-fluid">
	<div class="row">


		<div class="logo col-md-12">
			<img src="{{url('assets/images/logo.png')}}" alt="">
		</div>
		
		<div class="container">
			<a href="{{url('muellim-panel')}}" class="sagirdButton btn">Geri</a>

			{{-- Table========================== --}}
			<table class="bluetable table table-striped">
				<thead>
					<tr>
						<td>ID</td>
						<td>Ad</td>
						<td>Əməllər</td>
					</tr>
				</thead>
				<tbody>
					@foreach($sinifler as $sinif)
						<tr>
							<td>{{$sinif->id}}</td>
							<td>{{$sinif->text}}</td>
							<td>
								<a href="{{url('showsinif',$sinif->id)}}" class="btn btn-xs btn-default">
									<i class="fa fa-eye"></i>
								</a>

								<a href="{{url('updatesinif',$sinif->id)}}" class="btn btn-xs btn-primary">
									<i class="fa fa-cog"></i>
								</a>

								<a href="{{url('deletesinif',$sinif->id)}}" class="btn btn-xs btn-danger">
									<i class="fa fa-trash"></i>
								</a>

								<a href="{{url('addsagird',$sinif->id)}}" class="btn btn-xs btn-success">
									<i class="fa fa-users"></i>
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