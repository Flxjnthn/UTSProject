<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Db::table('brands')->insert([
            'brand_id' => '1',
            'name' => 'Vans',
            'state' => 'US',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        Db::table('brands')->insert([
            'brand_id' => '2',
            'name' => 'Diadora',
            'state' => 'US',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        Db::table('brands')->insert([
            'brand_id' => '3',
            'name' => 'Ventela',
            'state' => 'Indonesia',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        Db::table('brands')->insert([
            'brand_id' => '3',
            'name' => 'Nike',
            'state' => 'America',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
