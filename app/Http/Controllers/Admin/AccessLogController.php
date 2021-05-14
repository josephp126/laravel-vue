<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AccessLog;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AccessLogController extends Controller
{
    /**
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $accessLogs = AccessLog::paginate(access_logs)->get();

        return view('access_logs.index', compact('accessLogs'));
    }
}
