<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class packagingController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$topic = 'packaging';
		$title = 'Packaging';
		
		return view('packaging', ['topic' => $topic, 'title' => $title]);
	}
}
