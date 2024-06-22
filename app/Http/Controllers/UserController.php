<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    //
    public function checkUser(Request $request){
    // var_dump(Auth::user());

        // $request = Auth::check();
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            return redirect()->route('home');
        }
        else{
            return redirect()->route('login')->with('errors', 'Invalid credentials'); // Redirect to 'login' route with error message
        }
    }
public function signup(Request $request){
$users = $request->validate([
'name' => 'required',
'email' => 'required|email|unique:users',
'password' => 'required|confirmed',

]);
// dd($users);
// die();
$user = User::create($users);
// Auth::login($user);
return redirect()->route('login'); 
}


public function login(Request $request)
{
    // Perform your authentication logic, for example:
    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        // Authentication successful
        $res = Auth::check(); // Check authentication status

        // Redirect to the frontPage.blade.php view with $res
        return view('frontPage', compact('res'));
    } else {
        // Authentication failed
        // Handle the failed login attempt
        return redirect()->route('login')->with('error', 'Invalid credentials');
    }
}


}
