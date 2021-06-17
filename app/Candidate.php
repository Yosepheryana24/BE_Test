<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    //

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $connection = 'mysql';

    protected $table = 'candidate';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'gender',
        'city_of_birth',
        'date_of_birth',
        'religion_id',
        'email',
        'phone',
        'identity_number',
        'identity_file',
        'bank_id',
        'bank_account',
        'bank_name',
        'address',
        'education_id',
        'university_id',
        'university_other',
        'major',
        'graduation_year',
        'in_college',
        'semester',
        'skill',
        'file_cv',
        'file_photo',
        'file_portfolio',
        'source_information_id',
        'source_information_other',
        'ranking',
        'assessment_score',
        'mail_sent',
        'instagram',
        'twitter',
        'linkedin',
        'facebook',
        'candidate_status_id',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by'
    ];
}
