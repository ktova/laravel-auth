<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\Auth;
use Validator;   
use App\Models\Profile;
use App\Models\User;
use App\Http\Resources\Users as UsersRessource;
use App\Http\Resources\Profile as ProfileRessource;

class UserController extends BaseController
{

    public function getUsers(Request $request)
    {
        try{
            $success['response'] = 'oui';
            return $this->sendResponse($success, 'Users retrieved.');
        }
        catch( exception $e ){
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        }
    }

    public function getUser(int $id)
    {
        $user = User::find($id);
        $profile = Profile::find($id);
        try{
            if (is_null($user) || is_null($profile)) {
                return $this->sendError('User does not exist.');
            }

            $success['user'] = new UsersRessource($user);
            $success['profile'] = new ProfileRessource($profile);
            
            return $this->sendResponse($success, 'User retrieved.');
        }
        catch( exception $e ){
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        }
    }
   
}