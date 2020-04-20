<!DOCTYPE html>
<html>
<head>
	<title>Pengeditan Data Player</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h2>Edit Data Player</h2>
		<a href="/data">Kembali</a>
		<br>
		@foreach($data as $d)
		<form action="/data/update" method="post">
			{{ csrf_field() }}
			<div class="form-group">
				<input type="hidden" name="id" value="{{ $d->id}}"> <br>
					<label>Nickname: </label>
					<input type="text" required="required" name="nickname" value="{{ $d->nickname }}" class="form-control"> <br>
					<label>Game: </label>
					<input type="text" required="required" name="game" value="{{ $d->game }}" class="form-control"> <br>
					<label>Umur:</label>
					<input type="text" required="required" name="umur" value="{{ $d->umur }}" class="form-control"> <br>


					<label>Jenis kelamin</label> <br>
                   		<input class="form-check-input" type="radio" required="required" name="jenis_kelamin" value="Laki-laki" checked> Laki-Laki <br>
                    	<input class="form-check-input" type="radio" required="required" name="jenis_kelamin" value="Perempuan">  Perempuan <br>

					<label>Negara:</label>
					<input type="text" required="required" name="negara" value="{{ $d->negara }}" class="form-control"> <br>
					<input type="submit" value="Save Data">
			</div>
		</form>
		@endforeach
	</div>
</body>
</html>