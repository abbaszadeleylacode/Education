<!DOCTYPE html>
<html>
<head>
	<title>Yığıncaqlar</title>
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
		</div>
		
		<div class="container">
			<a href="{{url('admin-panel')}}" class="sagirdButton btn">Geri</a>

			{{-- Table========================== --}}
			<table class="bluetable table table-striped">
				<thead>
					<tr>
						<td>ID</td>
						<td>Ad</td>
						<td>Məzmun</td>
						<td>Sinif</td>
						<td>Yığıncaq tarixi</td>
						<td>Əməllər</td>
					</tr>
				</thead>
				<tbody>
					@foreach($meetings as $meeting)
					<tr>
						<td>{{$meeting->id}}</td>
						<td>{{$meeting->name}}</td>
						<td>{{$meeting->about}}</td>
						<td>
							{{$meeting->sinif_id}}
						</td>
						<td>{{$meeting->time}}</td>
						<td>
							<a href="{{url('show-yigincaq-admin',$meeting->id)}}" class="btn btn-default btn-xs">
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