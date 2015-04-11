<?php namespace App\Http\Controllers;

use App\Account;

class LogController extends Controller {

	/*
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show a warning message that this is only for accounts I am working on. 
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('accountLogs.logs', ['account' => 'none']);
	}

	/**
	 * Show the log for this user
	 *
	 * @return Response
	 */
	public function log($account)
	{	
		return var_dump(Account::find(1));
		return 'shit'; 
	}

}
