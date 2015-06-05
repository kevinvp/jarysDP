<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class offsetController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$topic = 'offset';
		$title = 'Offset';
		
		return view('offset', ['topic' => $topic, 'title' => $title]);
	}
}
