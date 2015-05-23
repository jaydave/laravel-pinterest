<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ListController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		//return view('list');
		return view('listimage');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{

		$heights = [254, 300, 192, 450, 350, 200, 360, 420, 270, 400, 200];
		$thumb = ['abstract', 'animals', 'cats', 'city', 'food', 'nature', 'transport'];
		$data = [];

		for($i = 0; $i< 60; $i++){
			$data[$i] = [
					"title" => "<TITLE>",
					"blurb" => substr(str_shuffle(str_repeat('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789',5)),0,32),
					"author" => "<AUTHOR>",
					"thumbnail_url" => '250/' . $heights[$i % count($heights)] . '/' . $thumb[ floor( ( (float) mt_rand() / (float) mt_getrandmax()) * count($thumb)) ],
					"details_url" => "PLACEHOLDER"
				];
		}

		return response()->json($data);
	//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
