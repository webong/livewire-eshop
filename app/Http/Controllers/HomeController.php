<?php
namespace App\Http\Controllers;

use App\Item;
class HomeController
{
    /**
     * Show the application.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function __invoke()
    {
        $items = Item::all();
        return view('index', compact('items'));
    }
}
