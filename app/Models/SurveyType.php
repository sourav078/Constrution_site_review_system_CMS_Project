<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SurveyType extends Model
{
    protected $table = 'survey_types';

    protected $fillable = ['name'];
    public function surveys()
    {
        return $this->hasMany(Survey::class, 'survey_type_id');
    }

}
