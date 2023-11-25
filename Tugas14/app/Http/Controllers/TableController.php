<?php

namespace App\Http\Controllers;

class TableController extends Controller
{
    public function table()
    {
        return view('table');
    }

    public function dataTable()
    {
        return view('data-table');
    }
}
