<!DOCTYPE html>
<html>
<head>
	<title>Qeydiyyat</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{url('assets/vendor/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{url('assets/vendor/font-awesome/css/font-awesome.css')}}">
	<link rel="stylesheet" href="{{url('assets/css/login.css')}}">
	<script src="{{url('assets/jquery-3.1.1.min.js')}}"></script>
	
</head>
<body style="background-image:url('assets/images/bg.jpg'); background-size:cover">
<div class="container-fluid">
	<div class="row">
		<div class="panel col-md-4 col-sm-10 col-xs-10 col-md-offset-4 col-sm-offset-1 col-xs-offset-1" style="margin-top:40px">
			<div class="panel-head">
				<i class="fa fa-paper-plane-o"></i>
			</div>

			<div class="panel-body">
				
				<form action="{{url('registercontrol')}}" enctype="multipart/form-data" method="post">
					 @if ($message = Session::get('success'))
				        <p>{{$message}}</p>
				     @endif

					<input class="hidden" type="text" value="" name="id">
					<input type="text" placeholder="Adınız" name="name" class="form-control">
					<br>
					<input type="text" placeholder="Soyadınız" name="surname" class="form-control">
					<br>
					<input type="text" placeholder="Ata adı" name="ata_adi" class="form-control">
					<br>
					<input type="date" placeholder="Yaşınız" name="age" class="form-control">
					<br>
					<select name="sinif_id" id="" value="Sinif" class="form-control">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="">Magistr</option>
					</select>
					<br>
					<input type="text" placeholder="Şəhər" name="city" class="form-control" required>
					<br>
					<input type="text" placeholder="Ünvanınız" name="address" class="form-control" required>
					<br>
					<input type="text" placeholder="Vəsiqənizin nömrəsi" name="passport_no" class="form-control" required>
					<br>
					<input type="file" placeholder="Şəkiliniz" name="photo" class="form-control" required>
					<br>
					<input type="email" placeholder="E-poçt ünvanınız" name="email" class="form-control" required>
					<br>
					<input type="password" placeholder="Şifrəniz" name="password" class="form-control" required min="10" max="100000000">
					<br>
					<input type="number" placeholder="Telefon nömrəniz" name="phone" class="form-control" required min="10" max="1000000000">
					<br>
					<input type="submit" value="Qeydiyyatdan keç" class="form-control submit" required>
					
					<a href="{{url('admin-login')}}" class="btn-info form-control btn">Geri</a>

					<input type="hidden" name="_token" value="{{csrf_token()}}">
				</form>				
				
			</div> 
		</div>
	</div>
</div>
</body>
</html>

<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function() {
    var elements = document.getElementsByTagName("INPUT");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("Xanaları diqqət ilə doldurun!");
            }
        };
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    }
})


</script>

