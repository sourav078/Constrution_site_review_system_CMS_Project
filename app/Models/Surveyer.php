<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surveyer extends Model
{
    use HasFactory;
    private static $surveyer, $image, $imageUrl, $directory, $imageName;

    public static function imageUpload($request)
    {
        self::$image        = $request->file('image');
        self::$imageName    = self::$image->getClientOriginalName();
        self::$directory    = 'upload/teacher-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl     = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newSurveyer($request)
    {
        if ($request->file('image'))
        {
            self::$imageUrl = self::imageUpload($request);
        }
        else
        {
            self::$imageUrl = null;
        }
        self::saveBasicInfo(new Surveyer(), $request, self::$imageUrl);
    }

    public static function updateSurveyer($request, $id)
    {
        self::$surveyer = Surveyer::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$surveyer->image))
            {
                unlink(self::$surveyer->image);
            }
            self::$imageUrl = self::imageUpload($request);
        }
        else
        {
            self::$imageUrl = self::$surveyer->image;
        }
        self::saveBasicInfo(self::$surveyer, $request, self::$imageUrl);
    }

    public static function deleteSurveyer($id)
    {
        self::$surveyer = Surveyer::find($id);
        if (file_exists(self::$surveyer->image))
        {
            unlink(self::$surveyer->image);
        }
        self::$surveyer->delete();
    }

    private static function saveBasicInfo($surveyer, $request, $imageUrl)
    {
        $surveyer->name        = $request->name;
        $surveyer->email       = $request->email;
        $surveyer->mobile      = $request->mobile;

        if ($request->password)
        {
            $surveyer->password    = bcrypt($request->password);
        }
        $surveyer->image       = $imageUrl;
        $surveyer->save();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function modules() {
        return $this->belongsToMany(Module::class, 'surveyor_modules');
    }
    public function surveyerModuleTasks() {
        return $this->hasMany(SurveyerModuleTask::class);
    }

}



