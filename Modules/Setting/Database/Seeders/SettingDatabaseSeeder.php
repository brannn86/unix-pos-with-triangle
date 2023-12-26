<?php

namespace Modules\Setting\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Setting\Entities\Setting;

class SettingDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'company_name' => 'Unix POS',
            'company_email' => 'unix@test.com',
            'company_phone' => '012345678901',
            'notification_email' => 'unix@test.com',
            'default_currency_id' => 1,
            'default_currency_position' => 'prefix',
            'footer_text' => 'Unix Pos © 2023',
            'company_address' => 'Bandung'
        ]);
    }
}
