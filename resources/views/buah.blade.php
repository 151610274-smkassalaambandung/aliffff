<html>
<head>
	<title>Halaman Saya</title>
</head>
<body>
	<center>
	<h1>BUAH</h1>
	@foreach($buah as $data)
	{{$data}}<hr>
	@endforeach
	<br>
	<br>
	<h1>MAHKLUK HIDUP</h1>
	@foreach($mahluk as $data)
	{{$data}}<hr>
	@endforeach
	<br>
	<br>
	<h1>KOMPUTER</h1>
	@foreach($komputer as $data)
	{{$data}}<hr>
	@endforeach
	</center>
</html>