<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // truncate/delete all and reset id to 1
        DB::table('settings')->truncate();

        $data = [
            [
                'code' => '001',
                'name' => 'is trisemester',
                'value' => json_encode(false),
            ],
            [
                'code' => '002',
                'name' => 'enrollment period',
                'value' => json_encode([
                    'start_date' => '2022-06-10',
                    'end_date' => '2022-07-15',
                ]),
            ],
            [
                'code' => '003',
                'name' => 'auto enrollment for regular',
                'value' => json_encode([
                    'is_auto' => true,
                    'date' => '2022-07-15',
                ]),
            ],
        ];
        
        Setting::insert($data);
    }
}
