<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LineEntryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware(function ($request, $next) {
            $this->user = Auth::user(); // here the user should exist from the session
            return $next($request);
        });
    }

    public function index()
    {
        $items = Item::all();
        return view('line_entry.index', ['items' => $items]);
    }

    public function line_entry(string $id)
    {
        $items = Item::all();
        return view('line_entry.line_entry', ['items' => $items]);
    }
}
