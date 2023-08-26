<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $table = 'modules';

    protected $fillable = ['name'];

    public function surveyers() {
        return $this->belongsToMany(Surveyer::class, 'surveyor_modules');
    }
    public function survey() {
        return $this->belongsToMany(Survey::class, 'survey');
    }
    public function surveyerModuleTask() {
        return $this->hasMany(SurveyerModuleTask::class);
    }

}
