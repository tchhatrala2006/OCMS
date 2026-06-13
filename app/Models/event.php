<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;




class event extends Model
{
    
    protected $table="event";
    protected $primaryKey="id";
    public $timestamps=false;
    function getEventnameAttribute($val){
        return ucfirst($val);
    }
    function getNameAttribute($val){
        return ucfirst($val);
    }
     function getComplaintdetailsAttribute($val){
        return ucfirst($val);
    }
    function setEventnameAttribute($val){
        return $this->attributes['eventname']=ucfirst($val);
    }
     function setNameAttribute($val){
        return $this->attributes['name']=ucfirst($val);
    }
     function setComplaintdetailsAttribute($val){
        return $this->attributes['complaintdetails']=ucfirst($val);
    }
}







