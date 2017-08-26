<?php

namespace App;

trait RecordActivity
{
    public function recordActivity($event){
        Activity::create([
            'user_id' => \Auth::user()->id,
            'type' => $this->getActivityType($event),
            'subject_id' => $this->id,
            'subject_type' => get_class($this)
        ]);
    }

    public function getActivityType($event)
    {
        return $event .'_'. strtolower((new \ReflectionClass($this))->getShortName());
    }

}