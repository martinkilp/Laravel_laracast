<?php

use Illuminate\Support\Facades\Route;
use Laravel\Mcp\Request;

Route::get('/', function () {

    return view(
        'welcome',
        [
            'tasks' =>
            [
            
                'Go to the market',
                'walk the dog',
                'watch a video',
            
            ]
        ]
    );
});
