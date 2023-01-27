<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        DB::table('marks')->insert(
            [
               "student_name"=>"Sumaiya Alam",
               "number"=>"71",
               "subject_name"=>"Discrete Math"
          
            ]
   
   
   
   
   
            );
    }
}
