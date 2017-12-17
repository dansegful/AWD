<?php

class UserController extends BaseController {


	public function admin(){
		$users = User::all();
		return View::make('users.admin',compact('users'));
	}

	public function login(){
		return View::make('admin.login');
	}


	public function check(){

		$inputs = Input::all();
		if(Input::get('remember')){
			$remember = true;
		}
		else
		{
			$remember = false;
		}
			$inputs['username'] = e($inputs['username']);
			$inputs['password'] = e($inputs['password']);
			$validation = Validator::make($inputs,[
				'username' => 'required',
				'password' => 'required',
		]);
		if($validation->fails()){
				return Redirect::back()->withErrors($validation);
		}
		else{
			if(Auth::attempt(['username' => $inputs['username'], 'password' => $inputs['password']]))
			{
				 Auth::attempt(['username' => $inputs['username'], 'password' => $inputs['password']]);
				 return Redirect::route('home')->with('success','Vous êtes bien connecté');
			}
			else{
					return Redirect::back()->with('error',"Le mot de passe ou le nom d'utilisateur est inccorect");
			}
		}

	}

	public function logout(){
		Auth::logout();
		return Redirect::route('home')->with('success','Vous êtes maintenant déconnecté');

	}

}
