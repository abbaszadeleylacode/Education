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
		<div class="logo col-md-12">
			<img src="{{url('assets/images/logo.png')}}" alt="">
		</div>

		<div class="sagird col-md-3 donenHisseler col-sm-12 col-xs-12">
			<div class="row">
				<a href="{{url('sagirdsiyahisi')}}">
					<img src="{{url('assets/images/admin/students.jpg')}}" title="Şagirdlər">
				</a>
			</div>
		</div>

		<div class="quiz col-md-2 donenHisseler col-sm-12 col-xs-12">
			<div class="row">
				<img src="{{url('assets/images/admin/quizzes.jpg')}}" title="Quizlər">
			</div>
		</div>

		<div class="meeting col-md-2 donenHisseler col-sm-12 col-xs-12">
			<div class="row">
				<img src="{{url('assets/images/admin/meeting.jpg')}}" title="Yığıncaqlar">
			</div>
		</div>

		<div class="dersCedveli col-md-2 donenHisseler col-sm-12 col-xs-12">
			<div class="row">
				<img src="{{url('assets/images/admin/schedule.jpg')}}" title="Dərs Cədvəli">
			</div>
		</div>

		<div class="muellimler col-md-3 donenHisseler col-sm-12 col-xs-12">
			<div class="row">
				<img src="{{url('assets/images/admin/teachers.jpg')}}" title="Müəllimlər">
			</div>
		</div>

		<div class="valideyn col-md-3 donenHisseler col-sm-12 col-xs-12">
			<div class="row">
				<img src="{{url('assets/images/admin/parents.jpg')}}" title="Valideynlər">
			</div>
		</div>

		<div class="elaqe col-md-6 donenHisseler col-sm-12 col-xs-12">
			<div class="row">
				<img src="{{url('assets/images/admin/contact.jpg')}}" title="Əlaqə">
			</div>
		</div>

		<div class="imtahan col-md-3 donenHisseler col-sm-12 col-xs-12">
			<div class="row">
				<img src="{{url('assets/images/admin/exams.jpg')}}" title="İmtahanlar">
			</div>
		</div>





		{{-- Mobile ucun olan hisseler --}}
		<ul class="col-md-10 col-md-offset-1">
			<li class="col-md-10 col-md-offset-1">
				<img src="{{url('assets/images/admin/students.jpg')}}" title="Şagirdlər" class="img img-responsive">
			</li>

			<li class="col-md-10 col-md-offset-1">
				<img src="{{url('assets/images/admin/teachers.jpg')}}" title="Müəllimlər" class="img img-responsive">
			</li>

			<li class="col-md-10 col-md-offset-1">
				<img src="{{url('assets/images/admin/parents.jpg')}}" title="Valideynlər" class="img img-responsive">
			</li>

			<li class="col-md-10 col-md-offset-1">
				<img src="{{url('assets/images/admin/meeting.jpg')}}" title="Yığıncaqlar" class="img img-responsive">
			</li>

			<li class="col-md-10 col-md-offset-1">
				<img src="{{url('assets/images/admin/quizzes.jpg')}}" title="Quizlər" class="img img-responsive">
			</li>

			<li class="col-md-10 col-md-offset-1">
				<img src="{{url('assets/images/admin/schedule.jpg')}}" title="Dərs Cədvəli" class="img img-responsive">
			</li>

			<li class="col-md-10 col-md-offset-1">
				<img src="{{url('assets/images/admin/exams.jpg')}}" title="İmtahanlar" class="img img-responsive">
			</li>

			<li class="col-md-10 col-md-offset-1">
				<img src="{{url('assets/images/admin/contact.jpg')}}" title="Əlaqə" class="img img-responsive">
			</li>
		</ul>
	</div>

</div>

</body>
</html>
<script src="{{url('assets/js/slide.js')}}"></script>