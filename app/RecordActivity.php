<?php

namespace App;

trait RecordActivity
{

    protected static function bootRecordActivity()
    {
        static::created(function($item){
            $item->recordActivity('create');
        });
    }

    public function recordActivity($event){
        if(auth()->guest()) return;
        $this->activity()->create([
            'user_id' => \Auth::user()->id,
            'type' => $this->getActivityType($event),
        ]);

    }

    public function activity()
    {
        return $this->morphMany(\App\Activity::class,'subject');
    }

    public function getActivityType($event)
    {
        return $event .'_'. strtolower((new \ReflectionClass($this))->getShortName());
    }

}