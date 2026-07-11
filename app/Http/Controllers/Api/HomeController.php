<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Home\HomeService;

class HomeController extends Controller
{
    /**
     * Home dashboard service.
     */
    protected HomeService $homeService;

    /**
     * Create a new controller instance.
     */
    public function __construct(HomeService $homeService)
    {
        $this->homeService = $homeService;
    }

    /**
     * Home Dashboard API
     */
    public function index(Request $request)
    {
        $user = $request->user();

        $dashboard = $this->homeService->getDashboard($user);

        return response()->json([
            'success' => true,
            'data' => $dashboard,
        ]);
    }
}