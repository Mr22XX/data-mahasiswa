<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 1,'name' => 'rayhan ma' ,'score' => 98 ],
            ['id' => 2,'name' => 'mr2xx' ,'score' => 65 ],
            ['id' => 3,'name' => 'bijiunto' ,'score' => 78 ],
        ];

        DB::table("students")->insert($data);
    }
}
