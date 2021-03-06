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
			<a class="btn btn-info" href="{{url('admin-panel/logout')}}">Çıxış et</a>
		</div>
		
		<div class="container">
			<a href="{{url('derscedveli')}}" class="sagirdButton btn">Geri</a>
			<form action="{{url('elaveetMuellim',$sinif->id)}}" style="display: inline-block;" class="pull-right" method="patch">
				<button type="submit" class="axtar pull-right">Əlavə et</button>

				<input type="text" name="surname" placeholder="Soyad" class="form-control pull-right col-md-3" style="width: 250px; display: inline-block; margin-top: 30px">

				@if($errors->has('name'))
			         <span style="color:red;text-align: left"><b>Ad yazın.</b></span>
			    @endif

				<input type="text" name="name" placeholder="Ad" class="form-control pull-right col-md-3" style="width: 250px; display: inline-block; margin-top: 30px; margin-right:10px">
				
				@if($errors->has('name'))
			         <span style="color:red;text-align: left"><b>Ad yazın.</b></span>
			    @endif

				<input type="hidden" name="_token" value="{{csrf_token()}}">
			</form>

			{{-- Table========================== --}}
			<table class="bluetable table table-striped">
				<thead>
					<tr>
						<td>ID</td>
						<td>Ad</td>
						<td>Soyad</td>
						<td>Şəkil</td>
						<td>E-poçt</td>
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
							<td>
								<img src="../{{$muellim->avatar}}" alt="">
							</td>
							<td>{{$muellim->email}}</td>
							<td>{{$muellim->phone}}</td>
							<td>
								<a href="{{url('cixarMuellim',$sinif->id.'/'.$muellim->id)}}" class="btn btn-xs btn-danger">
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