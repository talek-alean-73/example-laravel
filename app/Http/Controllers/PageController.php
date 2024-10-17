<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Log;
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;
use App\Models\User;

class PageController extends BaseController
{
    public function index(){


     //   Log::info("0000000000000000" );
        return view('welcome');
    }

    public function page(){
        $x = 20;
        // User::create([
        //     'name' => 'name2',
        //     'email' => 'email2@eee.com',
        //     'password' => '11111'
        // ]);
        return view('page');
    }
    
}
