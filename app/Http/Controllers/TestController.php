<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class TestController extends BaseController
{
<<<<<<< Updated upstream
   public function index(){
    return view('welcome');
   }

   public function dashboard(){
      return view('dashboard');
   }
=======
    use AuthorizesRequests, ValidatesRequests;

    public function test(){  
            return view('index');
    }
>>>>>>> Stashed changes
}
