<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyerModuleTask extends Model
{
    use HasFactory;
    protected $fillable = ['survey_id', 'surveyer_id', 'module_id', 'status'];

    public function surveyer() {
        return $this->belongsTo(Surveyer::class, 'surveyer_id');
    }

    public function module() {
        return $this->belongsTo(Module::class, 'module_id');
    }

    public function survey() {
        return $this->belongsTo(Survey::class, 'survey_id');
    }

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
