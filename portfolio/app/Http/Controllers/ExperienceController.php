<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ExperienceController extends Controller {

	/**
	 * Show experiences
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return view('experience');
	}


}
