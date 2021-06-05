<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rumah Sakit Indah</title>
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
	<h3>Data Kamar</h3>
	<br>
    <center>


	<table cellspacing='0'>
		<tr>
			<th>Kamar</th>
			<th>Pasien</th>
			<th>Alamat Pasien</th>
            <th>Dokter</th>
			<th>Jabatan Dokter</th>
		</tr>
		@foreach($kamar as $k)
		<tr>
			<td>{{ $k->id }}</td>
			<td>{{ $k->nama_pasien }}</td>
            <td>{{ $k->alamat }}</td>
            <td>{{ $k->nama_dokter }}</td>
            <td>{{ $k->jabatan }}</td>
		</tr>
		@endforeach
	</table></center>
	</div>
        </div>
        <footer>
            @Copyright 2021 || Valentino Febrian Saputra
        </footer>
 
    </div>
 
</body>
</html>