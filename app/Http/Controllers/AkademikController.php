<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Mahasiswa;
use App\Dosen;
use DB;
use App\MataKuliah;

class AkademikController extends Controller
{
    public function index(){
		return view('akademik');
    }

    public function getMahasiswa(){
		$mahasiswa = Mahasiswa::all();
		return view('mahasiswa', compact('mahasiswa'));
    }

    public function getDosen(){
		$dosen = Dosen::all();
		return view('dosen', compact('dosen'));
    }

    public function newMahasiswa(){
		return view('tambah-mahasiswa');
    }

    public function newDosen(){
		return view('tambah-dosen');
    }

    public function newMahasiswaPost(Request $request){
    	$mahasiswa = new Mahasiswa;

        $mahasiswa->nama = $request->nama;
        $mahasiswa->nrp = $request->nrp;
        $mahasiswa->alamat = Str::random(10);

        $mahasiswa->save();
		return $this->getMahasiswa();
    }

    public function newDosenPost(Request $request){
    	$dosen = new Dosen;

        $dosen->nama = $request->nama;
        $dosen->nik = $request->nik;
        $dosen->mengajar = rand(1,4);
        $dosen->alamat = Str::random(10);

        $dosen->save();
		return $this->getDosen();
    }

    public function hapusMahasiswa(Request $request){
        Mahasiswa::destroy($request->id);
        return $this->getMahasiswa();
    }

    public function hapusDosen(Request $request){
        Dosen::destroy($request->id);
        return $this->getDosen();
    }

    public function getMahasiswaEdit($id){
        $dosen = Mahasiswa::find($id);
        return view('mahasiswa-edit', compact('dosen'));
    }

    public function getDosenEdit($id){
        $dosen = Dosen::find($id);
        return view('dosen-edit', compact('dosen'));
    }

    public function dosenEdit(Request $request){
        $dosen = Dosen::find($request->id);
        $dosen->nama = $request->nama;
        $dosen->nik = $request->nik;
        $dosen->save();
        return $this->getDosen();
    }

    public function mahasiswaEdit(Request $request){
        $dosen = Mahasiswa::find($request->id);
        $dosen->nama = $request->nama;
        $dosen->nrp = $request->nrp;
        $dosen->alamat = $request->alamat;
        $dosen->save();
        return $this->getMahasiswa();
    }

    public function joinContoh(){
        $data = DB::table('mata_kuliah')
            ->join('dosen', 'dosen.id', '=', 'mata_kuliah.id')
            ->join('mahasiswa', 'mahasiswa.id', '=', 'dosen.id')
            ->get();
        return view('join', compact('data'));
    }

    public function relationshipContoh(){
        $mataKuliah = MataKuliah::all();
        $dosen = Dosen::all();
        return view('relationship', compact('mataKuliah', 'dosen'));
    }

    public function rawContoh(){
        $join = 'SELECT * FROM mata_kuliah mk INNER JOIN dosen d on mk.id = d.id INNER JOIN mahasiswa m on d.id = m.id';

        $hasmany = 'SELECT * FROM dosen d, matakuliah mk WHERE d.id = mk.id AND d.mengajar = (id) ';
        $hasone = 'SELECT * FROM dosen d, matakuliah mk WHERE d.id = mk.id AND d.mengajar = (id) ';
        return view('raw', compact('join', 'hasone', 'hasmany'));
    }

    public function getMatakuliahDetail($id){
        $matkul = MataKuliah::find($id);
        $dosen = MataKuliah::find($id)->pengajar;
        return view('matkul-detail', compact('dosen', 'matkul'));
    }

    public function getPengajarDetail($id){
        $dosens = Dosen::find($id);
        $dosen = Dosen::find($id)->mengajars;
        return view('detail-dosen', compact('dosen','dosens'));
    }
    
}
