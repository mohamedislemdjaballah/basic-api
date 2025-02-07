<?php

namespace App\Http\Controllers;

use App\traits\ApiResponse;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    use ApiResponse;
    public function index()
    {
        return $this->ok('This is a get request');
    }
}