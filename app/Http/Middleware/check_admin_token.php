<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
USE APP\TRAITS\all;
class check_admin_token
{
    USE all;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user=null;
        try{
            $user=JwtAuth::ParseToken()->authenticate();
        }catch(\Exception $e){
            if($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException){
                // return response()->json(['success'=>false , 'msg'=>'INVALID_TOKEN',200']);
                return $this-> return_error('E3001','INVALID_TOKEN'); // if id built func return massage use it ,else use first code
            }elseif($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){
                // return response()->json(['success'=>false , 'msg'=>'INVALID_TOKEN',200']);
                return $this-> return_error('E3001','TokenExpiredException'); // if id built func return massage use it ,else use first code
            }else{
                // return response()->json(['success'=>false , 'msg'=>'INVALID_TOKEN',200']);
                return $this-> return_error('E3001','TOKEN_NOTFOUND'); // if id built func return massage use it ,else use first code
            }

        }catch(\Throwable $e){
            if($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException){
                // return response()->json(['success'=>false , 'msg'=>'INVALID_TOKEN',200']);
                return $this-> return_error('E3001','INVALID_TOKEN'); // if id built func return massage use it ,else use first code
            }elseif($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){
                // return response()->json(['success'=>false , 'msg'=>'INVALID_TOKEN',200']);
                return $this-> return_error('E3001','TokenExpiredException'); // if id built func return massage use it ,else use first code
            }else{
                // return response()->json(['success'=>false , 'msg'=>'INVALID_TOKEN',200']);
                return $this-> return_error('E3001','TOKEN_NOTFOUND'); // if id built func return massage use it ,else use first code
            }

        }

        if(!$user){
            // return response()->json(['success'=>false , 'msg'=>'unauthenticated',200']);
            return $this-> return_error('E331',trans('unauthenticated'));

        }
        return $next($request);
    }
} // end class
