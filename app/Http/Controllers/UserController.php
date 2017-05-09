<?php

namespace App\Http\Controllers;

use App\Http\LoginRequests;

class UserController extends Controller
{
	public function __construct()
    {
        // Closure as callback
       /* $this->beforeFilter(function(){
            if(!Auth::check()) {
                return 'no';
            }else{
            	return 'Yes';
            }
        });*/

        // or register filter name
        // $this->beforeFilter('auth');
        //
        // and place this to app/filters.php
        // Route::filter('auth', function()
        // {
        //  if(!Auth::check()) {
        //      return 'no';
        //  }
        // });
    }
    

   
}
