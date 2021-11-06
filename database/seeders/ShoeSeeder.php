<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShoeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Db::table('shoes')->insert([
            'name' => 'Checkerboard',
            'size' => '40',
            'color' => 'White and Black',
            'type' => 'Style',
            'pro_id' => '1',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        Db::table('shoes')->insert([
            'name' => 'A24',
            'size' => '39',
            'color' => 'Black and Yellow',
            'type' => 'Sport',
            'pro_id' => '2',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        Db::table('shoes')->insert([
            'name' => '70s',
            'size' => '41',
            'color' => 'Black',
            'type' => 'Style',
            'pro_id' => '3',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        Db::table('shoes')->insert([
            'name' => 'Air Jordan',
            'size' => '42',
            'color' => 'Blue and White',
            'type' => 'Style',
            'pro_id' => '4',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
