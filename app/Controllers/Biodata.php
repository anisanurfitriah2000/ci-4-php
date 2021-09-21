<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Biodata extends BaseController
{
	public function index()
	{
		//
	}
	public function profil()
	{
		$data['nama']="Anisa Nurfitriah";
		$data['nim']="201912004";
		$data['jeniskelamin']="Perempuan";
		$data['alamat']="Jl.Kapal pinisi 4 rt 35 no30 loktuan";
		echo view("profil", $data);
	}
	public function portopolio()
	{
		$data['prestasi']="perwakilan bontang lomba administrator jaringan";
		$data['pengalamankerja']="bekerja sebagai teknik jaringan";
		echo view("portopolio", $data);
	}
	public function hubungiSaya()
	{
		echo view("hubungiSaya");
	}
}
