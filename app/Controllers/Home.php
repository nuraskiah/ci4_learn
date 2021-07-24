<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		// dd("");
		$res = $this->client->get('https://data.covid19.go.id/public/api/pemeriksaan-vaksinasi.json')->getBody();
		// $res = file_get_contents('https://data.covid19.go.id/public/api/pemeriksaan-vaksinasi.json');
		$parsed = json_decode($res);

		$data = [
			"vaksinasi" => $parsed->vaksinasi
		];

		return view('pages/home/index', $data);
	}
}
