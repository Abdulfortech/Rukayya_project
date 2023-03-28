<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Copyleaks\Copyleaks;

class PlagiarismController extends Controller
{
    //

    public function index(){
        return view('plagiarism');
    }
    // token : 959EC72982F78B1BD75BE728F1E748EE3339932E9C812FD24DEF7B82061E15D8
    public function check(Request $request) {
        $request->file('file')->store('uploads', 'public');
        // require base_path("vendor/copyleaks/php-plagiarism-checker/autoload.php");
        // $copyleaks = new Copyleaks();
        // $loginResult = $copyleaks->login('ibnmudi@gmail.com','c32bc0c2-0c07-4d37-b14f-0d9df68b9747');
        // echo json_encode($loginResult);
        // $headers = array(
        //     'Content-type' => 'application/json',
        //     'Authorization' => 'Bearer 959EC72982F78B1BD75BE728F1E748EE3339932E9C812FD24DEF7B82061E15D8'
        // );
        
        // $data = '{
        //   "base64": "SGVsbG8gd29ybGQh",
        //   "filename": "Nigeria Dancing on the Brick",
        //   "properties": {
        //     "webhooks": {
        //       "status": "https://yoursite.com/webhook/{STATUS}/my-custom-id"
        //     }
        //   }
        // }';
        
        // $response = http::put('https://api.copyleaks.com/v3/scans/submit/file/my-custom-id', $headers, $data);
        // dd($response);
        
    }
}
