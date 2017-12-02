<?php
namespace App\Helpers;

use App\Helpers\Contracts\HelperContract; 
use Crypt;
use Carbon\Carbon; 
use Mail;
use Auth; 
use App\Raffles;

class Helper implements HelperContract
{

          /**
           * Sends an email(blade view or text) to the recipient
           * @param String $to
           * @param String $subject
           * @param String $data
           * @param String $view
           * @param String $image
           * @param String $type (default = "view")
           **/
           function sendEmail($to,$subject,$data,$view,$type="view")
           {
                   if($type == "view")
                   {
                     Mail::send($view,$data,function($message) use($to,$subject){
                           $message->from('info@worldlotteryusa.com',"WorldLotteryUSA");
                           $message->to($to);
                           $message->subject($subject);
                          if(isset($data["has_attachments"]) && $data["has_attachments"] == "yes")
                          {
                          	foreach($data["attachments"] as $a) $message->attach($a);
                          } 
                     });
                   }

                   elseif($type == "raw")
                   {
                     Mail::raw($view,$data,function($message) use($to,$subject){
                           $message->from('info@worldlotteryusa.com',"WorldLotteryUSA");
                           $message->to($to);
                           $message->subject($subject);
                           if(isset($data["has_attachments"]) && $data["has_attachments"] == "yes")
                          {
                          	foreach($data["attachments"] as $a) $message->attach($a);
                          } 
                     });
                   }
           }
           
           
           function createRaffle($data)
           {
           	$ret = Raffles::create(['email' => $data['email'], 
                                                      'agent' => $data['agent'], 
                                                      'number' => $data['number']
                                                      ]);
                                                      
                return $ret;
           } 
           
          
          function getClients()
          {
          	$ret = [];
          	$clients = Raffles::all();
          	 if($clients != null)
              {
              	foreach($clients as $c){
              	$temp = [];
              	$temp['id'] = $c->id;
                  $temp['email'] = $c->email;
                  $temp['agent'] = $c->agent;
                  $temp['number'] = $c->number;
                  array_push($ret, $temp);
                 } 
              }
              return $ret;
          }
          
          
          function deleteClient($id)
           {
           	$client = Raffles::where("id", $id)->first();
           
               if($client != null)
               {
               	$client->delete();
               } 
                                                      
           } 
   
}
?>