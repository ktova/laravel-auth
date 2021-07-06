<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\User;
   
class UserController extends BaseController
{

    public function getuser(Request $request)
    {
        try{
            echo 'oui';
            die();
            return $this->sendResponse($success, 'User retrieved');
        }
        catch( exception $e ){
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        }
    }
   
}