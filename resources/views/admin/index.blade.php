<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
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
			<img src="{{url('assets/images/logo.png')}}" class="img">	
			<a class="btn btn-info" href="{{url('')}}">Çıxış et</a>
		</div>
		
		<a href="{{url('settings-admin')}}">
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

		<div class=" col-md-3  col-sm-12 col-xs-12">    {{-- class  sagird donenHisseler  var idi burda--}}
			<div class="row">
				<a href="{{url('sagirdsiyahisi')}}">
					<img src="{{url('assets/images/admin/students.jpg')}}" title="Şagirdlər" class="img img-responsive"  >
				</a>
			</div>
		</div>

<div class=" col-md-3  col-sm-12 col-xs-12">    {{-- class  quiz donenHisseler  var idi burda--}}
			<div class="row">
				<a href="{{url('quiz-admin')}}">
					<img src="{{url('assets/images/admin/quizzes.jpg')}}" title="Quizlər" class="img img-responsive"  >
				</a>
			</div>
		</div>

		<div class=" col-md-3  col-sm-12 col-xs-12">    {{-- class  dersCedveli donenHisseler  var idi burda--}}
			<div class="row">
				<a href="{{url('derscedveli')}}">
					<img src="{{url('assets/images/admin/schedule.jpg')}}" title="Dərs Cədvəli" class="img img-responsive"  >
				</a>
			</div>
		</div>
<div class=" col-md-3  col-sm-12 col-xs-12">    {{-- class  meeting donenHisseler  var idi burda--}}
			<div class="row">
				<a href="{{url('meeting-admin')}}">
					<img src="{{url('assets/images/admin/meeting.jpg')}}" title="Yığıncaqlar" class="img img-responsive"  >
				</a>
			</div>
		</div>


		<div class=" col-md-3  col-sm-12 col-xs-12">    {{-- class muellimler  donenHisseler  var idi burda--}}
			<div class="row">
				<a href="{{url('muellimsiyahisi')}}">
					<img src="{{url('assets/images/admin/teachers.jpg')}}" title="Müəllimlər" class="img img-responsive"  >
				</a>
			</div>
		</div>

		<div class=" col-md-3  col-sm-12 col-xs-12">    {{--  class  valideyn donenHisseler  var idi burda--}}
			<div class="row">
				<a href="{{url('admin-parents')}}">
					<img src="{{url('assets/images/admin/parents.jpg')}}" title="Valideynlər"  class="img img-responsive" >
				</a>
			</div>
		</div>
	

	
		
		<div class=" col-md-3  col-sm-12 col-xs-12">    {{-- class imtahan  donenHisseler  var idi burda--}}
			<div class="row">
				<a href="{{url('imtahanlar-admin')}}">
					<img src="{{url('assets/images/admin/exams.jpg')}}" title="İmtahanlar"  class="img img-responsive" >
				</a>
			</div>
		</div>

		<div class=" col-md-3  col-sm-12 col-xs-12">    {{-- class  elaqe  donenHisseler  var idi burda--}}
			<div class="row">
				<a href="{{url('elaqe-admin')}}">
					<img src="{{url('assets/images/admin/contact.jpg')}}" title="Əlaqə"  class="img img-responsive" >
				</a>
			</div>
		</div>










		


		





		{{-- Mobile ucun olan hisseler --}}
		<!-- <ul class="col-md-10 col-md-offset-1">
			<li class="col-md-10 col-md-offset-1">
				<a href="{{url('sagirdsiyahisi')}}">
					<img src="{{url('assets/images/admin/students.jpg')}}" title="Şagirdlər" class="img img-responsive">
				</a>
			</li>

			<li class="col-md-10 col-md-offset-1">
				<a href="{{url('muellimsiyahisi')}}">
					<img src="{{url('assets/images/admin/teachers.jpg')}}" title="Müəllimlər" class="img img-responsive">
				</a>
			</li>

			<li class="col-md-10 col-md-offset-1">
				<a href="{{url('admin-parents')}}">
					<img src="{{url('assets/images/admin/parents.jpg')}}" title="Valideynlər" class="img img-responsive">
				</a>
			</li>

			<li class="col-md-10 col-md-offset-1">
				<a href="{{url('meeting-admin')}}">
					<img src="{{url('assets/images/admin/meeting.jpg')}}" title="Yığıncaqlar" class="img img-responsive">
				</a>
			</li>

			<li class="col-md-10 col-md-offset-1">
				<a href="{{url('quiz-admin')}}">
					<img src="{{url('assets/images/admin/quizzes.jpg')}}" title="Quizlər" class="img img-responsive">
				</a>
			</li>

			<li class="col-md-10 col-md-offset-1">
				<a href="{{url('derscedveli')}}">
					<img src="{{url('assets/images/admin/schedule.jpg')}}" title="Dərs Cədvəli" class="img img-responsive">
				</a>
			</li>

			<li class="col-md-10 col-md-offset-1">
				<a href="{{url('imtahanlar-admin')}}">
					<img src="{{url('assets/images/admin/exams.jpg')}}" title="İmtahanlar" class="img img-responsive">
				</a>
			</li>

			<li class="col-md-10 col-md-offset-1">
				<a href="{{url('elaqe-admin')}}">
					<img src="{{url('assets/images/admin/contact.jpg')}}" title="Əlaqə" class="img img-responsive">
				</a>
			</li>
		</ul> -->
	</div>

</div>

</body>
</html>
<script src="{{url('assets/js/slide.js')}}"></script>