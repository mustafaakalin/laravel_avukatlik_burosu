<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SiteSettings extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
      'site_name',
      'site_description',
      'site_keywords',
      'site_logo',
      'site_favicon',
      'site_address',
      'site_phone',
      'site_email',
      'site_facebook',
      'site_twitter',
      'site_instagram',
    ];


    

}
