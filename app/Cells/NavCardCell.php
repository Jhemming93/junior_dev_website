<?php

namespace App\Cells;

use CodeIgniter\View\Cells\Cell;

class NavCardCell extends Cell 
{
   
     public $image;
    public $description;
    public $title;
    public $link;

    public function mount()
    {
        $this->computed = sprintf('%s - %s', $this->image, $this->description, $this->title, $this->link);
    }

    // public function getComputedProperty(): string
    // {
    //     return $this->computed;
    // }

    // public function getTypeProperty(): string
    // {
    //     return $this->type;
    // }

    // public function getMessageProperty(): string
    // {
    //     return $this->message;
    // }   

    
}