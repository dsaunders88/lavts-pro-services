<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Statamic\Facades\Entry;

class TabsController extends Controller
{
    public function show($id)
    {
        return view('components/_home_tabs', [
            'id' => $id,
            'currentTab' => Entry::query()
                ->where('collection', 'services')
                ->where('preview_title', $id)
                ->first()
        ]);
    }
}
