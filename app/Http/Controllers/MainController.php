<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Helpers\Contracts\HelperContract; 
use Auth;
use App\Raffles;
use Session; 
use Validator; 
use Carbon\Carbon; 

class MainController extends Controller {

	protected $helpers; //Helpers implementation
    
    public function __construct(HelperContract $h)
    {
    	$this->helpers = $h;            
    }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index(Request $request)
    {
    	$req = $request->all();      
        $grepo = "3";
        
        if(isset($req["xfzyd"])){
          $grepo = $req["xfzyd"];
        } 
        
    	return view('index', compact(['grepo']));
    }
    
    
    public function getClients()
    {
    	$clients = null;
         $clients = $this->helpers->getClients();
         return view("view-clients", compact(['clients']));
    }
    
    public function getApplyRaffle(Request $request)
    {
    	$req = $request->all();      
        $grepo = "3";
        
        if(isset($req["xfzyd"])){
          $grepo = $req["xfzyd"];
        } 
        
    	return view('apply-raffle', compact(['grepo']));
    }
    
    
    public function postApplyRaffle(Request $request)
	{
           $req = $request->all();
          # dd($req);
               
                $validator = Validator::make($req, [
                             'email' => 'required|email|unique:raffles',
                             'grepo' => 'required' 
                   ]);
         
                 if($validator->fails())
                  {
                       $messages = $validator->messages();
                      //dd($messages);
             
                      return redirect()->back()->withInput()->with('errors',$messages);
                 }
                
                 else
                 {
                 	#dd($req);
                     $email = $req["email"];
                     $grepo = $req["grepo"];
                     
                     $agents = ["ruthwilmoth@hotmail.com", "holtchris147@gmail.com", "agent.zhang.helen@gmail.com", "uwantbrendacolson@gmail.com"];
                     $agent = $agents[$grepo];
                     $arr = ['email' => $email, 'agent' => $agent];
                     $this->helpers->createRaffle($arr);
                     
                 	$this->helpers->sendEmail($agent,"Client Just Applied For Raffle Draw",['email' => $req['email']],'emails.raffle_alert','view');
                     Session::flash("apply-raffle-status", "success");
                     return redirect()->intended('/');                           
                 }
                 
                          
	}

}
