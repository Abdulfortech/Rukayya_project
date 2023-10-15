<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
// use Copyleaks\Copyleaks;


// use Copyleaks\CopyleaksAuthToken;
// use Copyleaks\CopyleaksConfig;
// use Copyleaks\CopyleaksDeleteRequestModel;
// use Copyleaks\CopyleaksExportModel;
// use Copyleaks\CopyleaksFileOcrSubmissionModel;
// use Copyleaks\CopyleaksFileSubmissionModel;
// use Copyleaks\CopyleaksStartErrorHandlings;
// use Copyleaks\CopyleaksStartRequestModel;
// use Copyleaks\CopyleaksURLSubmissionModel;
// use Copyleaks\ExportCrawledVersion;
// use Copyleaks\ExportResults;
// use Copyleaks\IdObject;
// use Copyleaks\SubmissionActions;
// use Copyleaks\SubmissionAuthor;
// use Copyleaks\SubmissionExclude;
// use Copyleaks\SubmissionFilter;
// use Copyleaks\SubmissionIndexing;
// use Copyleaks\SubmissionPDF;
// use Copyleaks\SubmissionProperties;
// use Copyleaks\SubmissionRepository;
// use Copyleaks\SubmissionScanning;
// use Copyleaks\SubmissionScanningCopyleaksDB;
// use Copyleaks\SubmissionScanningExclude;
// use Copyleaks\SubmissionSensitiveData;
// use Copyleaks\SubmissionWebhooks;

class PlagiarismController extends Controller
{
    // //
    // public Copyleaks $copyleaks;

    public function index(){
        return view('plagiarism');
    }
    
    
    public function check(Request $request) {
        $file = $request->file('file')->getClientOriginalName();
        $accessToken = 'C02B1591839E63372DB0E975DC074666AC7EA780E5DC2ADFBEA77A76C8995905';
        $headers = array(
            'Content-Type: application/json',
            'Authorization: Bearer ' . $accessToken
        );
        $data2 = array(
          "base64" => "SGVsbG8gd29ybGQh",
          "filename" => $file,
          "properties" => array(
              "webhooks" => array(
                  "status" => "https://yoursite.com/webhook/{STATUS}/my-custom-id"
              )
          )
        );
        $url = 'https://api.copyleaks.com/v3/scans/submit/file/8976';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data2));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        curl_close($ch);

        dd($response);
        
        
    }

    public function newCheck(Request $request) {
      $formFields = $request->validate([
        'content' => ['required'],
    ]);
      $url = "https://www.prepostseo.com/apis/checkSentence";
      $key = '1c07f0ccddbbbd8fd58ac2a975e5373e';
      $data = array('key' => $key, 'query'=> 'Abdullahi Aminu Mudi');

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

      $response = curl_exec($ch);
      curl_close($ch);

      // echo $response;
      return view('plagiarismData', [
          'result' => json_decode($response, true),
      ]);
      // dd($response);
    }
}
