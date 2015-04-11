<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

/**
 *	Hanldes static documents uploads/downloads
 *
 */
class DocumentController extends Controller {

	/**
	 * Display a listing of the resource. (Not neccessary yet...)
	 *
	 * @return Response
	 */
	public function index()
	{
		
	}

	/**
	 * Get the file from the documents directory in public. 
	 *	make sure there are no "../ etc. in the filename"
	 *	otherwise this can be a vulenerability 
	 * @return Response
	 */
	public function getFile($filename)
	{
			
	}



}
