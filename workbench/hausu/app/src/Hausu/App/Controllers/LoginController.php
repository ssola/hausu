<?php namespace Hausu\App\Controllers;

use \Illuminate\Routing\Controller;
use \Illuminate\Support\Facades\Redirect;
use \Illuminate\Support\Facades\Input;
use \Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
	public function postIndex()
	{
		$user = Input::except('_token');
		
		$rules = [
			'email' => 'required|email',
			'password' => 'required'
		];

		$validator = Validator::make($user, $rules);

		if(!$validator->passes()) {
			echo "Here";die;
			throw new \Exception("Validation failed!");
		}

		echo "heee";die;
	}
}