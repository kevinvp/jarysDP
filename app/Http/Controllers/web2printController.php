<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class web2printController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$topic = 'web2print';
		$title = 'Web 2 Print';
		
		return view('web2print', ['topic' => $topic, 'title' => $title]);
	}
}
