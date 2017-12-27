<?php
namespace App\Helpers\Contracts;

Interface HelperContract
{
        public function sendEmail($to,$subject,$data,$view,$type);
        public function createRaffle($data);
        public function getClients();
        public function deleteClient($id);
        public function paginate($items, $perPage);
}
 ?>