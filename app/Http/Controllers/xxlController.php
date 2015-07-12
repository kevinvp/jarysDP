<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class xxlController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$topic = 'xxl';
		$title = 'XXL';
		
		return view('xxl', ['topic' => $topic, 'title' => $title]);
	}
}
