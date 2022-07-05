<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRecords =[
        	['id'=>1,'name'=>'Bangladesh','status'=>1],
        	['id'=>2,'name'=>'Sports','status'=>1],
        	['id'=>3,'name'=>'Business','status'=>1]
        ];

        DB::table('categories')->insert($adminRecords);
    }
}
