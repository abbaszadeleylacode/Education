<!DOCTYPE html>
<html>
<head>
	<title>Müəllim</title>
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
						<td>Soyad</td>
						<td>Fənn</td>
						<td>Şəkil</td>
						<td>E-poçt ünvanı</td>
						<td>Telefon</td>
						<td>Əməllər</td>
					</tr>
				</thead>
				<tbody>
						@foreach($muellimler as $muellim)
							<tr>
								<td>{{$muellim->id}}</td>
								<td>{{$muellim->name}}</td>
								<td>{{$muellim->surname}}</td>
								<td>{{$muellim->ders_id}}</td>
								<td>
									<img src="{{$muellim->avatar}}" alt="">	
								</td>
								<td>{{$muellim->email}}</td>
								<td>{{$muellim->phone}}</td>
								<td>
									<a href="{{url('showmuellim-muellim',$muellim->id)}}" class="btn btn-xs btn-default">
										<i class="fa fa-eye"></i>
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