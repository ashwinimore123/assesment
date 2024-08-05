<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Business extends Model
{
protected $table = "businesses";
public $primaryKey = "business_id";
protected $fillable = ['business_name',
'version',
'expiry_date',
'renewal_date',
'is_restaurant',
'tag_line',
'logo',
'splash_screen',
'login_screen',
'registration_screen',
'otp_screen',
'text_color',
'background_color',
'package_name',
'policy_title',
'policy_image',
'policy_description',
'about_title',
'about_image',
'about_description',
'is_app',
'company_name',
'business_number',
'website',
'address',
'country_id',
'state_id',
'city_id',
'post_code',
'contact_number',
'email',
'facebook',
'instagram',
'timezone_id',
'currency_id',
'domain',
'subdomain',
'taxsettings',
'is_active'];


public function country(){
return $this->belongsTo('App\Country','country_id','country_id');
}

public function state(){
return $this->belongsTo('App\State','state_id','state_id');
}

public function city(){
return $this->belongsTo('App\City','city_id','city_id');
}

public function timezone(){
return $this->belongsTo('App\Timezone','timezone_id','timezone_id');
}

public function currency(){
return $this->belongsTo('App\Currencies','currency_id','currency_id');
}
}


