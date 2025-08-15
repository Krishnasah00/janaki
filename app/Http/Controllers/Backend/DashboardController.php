<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /** Starts ::  Index */
    public function index()
    {
        $data = [
            'type' => 'success',
            'message' => 'done body',
        ];
        return view('backend.dashboard.index', $data);
    }
    /** Ends ::  Index */

    /** Starts ::  Index */
    /** Ends ::  Index */
}
