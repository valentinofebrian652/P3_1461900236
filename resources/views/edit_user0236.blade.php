<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Pasien</title>
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
	<h3>Edit Pasien</h3>
    @foreach($pasien as $p)
	<form action="/pasien0236/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->nama }}"> <br/>
		Alamat <input type="text" required="required" name="alamat" value="{{ $p->alamat }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
	</div>
        </div>
 
        <footer>
            @Copyright 2021 || Valentino Febrian Saputra
        </footer>
 
    </div>
 
</body>
</html>