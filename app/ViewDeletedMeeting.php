<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewDeletedMeeting extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
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
    	'extra_comments',
        'deleted_at'
    ];

    public function scopeData($query)
    {
        return $query->get();
    }
}