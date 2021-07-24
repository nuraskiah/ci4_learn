<?php

namespace App\Controllers;

class Admin extends BaseController
{
  public function index()
  {
    $faskes = [];
    $filter = [];

    if (!empty($this->request->getVar('provinsi'))) {
      $query = [
        'provinsi' => $this->request->getVar('provinsi'),
      ];

      // get data provinsi
      $provinsi = $this->client->get('provinsi/' .  $this->request->getVar('provinsi'))->getBody();
      $provinsi = json_decode($provinsi)->nama;

      // get data kota
      $kota = '';
      if ($this->request->getVar('kota')) {
        $query = array_merge($query, ['kota' => $this->request->getVar('kota')]);
        $kota = $this->client->get('kota/' .  $this->request->getVar('kota'))->getBody();
        $kota = json_decode($kota)->nama;
      };

      $filter = [
        'provinsi' => $provinsi,
        'kota' => $kota,
      ];

      $faskes = model('Faskes')->where($query)->findAll();
    } else {
      $faskes = model('Faskes')->findAll();
    }

    $provinsi = $this->client->get('provinsi')->getBody();

    $data = [
      'title' => 'Dashboard',
      'faskes' => $faskes,
      'provinsi' => json_decode($provinsi)->provinsi,
      'filter' => $filter
    ];

    return view('pages/admin/index', $data);
  }

  public function login()
  {
    if (session()->get("logged_in")) {
      return redirect()->to(base_url('/admin'));
    }
    return view('pages/login');
  }

  public function simpan()
  {
    // dd($this->request->getVar());
    model('Faskes')->save($this->request->getVar());
    return redirect()->to('/admin');
  }

  public function hapus($id)
  {
    model('Faskes')->delete($id);
    return redirect()->to('/admin');
  }

  public function get($id)
  {
    return json_encode(model('Faskes')->find($id));
  }
}
