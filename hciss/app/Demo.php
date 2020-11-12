<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demo extends Model
{


     protected $fillable = [
        'company_name','contact_person','user_id','phone','email','industry','service_sector',
    ];
}
