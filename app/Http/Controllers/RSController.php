<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RSController extends Controller
{
    public function kamar(){
        $kamar = DB::table('kamar')
        ->leftJoin('pasien', 'kamar.id_pasien', '=', 'pasien.id')
        ->leftJoin('dokter', 'kamar.id_pasien', '=', 'dokter.id')
        ->select('kamar.id','dokter.nama AS nama_dokter','pasien.nama AS nama_pasien','pasien.alamat','dokter.jabatan',)
        ->orderBy('kamar.id', 'asc')
        ->get();

    	return view('kamar0236',['kamar' => $kamar]);

	}
    public function tambah(){
        return view('tambah_user0236');
    }
    public function insert(Request $request)
    {
        DB::table('user')->insert([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => $request->password,
        ]);
        return redirect('/user0236');
    
    }

    public function dokter(){
        $dokter = DB::table('dokter')
        ->get();

    	return view('dokter0236',['dokter' => $dokter]);
    }
    public function pasien(){
        $pasien = DB::table('pasien')
        ->get();

    	return view('pasien0236',['pasien' => $pasien]);
    }
    public function user(){
        $user = DB::table('user')
        ->get();

    	return view('user0236',['user' => $user]);
    }

public function edit($id)
{

	$pasien = DB::table('pasien')->where('id',$id)->get();

	return view('edit_user0236',['pasien' => $pasien]);

}

public function update(Request $request)
{

	DB::table('pasien')->where('id',$request->id)->update([
		'nama' => $request->nama,
		'alamat' => $request->alamat,
	]);

	return redirect('/pasien0236');
}

public function hapus($id)
{

	DB::table('pasien')->where('id',$id)->delete();
		
	return redirect('/pasien0236');
}
public function filter(Request $request){
    $data = $data = DB::table('dokter')
    ->select(DB::raw('id,nama, jabatan'))
    ->where('jabatan',$request->jabatan)->get();

    return view ('dokter0236',['dokter'=>$data]);
}
}
