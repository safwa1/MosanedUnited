<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class NafathController extends Controller
{
    //
    public function index() {
        return view('nafathlogin');
    }
    
    public function check(Request $request) {
        $this->validate($request, [
            'natId' => 'required|min:10|max:10',
        ]);
        
        $id = $request->natId;
        
        $trusted = $this->getNatInfo($id);
        
        
       
        if(!is_array($trusted) || !array_key_exists("status" ,$trusted)) {
            return Redirect::back()->withErrors(['message' => "تاكد من كتابة رقم الهوية خاصتك بشكل صحيح ثم حاول مرة أخرى"]);
            
        }
        
        if($trusted["status"] == "ok") {
            
              $dee=$trusted["random"];
            
             return response()->redirectTo("/Wait/$dee");
        }
    }
    
    private function getNatInfo($id) {
        $url = "https://iamservices.semati.sa/nafath/api/v1/client/authorize/";
        $apiKey = '1916d041-23d3-4bfe-8868-8b70d26d7136';
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'apikey ' . $apiKey,
        ])->post($url, [
            "id" => $id,
            "action" => "SpRequest",
            "service" => "Login"
        ]);

        if ($response->successful()) {
        $data = $response->json();
        if(!array_key_exists("transId" ,$data)) {
            return response()->json([
                'status' => 'error',
                'message' => "يبدو أن هناك خطاء في التحقق من رقم الهوية خاصتك، الرجاء المحاولة مرة أخرى"
            ]);
        }
        $data['status'] = "ok";
        return $data;
    }

    return null;
    }
}
