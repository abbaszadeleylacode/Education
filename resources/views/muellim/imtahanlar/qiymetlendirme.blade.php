<html>
<head>
	<title>İmtahan qiymətləndirməsi</title>
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
			<a href="{{url('muellim-panel/logout')}}">Çıxış et</a>
		</div>
		
		<div class="container">
			
			{{-- Table========================== --}}
				<a href="{{url('muellim-panel')}}" class="sagirdButton btn">Geri</a>	
				<table class="bluetable table table-striped">
					<thead>
						<tr>
							<td>ID</td>
							<td>Ad</td>
							<td>Soyad</td>
							<td>Ata adı</td>
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
								<td>
									<a href="{{url('qiymet-sagird-muellim'.'/'.$exam->id.'/'.$sagird->id)}}" class="btn btn-xs btn-success">
										q
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