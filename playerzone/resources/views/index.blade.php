<!DOCTYPE html>
<html>
<head>
	<title>Tampilan Data Player Zone Dari Database</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h2>Tabel Player Zone</h2>
		<a href="/data/create"> + Add New Player </a>
	<br>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Nickname</th>
					<th>Game</th>
					<th>Umur</th>
					<th>Jenis Kelamin</th>
					<th>Negara</th>
					<th>Action</th>
				</tr>
			</thead>
		@foreach($data as $d)
			<tbody>
				<tr>
					<td>{{ $d->nickname }}</td>
					<td>{{ $d->game }}</td>
					<td>{{ $d->umur }}</td>
					<td>{{ $d->jenis_kelamin }}</td>
					<td>{{ $d->negara }}</td>
					<td><a href="/data/edit/{{ $d->id}}">Edit</a> | <a href="/data/delete/{{ $d->id }}">Delete</a></td>
				</tr>
			</tbody>
		@endforeach
		</table>
	</div>
</body>
</html>