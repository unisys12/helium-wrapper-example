<?php

use App\Http\Controllers\ManifestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/manifest', [ManifestController::class, 'index']);
Route::get('/manifest/jsonWorldComponentContentPaths', [ManifestController::class, 'jsonWorldComponentContentPaths']);
Route::get('/manifest/jsonComponentContent/common/destiny2_content/json/{lang}/{table}', [ManifestController::class, 'jsonComponentContent'])->name('json.content');
// /common/destiny2_content/json/en/DestinyNodeStepSummaryDefinition-c8cb3f30-f991-44b8-9f1d-8a25e863bb0e.json
