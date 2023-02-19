<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\RegesterMail;
use App\Mail\SendMail;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    /*
        $this->validate($data, [
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'Phone' => 'required|max:15',
            'email' => 'required|email|string|max:255',  unique:users,email
            'password' => 'password' => [
                'required',
                'confirmed',
                Password::min(8)->letters()->numbers()
            ]
        ]);
    */


    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo ="condition";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'fristname' => ['required', 'string', 'max:255'],
            'phone' => ['required','max:20'],
            'email' => ['required', 'string', 'email', 'max:255' , 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
//       Mail::to(env('MAIL_FROM_ADDRESS'))->send(new RegesterMail($data['name'] ,$data['fristname'],$data['Genes'] ,$data['Country'] ,$data['phone'] ,$data['email'] ));




        $user= User::create([
            'name' => $data['name'],
            'fristname' => $data['fristname'],
            'Genes' => $data['Genes'],
            'Country' => $data['Country'],
            'phone' => $data['phone'],
            'Condition' =>0,
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

//        Mail::to($data['email'])->send(new SendMail($data['name'] ,$data['fristname'],$data['gender'] ,$data['Country']));
        return  $user;
    }
}
