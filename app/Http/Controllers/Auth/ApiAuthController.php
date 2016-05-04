<?php
/**
 * Created by PhpStorm.
 * User: sheikhu
 * Date: 03/05/16
 * Time: 00:23
 */

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Api\ApiController;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class ApiAuthController extends ApiController
{
    public function authenticate(Request $request)
    {
        // grab credentials from the request
        $credentials = $request->only('email', 'password');

        try {
            // attempt to verify the credentials and create a token for the user
            if (! $token = JWTAuth::attempt($credentials)) {
                return $this->respondUnauthorized('Bad credentials, please retry !');
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return $this->respondInternalError('Cannot create token !');
        }

        // all good so return the token
        return $this->respondWithSuccess(compact('token'));
    }
}