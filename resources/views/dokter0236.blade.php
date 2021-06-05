<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dokter</title>
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
	<h3>Data Dokter</h3>
	<br>
    <center>
    <form method="post" action="/dokter0236/filter">
    @csrf
<label >Jabatan: </label>
<select name="jabatan">
@foreach(DB::table('dokter')->select('jabatan')->groupby('jabatan')->get() as $jabatan)
        <option value="{{$jabatan->jabatan}}">{{$jabatan->jabatan}}</option>
    @endforeach
</select>
<button name="submit">Tampilkan</button>
<br>
<br>
	<table cellspacing='0'>
		<tr>
            <th>ID</th>
			<th>Nama</th>
			<th>Jabatan</th>
		</tr>
		@foreach($dokter as $d)
		<tr>
			<td>{{ $d->id }}</td>
			<td>{{ $d->nama }}</td>
            <td>{{ $d->jabatan }}</td>
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