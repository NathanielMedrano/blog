<?php

class Post extends BaseModel {

    protected $table = 'posts';

    //Link Posts to its user
    public function user()
    {
        return $this->belongsTo('User');
    }

    //Validation Rules

    public static $rules = array(
    'title'      => 'required|max:100',
    'body'       => 'required|max:10000'
);

    public function GetCreatedAttribute($value)
    {
        $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
        return $utc->setTimezone('America/Chicago');
    }
    

}