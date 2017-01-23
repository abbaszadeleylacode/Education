<!DOCTYPE html>
<html>
<head>
	<title>Müəllim Panel</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{url('assets/vendor/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{url('assets/vendor/font-awesome/css/font-awesome.css')}}">
	<link rel="stylesheet" href="{{url('assets/css/admin.css')}}">
	<script src="{{url('assets/vendor/jquery-3.1.1.min.js')}}"></script>
</head>
<body>

<div class="container-fluid">
	
	<div class="row">
		<div class="logo col-md-12 col-sm-12 col-xs-12">
			<img src="{{url('assets/images/logo.png')}}" alt="">
			<a class="btn btn-info" href="{{url('muellim-panel/logout')}}">Çıxış et</a>
		</div>
		
		<a href="{{url('settings-muellim')}}">
			<div class="settings">
				<i class="fa fa-cog"></i>
			</div>
		</a>
		<script>
			$(document).ready(function($) {
				$('.settings')
				.on('mouseover', function(event) {
					$(this).css('transform', 'translateX(0px) translateY(15px)',2000);
				});

				$('.settings')
				.on('mouseleave', function(event) {
					$(this).css('transform', 'translateX(-27px) translateY(15px)',2000);
				});
			});
		</script>

		<div class=" col-md-3  col-sm-12 col-xs-12">
			<div class="row">
				<a href="{{url('sagird(muellim)')}}">
					<img src="{{url('assets/images/admin/students.jpg')}}" title="Şagirdlər" class="img img-responsive">
				</a>
			</div>
		</div>

		<div class=" col-md-3  col-sm-12 col-xs-12">
			<div class="row">
				<a href="{{url('quiz-muellim')}}">
					<img src="{{url('assets/images/admin/quizzes.jpg')}}" title="Quizlər" class="img img-responsive">
				</a>
			</div>
		</div>

		<div class=" col-md-3  col-sm-12 col-xs-12">
			<div class="row">
				<a href="{{url('meeting-muellim')}}">
					<img src="{{url('assets/images/admin/meeting.jpg')}}" title="Yığıncaqlar" class="img img-responsive">
				</a>
			</div>
		</div>

		<div class=" col-md-3  col-sm-12 col-xs-12">
			<div class="row">
				<a href="{{url('sinifler-muellim',$_SESSION['muellimID'])}}">
					<img src="{{url('assets/images/admin/schedule.jpg')}}" title="Dərs Cədvəli" class="img img-responsive">
				</a>
			</div>
		</div>

		<div class=" col-md-3  col-sm-12 col-xs-12">
			<div class="row">
				<a href="{{url('muellim(muellim)')}}">
					<img src="{{url('assets/images/admin/teachers.jpg')}}" title="Müəllimlər" class="img img-responsive">
				</a>
			</div>
		</div>

		<div class=" col-md-3  col-sm-12 col-xs-12">
			<div class="row">
				<a href="{{url('muellim-parents')}}">
					<img src="{{url('assets/images/admin/parents.jpg')}}" title="Valideynlər" class="img img-responsive">
				</a>
			</div>
		</div>

		<div class=" col-md-3  col-sm-12 col-xs-12">
			<div class="row">
				<a href="{{url('elaqe-muellim')}}">
					<img src="{{url('assets/images/admin/contact.jpg')}}" title="Əlaqə" class="img img-responsive">
				</a>
			</div>
		</div>

		<div class=" col-md-3  col-sm-12 col-xs-12">
			<a href="{{url('imtahanlar-muellim')}}">
				<div class="row">
					<img src="{{url('assets/images/admin/exams.jpg')}}" title="İmtahanlar" class="img img-responsive">
				</div>
			</a>
		</div>





		{{-- Mobile ucun olan hisseler --}}
		{{-- <ul class="col-md-10 col-md-offset-1">
			<li class="col-md-10 col-md-offset-1">
				<a href="{{url('sagird(muellim)')}}">
					<img src="{{url('assets/images/admin/students.jpg')}}" title="Şagirdlər" class="img img-responsive">
				</a>
			</li>

			<li class="col-md-10 col-md-offset-1">
				<a href="{{url('muellim(muellim)')}}">
					<img src="{{url('assets/images/admin/teachers.jpg')}}" title="Müəllimlər" class="img img-responsive">
				</a>
			</li>

			<li class="col-md-10 col-md-offset-1">
				<a href="{{url('muellim-parents')}}">
					<img src="{{url('assets/images/admin/parents.jpg')}}" title="Valideynlər" class="img img-responsive">
				</a>
			</li>

			<li class="col-md-10 col-md-offset-1">
				<a href="{{url('meeting-muellim')}}">
					<img src="{{url('assets/images/admin/meeting.jpg')}}" title="Yığıncaqlar" class="img img-responsive">
				</a>
			</li>

			<li class="col-md-10 col-md-offset-1">
				<a href="{{url('quiz-muellim')}}">
					<img src="{{url('assets/images/admin/quizzes.jpg')}}" title="Quizlər" class="img img-responsive">
				</a>
			</li>

			<li class="col-md-10 col-md-offset-1">
				<a href="{{url('sinifler-muellim',$_SESSION['muellimID'])}}">
					<img src="{{url('assets/images/admin/schedule.jpg')}}" title="Dərs Cədvəli" class="img img-responsive">
				</a>
			</li>

			<li class="col-md-10 col-md-offset-1">
				<a href="{{url('imtahanlar-muellim')}}">
					<img src="{{url('assets/images/admin/exams.jpg')}}" title="İmtahanlar" class="img img-responsive">
				</a>
			</li>

			<li class="col-md-10 col-md-offset-1">
				<a href="{{url('elaqe-muellim')}}">
					<img src="{{url('assets/images/admin/contact.jpg')}}" title="Əlaqə" class="img img-responsive">
				</a>
			</li>
		</ul> --}}
	</div>

</div>

</body>
</html>
<script src="{{url('assets/js/slide.js')}}"></script>