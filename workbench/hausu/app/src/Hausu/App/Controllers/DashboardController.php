<?php namespace Hausu\App\Controllers;

use \Illuminate\Routing\Controller;
use \Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
	public function getIndex()
	{
		// if customer is already logged in redirects to dashboard
		echo "Dashboard";
	}
}