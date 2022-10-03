<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KomputerController extends Controller
{
	public function index()
	{
		// mengambil data dari table data_computer
		$data_computer = DB::table('data_computer')->get();

		// mengirim data data_computer ke view index
		return view('index', ['data_computer' => $data_computer]);
	}

	// method untuk menampilkan view form tambah data_computer
	public function tambah()
	{

		// memanggil view tambah
		return view('tambah');
	}

	// method untuk insert data ke table data_computer
	public function store(Request $request)
	{
		// insert data ke table data_computer
		DB::table('data_computer')->insert([
			'name' => $request->name,
			'specs' => $request->specs,
			'price' => $request->price,
			'stock' => $request->stock
		]);
		// alihkan halaman ke halaman komputer
		return redirect('/komputer');
	}

	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$data_computer = DB::table('data_computer')->where('id', $id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('edit', ['data_computer' => $data_computer]);
	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data data_computer
		DB::table('data_computer')->where('id', $request->id)->update([
			'name' => $request->name,
			'specs' => $request->specs,
			'price' => $request->price,
			'stock' => $request->stock
		]);
		// alihkan halaman ke halaman data_computer
		return redirect('/komputer');
	}

	// method untuk hapus data data_computer
	public function hapus($id)
	{
		// menghapus data data_computer berdasarkan id yang dipilih
		DB::table('data_computer')->where('id', $id)->delete();

		// alihkan halaman ke halaman data_computer
		return redirect('/komputer');
	}
}
