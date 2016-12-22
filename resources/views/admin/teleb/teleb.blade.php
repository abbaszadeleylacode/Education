<!DOCTYPE html>
<html>
<head>
	<title>Tələblər</title>
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
			<a href="{{url('sagirdsiyahisi')}}" class="sagirdButton btn">Qeydiyyatda olan şagirdlər</a>
			<a href="{{url('telebsiyahisi')}}" class="sagirdButton btn">Tələblər</a>
			<a href="{{url('admin-panel')}}" class="sagirdButton btn">Geri</a>
			
			<form action="{{url('axtaristeleb')}}" style="display: inline-block;" class="pull-right" method="POST">
				
				<button type="submit" class="axtar pull-right">Axtar</button>

				<input type="text" name="soyad" class="form-control pull-right" placeholder="Soyad" style="width: 250px; display: inline-block; margin-top: 30px">


				<input type="text" name="ad" class="form-control " placeholder="Ad" style="width: 250px; display: inline-block; margin-top: 30px;margin-right: 10px">
			
				<input type="hidden" name="_token" value="{{csrf_token()}}">

			</form>

			{{-- Table========================== --}}
			<table class="bluetable table table-striped">
				<thead>
					<tr>
						<td>ID</td>
						<td>Ad</td>
						<td>Soyad</td>
						<td>Ata adı</td>
						<td>Yaş</td>
						<td>Sinif</td>
						<td>Şəhər</td>
						<td>Ünvan</td>
						<td>Vəsiqə №</td>
						<td>Şəkil</td>
						<td>E-poçt ünvanı</td>
						<td>Telefon</td>
						<td>Əməllər</td>
					</tr>
				</thead>
				<tbody>
					@foreach($telebler as $teleb)
						<tr>
							<td>{{$teleb->id}}</td>
							<td>{{$teleb->name}}</td>
							<td>{{$teleb->surname}}</td>
							<td>{{$teleb->ata_adi}}</td>
							<td>{{$teleb->age}}</td>
							<td>{{$teleb->sinif_id}}</td>
							<td>{{$teleb->city}}</td>
							<td>{{$teleb->address}}</td>
							<td>{{$teleb->passport_no}}</td>
							<td>
								<img src="{{$teleb->photo}}" alt="">
							</td>
							<td>{{$teleb->email}}</td>
							<td>{{$teleb->phone}}</td>
							<td>
								<a href="{{url('showteleb',$teleb->id)}}" class="btn btn-xs btn-default">
									<i class="fa fa-eye"></i>
								</a>

								<a href="{{url('accept',$teleb->id)}}" class="btn btn-xs btn-success">
									<i class="fa fa-check"></i>
								</a>

								<a href="{{url('reject',$teleb->id)}}" class="btn btn-xs btn-danger">
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