<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Survey extends Model
{
    protected $fillable = ['category_id', 'surveyer_id', 'survey_type_id'];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function surveyer()
    {
        return $this->belongsTo(Surveyer::class);
    }

    public function modules()
    {
        return $this->belongsToMany(Module::class, 'survey_modules');
    }
    public function surveyerModuleTasks()
    {
        return $this->hasMany(SurveyerModuleTask::class);
    }
    public function surveyType()
    {
        return $this->belongsTo(SurveyType::class);
    }
}
