<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     
    <div class="badan-utama">
        
        <header>
            <h2>Rumah Sakit Indah</h2>
            <p>Belajar CRUD pada SI Rumah Sakit</p>
        </header>

        <nav class="navigasi">
            <ul>
			<li><a class="active" href="/">Home</a></li>
				<li><a href="/kamar0236">Kamar</a></li>
                <li><a href="/dokter0236">Dokter</a></li>
                <li><a href="/pasien0236">Pasien</a></li>
                <li><a href="/user0236">User</a></li>
            </ul>
        </nav>
 
        <div class="menu-tengah">
            <div class="kotak">
	<h3>Data User</h3>
	<br>
    <a href="/tambah_user0236">TAMBAH DATA</a>
    <br>
    <br>
	<table cellspacing='0'>
		<tr>
        <th>ID</th>
			<th>Nama</th>
			<th>Username</th>
            <th>Password</th>
		</tr>
		@foreach($user as $u)
		<tr>
        <td>{{ $u->id }}</td>
			<td>{{ $u->nama }}</td>
            <td>{{ $u->username }}</td>
            <td>{{ $u->password }}</td>
		</tr>
		@endforeach
	</table>
	</div>
        </div>
        <footer>
            @Copyright 2021 || Valentino Febrian Saputra
        </footer>
 
    </div>
 
</body>
</html>