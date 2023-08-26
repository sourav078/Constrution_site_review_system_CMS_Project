<?php

namespace Database\Seeders;

use App\Models\SurveyType;
use Illuminate\Database\Seeder;

class SurveyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Define the survey types and create records in the database
        $surveyTypes = [
            ['name' => 'Plan'],
            ['name' => 'Area'],
            ['name' => 'Land Marking'],
            ['name' => 'Level'],
            ['name' => 'Conture'],
            ['name' => 'Filling'],
            // Add more survey types as needed
        ];

        // Insert the survey types into the database
        SurveyType::insert($surveyTypes);
    }
}
