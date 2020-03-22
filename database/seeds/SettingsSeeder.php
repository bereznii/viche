<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->truncate();

        $settings = [
            'photo',
            'username',
        ];

        foreach ($settings as $setting) {
            DB::table('settings')->insert([
                'name' => $setting,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
