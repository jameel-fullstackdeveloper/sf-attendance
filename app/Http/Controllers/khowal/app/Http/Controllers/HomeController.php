<?php

namespace App\Http\Controllers;
use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Attendance;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;
use Illuminate\Http\JsonResponse;

class HomeController extends BaseController
{

    public function register(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'Username' => 'required',
            'password' => 'required',
            'Status' => 'required',
            'CentreName' => 'required',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $input = $request->all();
        $input['password'] = Hash::make($request->password);
        $user = User::create($input);
        $success['token'] =  $user->createToken('MyApp')->plainTextToken;
        $success['name'] =  $user->name;
        return $this->sendResponse($success, 'User register successfully.');
    }


    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request): JsonResponse
    {
        $user= User::where('email', $request->email)->first();
            if (!$user || !Hash::check($request->password, $user->password)) {
                return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
            }
            else{ 
                $success['token'] =  $user->createToken('MyApp')->plainTextToken; 
                return $this->sendResponse($success, 'User login successfully.');
            } 
    }

    public function attendance(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'Latitute' => 'required',
            'Longtitu' => 'required',
            'TakeSelfie' => 'required',
            'YouContactCityCoordinator' => 'required',
            'CityCoordinatorcontactyou' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $input = $request->all();
        $attendance = Attendance::create($input);
        return response()->json([
            'status'=>200,
            'message'=>'Attendance Successfully',
        ]);
    }

}
