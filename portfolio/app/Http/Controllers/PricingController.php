<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PricingController extends Controller {

	/**
	 * Return a static page of pricing info
	 *
	 * @return Response
	 */
	public function index()
	{
		
		return view('pricing'); 
	}


}
