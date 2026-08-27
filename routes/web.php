<?php

use Illuminate\Support\Facades\Route;
use Laravel\Mcp\Request;

Route::get('/', function () {

    return view(
        'welcome',
        [
            'greeting' => 'Hello',
            'person' => Request('person', 'World'),
        ]
    );
});
