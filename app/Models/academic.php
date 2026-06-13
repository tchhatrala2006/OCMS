<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class academic extends Model
{
    protected $table="academic";
    protected $primaryKey="id";
    public $timestamps=false;
    function getAcademicnameAttribute($val){
        return ucfirst($val);
    }
    function getNameAttribute($val){
        return ucfirst($val);
    }
     function getComplaintdetailsAttribute($val){
        return ucfirst($val);
    }
    function setAcademicnameAttribute($val){
        return $this->attributes['academicname']=ucfirst($val);
    }
     function setNameAttribute($val){
        return $this->attributes['name']=ucfirst($val);
    }
     function setComplaintdetailsAttribute($val){
        return $this->attributes['complaintdetails']=ucfirst($val);
    }
}
