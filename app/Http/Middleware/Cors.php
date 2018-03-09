<?php
/**
 * Created by PhpStorm.
 * User: rudolfn
 * Date: 2018/03/09
 * Time: 15:31
 */

namespace App\Http\Middleware;

use Closure;

class Cors {
    public function handle($request, Closure $next){
        return $next($request)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
            ->header('Access-Control-Allow-Headers', 'Content-Type, Authorization, X-Requested-With, Pg-Page-Action, Pg-Auth-Token');
    }
}