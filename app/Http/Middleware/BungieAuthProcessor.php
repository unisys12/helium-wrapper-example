<?php

namespace App\Http\Middleware;

use Helium\ApiWrapper\Api\Processor;
use Helium\ApiWrapper\Api\Request;
use Helium\ApiWrapper\Api\Response;

class BungieAuthProcessor extends Processor
{
    public static function handle(
        Request $request,
        callable $next
    ): Response {
        //Pre-execution
        $request->headers(['X-API-KEY' => getenv('BUNGIE_KEY')]);
        //Execute
        $response = $next($request);
        //Post-execution
        return $response;
    }
}
