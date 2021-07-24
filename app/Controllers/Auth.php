<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
	public function login()
	{
		$this->session->set("logged_in", true);
		return redirect()->to(base_url('/admin'));
	}

	public function logout()
	{
		$this->session->destroy();
		return redirect()->to(base_url('/'));
	}
}
