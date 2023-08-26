<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\ModelStatus\HasStatuses;

class PendingApproval extends Model
{
    use HasFactory;
    use HasStatuses;


    protected $fillable = [
        'survey_id',
        'category_id',
        'amount',
        'file_path',
        'status', // Add this line
    ];

    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
