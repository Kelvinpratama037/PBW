<!DOCTYPE html>
<html>
<head>
	<title>Penambahan Data Player Baru</title>
		<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">
	  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h2>Create New Data Player</h2>
		<a href="/data">Kembali</a>
		<br>
		<form action="/data/store" method="post">
			<div class="form-group">
				{{ csrf_field() }}
					<label>Nickname: </label>
					<input type="text" name="nickname" required="required" class="form-control"> <br>
					<label>Game: </label>
					<input type="text" name="game" required="required" class="form-control"> <br>
					<label>Umur: </label>
					<input type="text" name="umur" required="required" class="form-control"> <br>
                    <label>Jenis kelamin</label> <br>
                   		<input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki" checked> Laki-Laki <br>
                    	<input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">  Perempuan <br>
					<label>Negara: </label>
					<input type="text" name="negara" required="required" class="form-control"> <br>
					<input type="submit" value="Save Data">
			</div>
		</form>
	</div>	
</body>
</html>