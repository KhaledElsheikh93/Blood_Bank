<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DonationRequest extends Model 
{

    protected $table = 'donation_requests';
    public $timestamps = true;
    protected $fillable = 
    array('patient_name',
     'patient_phone',
      'hospital_name',
       'blood_type_id',
        'patient_age',
         'bags_num',
          'hospital_address', 'details', 'latitude', 'longitude', 'client_id' , 'city_id');

    public function city()
    {
        return $this->belongsTo('App\Models\City');
    }

    public function blood_type()
    {
        return $this->belongsTo('App\Models\BloodType');
    }

    public function clients()
    {
        return $this->belongsTo('App\Models\Client');
    }

    public function notifications()
    {
        return $this->hasMany('App\Models\Notification');
    }

}