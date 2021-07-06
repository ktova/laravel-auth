<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Validator;   
class UserController extends BaseController
{

    public function getuser(Request $request)
    {
        try{
            echo 'oui';
            return $this->sendResponse($success, 'User retrieved');
        }
        catch( exception $e ){
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        }
    }
   
}