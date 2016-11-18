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
			<a href="" class="sagirdButton btn">Qeydiyyatda olan şagirdlər</a>
			<a href="" class="sagirdButton btn">Tələblər</a>
			<a href="{{url('admin-panel')}}" class="sagirdButton btn">Geri</a>

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
							<td>{{$teleb->photo}}</td>
							<td>{{$teleb->email}}</td>
							<td>{{$teleb->phone}}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>