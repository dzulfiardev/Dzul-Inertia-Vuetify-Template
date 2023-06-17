<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;

class UserController extends Controller
{
	public function index()
	{
		return Inertia::render('User/Index', [
			'toolbarTitle' => 'Users Page'
		]);
	}

	public function createUserPage()
	{
		return Inertia::render('User/Create', [
			'toolbarTitle' => 'Create New User'
		]);
	}
}
