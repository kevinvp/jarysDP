<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class digitalPrintingController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$topic = 'digitalPrinting';
		$title = 'Digital Printing';

		$dir = 'jarys/dp/folders';
		$files = array_diff(scandir($dir,1), array('..', '.'));



		return view('digital_printing', ['topic' => $topic, 'title' => $title, 'files' => $files]);
	}

	public function getFiles() {

	}
}
