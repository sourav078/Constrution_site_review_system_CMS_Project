<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    private static $category, $categories, $imageUrl, $image, $imageName ,$directory;
    public static function imageUpload($request)
    {
        self::$image        = $request->file('image');
        self::$imageName    = self::$image->getClientOriginalName();
        self::$directory    = 'upload/category-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl     = self::$directory.self::$imageName;
        return self::$imageUrl;
    }
    public static function newCategory($request)
    {
        if ($request->file('image')) {
            self::$imageUrl = self::imageUpload($request);
        } else {
            self::$imageUrl = null;
        }
        self::saveBasicInfo(new Category(), $request, self::$imageUrl);
    }

    private static function saveBasicInfo($category, $request, $imageUrl)
    {

        $category->reference_name  = $request->reference_name;
        $category->name    = $request->name;
        $category->number  = $request->number;
        $category->mouza   = $request->mouza;
        $category->amount  = $request->amount;
        $category->date    = $request->date;
        $category->image   = $imageUrl;
        $category->save();
    }

    public static function updateCategory($request, $id)
    {
        self::$category = Category::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$category->image))
            {
                unlink(self::$category->image);
            }
            self::$imageUrl = self::imageUpload($request);
        }
        else
        {
            self::$imageUrl = self::$category->image;
        }
        self::$category->reference_name           = $request->reference_name;
        self::$category->name           = $request->name;
        self::$category->number           = $request->number;
        self::$category->mouza           = $request->mouza;
        self::$category->amount    = $request->amount;
        self::$category->date    = $request->date;
        self::$category->image          = self::$imageUrl;
        self::$category->save();
    }

    public static function deleteCategory($id)
    {
        self::$category = Category::find($id);
        if (file_exists(self::$category->image))
        {
            unlink(self::$category->image);
        }
        self::$category->delete();
    }
    public function surveyerModuleTasks()
    {
        return $this->hasMany(SurveyerModuleTask::class);
    }

}
