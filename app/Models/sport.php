<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Support\Facades\Factories\Hasfactory;
class sport extends Model
{
    //
    //  use Hasfactory;
     protected $table="sport";
     protected $primaryKey="id";
     public $timestamps=false;
     function getSportnameAttribute($val){
        return ucfirst($val);
    }
    function getNameAttribute($val){
        return ucfirst($val);
    }
     function getComplaintdetailsAttribute($val){
        return ucfirst($val);
    }
    function setSportnameAttribute($val){
        return $this->attributes['sportname']=ucfirst($val);
    }
     function setNameAttribute($val){
        return $this->attributes['name']=ucfirst($val);
    }
     function setComplaintdetailsAttribute($val){
        return $this->attributes['complaintdetails']=ucfirst($val);
    }
}
?>