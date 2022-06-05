<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\Models\User;

class LoginController extends Controller
{

    public function login(Request $request)
    {
        $out = new \Symfony\Component\Console\Output\ConsoleOutput();
        
       
        $login = $request->validate([
            'email' => 'required',
            'password'=> 'required',
        ]);
        // $test = Auth::attempt([
        //     'email' => 'testt1@example.com',
        //     'password'=> '123'
        // ]);
        // $out->writeln($test);
        

        if (Auth::attempt($login)) {
            /** @var \App\Models\MyUserModel $user **/
            $user = Auth::user();
            $token = $user->createToken('Token Name')->accessToken;
            return response(['user' => Auth::user(), 'accessToken' => $token]);
        }else{
            return response(['message' => 'Invalid login credentials']);
        }
        
    }
}
