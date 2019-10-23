<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function getIndex(){
    	return view('dashboard/dashboard');
    }

    public function getShowProfileUsers($value='')
    {
    	echo $value;
    }

    public function postUpdateStatus($value='')
    {
    	echo 'wew';
    }

    public function getJajang($value='')
    {
        echo 'sds';
    }

}
