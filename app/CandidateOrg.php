<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CandidateOrg extends Model
{
    //

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $connection = 'mysql';

    protected $table = 'candidate_organization';
    protected $primaryKey = 'id';

    protected $fillable = [
        'candidate_id',
        'org_name',
        'year',
        'position',
        'description',
        'file',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by'
    ];
}
