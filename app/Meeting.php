<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Meeting extends Model
{

    protected $fillable = [
        'name',
        'version',
        'area_id',
        'contact_fsr_id',
        'client',
        'assistants_client',
        'topics',
        'commitments_fsr',
        'commitments_client',
        'pending_fsr',
        'pending_client',
        'extra_comments'
    ];

    /**
    * To allow soft deletes
    */
    use SoftDeletes;

    protected $dates = ['deleted_at'];
}