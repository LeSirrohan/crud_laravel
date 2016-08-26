<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class usercontroller extends Controller
{
	public function index()
	{
		$users = User::all();
		return View::make('users.index',compact('users'));
	}
	public function create()
	{
		# code...
	}
	public function show()
	{

	}
	public function store()
	{

	}

	public function edit()
	{

	}
	public function update()
	{

	}
	public function destroy()
	{

	}
}
