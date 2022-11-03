<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            [
                'category_id' => 6,
                'name' => 'Sự bay hơi',
                'description' => 'Quốc Khang'
            ],
            [
                'category_id' => 7,
                'name' => 'Vũ trụ',
                'description' => 'Phong Tâm'
            ],
            [
                'category_id' => 8,
                'name' => 'Co2',
                'description' => 'Hữu Nhân'
            ]
        ]);
    }
}
