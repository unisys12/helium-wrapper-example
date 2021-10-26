<?php

use App\Http\Middleware\BungieAuthProcessor;
use Helium\ApiWrapper\Api\Route;

Route::group('https://www.bungie.net', [BungieAuthProcessor::class], function () {
    // Fetch the whole Maniest document
    Route::get('manifest', '/Platform/Destiny2/Manifest/');

    // Return only the `jsonWorldComponentContent` for a give path/table
    Route::get('manifest.jsonComponentContent', '{path}');
});
