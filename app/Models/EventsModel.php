<?php

namespace App\Models;

use CodeIgniter\Model;

class EventsModel extends Model
{
 
    function allEvents(){
      $db = \Config\Database::connect();
      $query =$db->query('SELECT * FROM events');
      return $query->getResult();
    }

   

}