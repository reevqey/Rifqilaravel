<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Perkalian</title>
</head>
<body>
	<a href="{{url('/')}}"> Ke Menu Utama</a>
	<h4>
		Halaman Perkalian
	</h4>

	<form method="post" action="{{url('kalikan')}}">
		<input type="hidden" name="_token" value="{!!csrf_token()!!}">

		<input type="text" name="a" value="{{isset($nilai_a) ? $nilai_a : '0'}}"> X

		<input type="text" name="b" value="{{isset($nilai_b) ? $nilai_b : '0'}}">

		<input type="submit" name="proses" value="Proses">

		<input type="text" name="hasil" value="{{ isset($hasil) ? $hasil : '0'}}">
	</form>
</body>
</html>