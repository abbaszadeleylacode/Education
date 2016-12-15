<!DOCTYPE html>
<html>
<head>
@php
use App\admin;
use App\muellim;
use App\sagird;
use App\valideynler;
@endphp
	<title>Əlaqə</title>
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
		.bluetable{
			z-index: 1;
		}
		.axtar{
			margin-top: 30px;
			padding:5px;
			border:2px solid #0AAAE7;
			border-radius: 2px;
			margin-left: 5px;
			background: none;
		}
		.mesajYaz{
			box-shadow: 1px 1px 9px black;
			margin:0;
			display: none;
			position: fixed;
			bottom:20px;
			right: 20px;
			z-index: 2;
			background: white;

		}
			.mesajYaz .header{
				background: #0AAAE7;
				color:white;
			}
				.mesajYaz .header p{
					font-size: 17px;
					padding:5px;
					display: inline-block;
					margin:0;
				}

				.mesajYaz .header i{
					margin-top: 10px;
					margin-right:10px;
				}
			.mesajYaz .content .input{
				border:none;
				border-bottom:1px solid #CFCFCF;
				margin-top: 10px;
			}
	</style>
</head>
<body>
<div class="container-fluid">
	<div class="row">


		<div class="logo col-md-12">
			<img src="{{url('assets/images/logo.png')}}" alt="">
			<a href="{{url('admin-panel/logout')}}">Çıxış et</a>
		</div>
		
		<div class="container">
			<a class="sagirdButton btn my">Mesaj yaz</a>
			<a href="{{url('elaqe-admin')}}" class="sagirdButton btn">Qəbul edilmiş</a>
			<a href="{{url('admin-panel')}}" class="sagirdButton btn">Geri</a>

			{{-- Table========================== --}}
			<table class="bluetable table table-striped">
				<thead>
					<tr>
						<td>Göndərilən</td>
						<td>Başlıq</td>
						<td>Məzmun</td>
						<td>Göndərilmə tarixi</td>
						<td>Əməllər</td>
					</tr>
				</thead>
				<tbody>
					@foreach($mails as $mail)
						<tr>
							<td>
								@if($mail->reciever_type=='a')
									@php
									$admin=admin::where('id',$mail->reciever_id)->first();
									@endphp
									{{$admin->name.' '.$admin->surname}}
								@endif

								@if($mail->reciever_type=='m')
									@php
									$muellim=muellim::where('id',$mail->reciever_id)->first();
									@endphp
									{{$muellim->name.' '.$muellim->surname}}
								@endif

								@if($mail->reciever_type=='s')
									@php
									$sagird=sagird::where('id',$mail->reciever_id)->first();
									@endphp
									{{$sagird->name.' '.$sagird->surname}}
								@endif

								@if($mail->reciever_type=='v')
									@php
									$valideyn=valideynler::where('id',$mail->sender_id)->first();
									@endphp
									{{$valideyn->name.' '.$valideyn->surname}}
								@endif
							</td>
							<td>{{$mail->title}}</td>
							<td>{{substr($mail->content,0,50).'...'}}</td>
							<td>{{$mail->created_at}}</td>
							<td>
								<a href="{{url('show-mail',$mail->id)}}" class="btn btn-xs btn-default">
									<i class="fa fa-eye"></i>
								</a>

								<a href="{{url('delete-mail-admin',$mail->id)}}" class="btn btn-xs btn-danger">
									<i class="fa fa-trash"></i>
								</a>
							</td>
						</tr>
					@endforeach
				</tbody>				
			</table>
			<div class="mesajYaz col-md-5 ">
				<div class="row">
					<div class="header">
						<p><b>Yeni Mesaj</b></p>
						<i class="fa fa-times pull-right"></i>
					</div>
					<div class="content">
						<form action="{{url('send-mail')}}" method="post">
							<input type="text" placeholder="Kimə" class="input col-md-12" name="reciever">
							<select name="kind" id="" class="col-md-12 input">
								<option value="1">Müəllim</option>
								<option value="2">Şagird</option>
								<option value="3">Admin</option>
								<option value="4">Valideyn</option>
							</select>
							<input type="text" placeholder="Başlıq" class="input col-md-12" name="title">
							<textarea name="content" id="" cols="30" rows="6" placeholder="Məzmun..." class="input col-md-12"></textarea>
					
							<input type="submit" value="Göndər" class="btn btn-success"  style="margin-top:10px;margin-bottom: 10px; margin-left: 10px;">

							<input type="hidden" name="_token" value="{{csrf_token()}}">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
<script>
	$(document).ready(function($) {
		$('.my')
		.on('click', function(event) {
			$('.mesajYaz').css('display', 'block');
		});
		$('.fa-times')
		.on('click',function(event) {
			$('.mesajYaz').css('display', 'none');
		});
	});
</script>