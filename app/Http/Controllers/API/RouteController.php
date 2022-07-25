<?php
namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jobs\SupportMail;
use App\Jobs\JoinMail;
use App\Jobs\DonateMail;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class RouteController extends Controller
{
    //
    public function support(Request $request){
        
        $this->validate($request, [
            'fullname'=>'required|string|max:191',
            'phone_number'=>'required|string|max:11',
            //'email'=>'required|string|email|max:191|unique:users',
        ]);
       //send mail
       $fullname = $request->fullname;
       $email = $request->email;
       $description = $request->description;
       $phone_number = $request->phone_number;
        $content = array(
            "fullname"=>$fullname,
            "email"=>$email,
            "phone_number"=>$phone_number,
            "description"=>$description,
        );
        SupportMail::dispatch($content)->delay(now()->addSeconds(1));
    }

    public function join(Request $request){
        
        $this->validate($request, [
            'first_name'=>'required|string|max:191',
            'last_name'=>'required|string|max:191',
            'age'=>'required|string|max:2',
            'class'=>'required|string|max:20',
            'city'=>'required|string|max:20',
            'lga'=>'required|string|max:100',
            'parents_number'=>'required|string|max:14',
            'parents_occupation'=>'required|string|max:191',
            //'email'=>'required|string|email|max:191|unique:users',
        ]);
       //send mail
       $first_name = $request->first_name;
       $last_name = $request->last_name;
       $email = $request->email;
       $phone_number = $request->phone_number;
       $age = $request->age;
       $class = $request->class;
       $city = $request->city;
       $parents_number = $request->parents_number;
       $parents_occupation = $request->parents_occupation;
       $lga = $request->lga;
       $experience = $request->experience;

        $content = array(
            "first_name"=>$first_name,
            "last_name"=>$last_name,
            "email"=>$email,
            "phone_number"=>$phone_number,
            "age"=>$age,
            "class"=>$class,
            "city"=>$city,
            "parents_number"=>$parents_number,
            "parents_occupation"=>$parents_occupation,
            "lga"=>$lga,
            "experience"=>$experience,
        );
        JoinMail::dispatch($content)->delay(now()->addSeconds(1));
    }

    public function verifyMonthlyTransaction($reference)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/$reference/verify",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "Authorization: Bearer FLWSECK-f93dedc9a70831a43e0fef848cd4d691-X"
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        
        $obj = json_decode($response,true);
        if($obj['status']==TRUE || $obj['status']==1){
                $this->saveMonthlyTransaction($obj['data']);
                return $obj['data'];
        }
    }
    
    public function saveMonthlyTransaction($request)
    {
        $content = array(
        "amount" => $request['amount'],
        "to_email" => $request['customer']['email'],
        "to_name" => $request['customer']['name'],
        "plan" => $request['meta']['plan'], 
        'amount'=>$request['amount'],
        'currency'=>$request['currency'],
        'phone_number'=>$request['customer']['phone_number'],
        );
        DonateMail::dispatch($content)->delay(now()->addSeconds(1));
        return response(['status'=>'success'],200);
    }
}
