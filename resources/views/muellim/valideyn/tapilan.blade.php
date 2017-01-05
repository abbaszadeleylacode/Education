@php
use App\sagird;
@endphp
<!DOCTYPE html>
<html>
<head>
	<title>Valideyn</title>
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
			<a class="btn btn-info" href="{{url('muellim-panel/logout')}}">Çıxış et</a>
		</div>
		
		<div class="container">
			<a href="{{url('muellim-parents')}}" class="sagirdButton btn">Valideynlər</a>
			<a href="{{url('muellim-panel')}}" class="sagirdButton btn">Geri</a>

			{{-- Table========================== --}}
			<table class="bluetable table table-striped">
				<thead>
					<tr>
						<td>ID</td>
						<td>Ad</td>
						<td>Soyad</td>
						<td>E-poçt ünvanı</td>
						<td>Şagird</td>
						<td>Telefon</td>
						<td>Əməllər</td>
					</tr>
				</thead>
				<tbody>
					@foreach($valideynler as $valideyn)
						<tr>
							<td>{{$valideyn->id}}</td>
							<td>{{$valideyn->name}}</td>
							<td>{{$valideyn->surname}}</td>
							<td>{{$valideyn->email}}</td>
							<td>{{$valideyn->phone}}</td>
							<td>
								@php
									$sagird=sagird::where('id',$valideyn->sagird_id)->first();
									echo $sagird->name.' '.$sagird->surname;
								@endphp
							</td>
							<td>
								<a href="{{url('showvalideyn-muellim',$valideyn->id)}}" class="btn btn-xs btn-default">
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