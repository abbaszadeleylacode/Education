<!DOCTYPE html>
<html>
<head>
	<title>Şagirdlər</title>
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
	</style>
</head>
<body>
<div class="container-fluid">
	<div class="row">


		<div class="logo col-md-12">
			<img src="{{url('assets/images/logo.png')}}" alt="">
		</div>
		
		<div class="container">
			<a href="{{url('sagirdsiyahisi')}}" class="sagirdButton btn">Qeydiyyatda olan şagirdlər</a>
			<a href="{{url('telebsiyahisi')}}" class="sagirdButton btn">Tələblər</a>
			<a href="{{url('admin-panel')}}" class="sagirdButton btn">Geri</a>
			
			<input type="text" name="axtaris" class="form-control pull-right" placeholder="Axtar" style="width: 250px; display: inline-block; margin-top: 30px">

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
					@foreach($sagirdler as $sagird)
						<tr>
							<td>{{$sagird->id}}</td>
							<td>{{$sagird->name}}</td>
							<td>{{$sagird->surname}}</td>
							<td>{{$sagird->ata_adi}}</td>
							<td>{{$sagird->age}}</td>
							<td>{{$sagird->sinif_id}}</td>
							<td>{{$sagird->city}}</td>
							<td>{{$sagird->address}}</td>
							<td>{{$sagird->passport_no}}</td>
							<td>{{$sagird->photo}}</td>
							<td>{{$sagird->email}}</td>
							<td>{{$sagird->phone}}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>