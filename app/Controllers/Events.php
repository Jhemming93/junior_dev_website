<?php

namespace App\Controllers;

use App\Models\EventsModel;
use CodeIgniter\I18n\Time;

class Events extends BaseController
{ 
    public function __construct(){
        helper(['url','date']);
        
       
    }

    public function index(){
        
        $eventsModel = new EventsModel();
        $data['results'] =  $eventsModel->allEvents();

        foreach ($data['results'] as $key => $value){
            $data['data'][$key]['title'] = $value->title;
            $data['data'][$key]['url'] = $value->event_link;
            $data['data'][$key]['start'] = $value->start_date;
            $data['data'][$key]['end'] = $value->end_date;
            $data['data'][$key]['id'] = $value->event_id;
            $data['data'][$key]['backgroundColor'] = $value->backgroundColor;


            $eventEnd = new Time($value->end_date);
            $today = Time::now();
            if($eventEnd <= $today){
                $data['data'][$key]['className'] = ['event-over'];

            }
        }




        return view('templates/header')
               . view('pages/events', $data)
               . view('templates/footer');
    }

    public function newEvent(){
        $eventsModel = new EventsModel();


        
     
    }
}