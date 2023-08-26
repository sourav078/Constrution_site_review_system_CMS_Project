<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $modules = [
            ['name' => 'Reporting In The Office'],
            ['name' => 'Leave For Work'],
            ['name' => 'Confirmed Arrival'],
            ['name' => 'Getting Started After Reki'],
            ['name' => 'End Of The Work'],
            ['name' => 'Bill Receive'],
            ['name' => 'Collect Due Bills'],
            ['name' => 'Returned Office'],
            ['name' => 'Data Process'],
            ['name' => 'Fix File Name'],
            ['name' => 'Prepare Report'],
            ['name' => 'Approve Report'],
            ['name' => 'Mail Report'],
            ['name' => 'Print Report'],
            ['name' => 'Report Submission'],
            // Add more survey tasks as needed
        ];
        Module::insert($modules);
    }
}
