<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CreateCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            ['Category_name' => 'Hospitals', 
            'Category_status' => '0',
            "Category_field_count" => 4, 
            "Category_field_names" => '["Hospital Name","Address","Services Provide","Phone number"]'
            ],
            
            
            ['Category_name' => 'Medical', 
            'Category_status' => '0', 
            "Category_field_count" => 4, 
            "Category_field_names" => '["Medical Name","Address","Services Provide","Phone number"]'
           ], 

            ['Category_name' => 'Ambulance', 
            'Category_status' => '0', 
            "Category_field_count" => 4, 
            "Category_field_names" => '["Ambulance Name","Address","Services Provide","Phone number"]'
            ],

            ['Category_name' => 'Blood Bank', 
            'Category_status' => '0', 
            "Category_field_count" => 4, 
            "Category_field_names" => '["Blood bank Name","Address","Services Provide","Phone number"]'
            ],

            ['Category_name' => 'Insurance', 
            'Category_status' => '0', 
            "Category_field_count" => 4, 
            "Category_field_names" => '["Insurance company Name","Address","Services Provide","Phone number"]'],

        ]; 

        foreach($category as $c)
        {
            Category::create($c); 
        }
    }
}
