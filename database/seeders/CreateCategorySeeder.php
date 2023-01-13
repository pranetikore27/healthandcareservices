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
            ],
            
            
            ['Category_name' => 'Medical', 
            'Category_status' => '0', 
           ], 

            ['Category_name' => 'Ambulance', 
            'Category_status' => '0', 
            ],

            ['Category_name' => 'Blood Bank', 
            'Category_status' => '0', 
            ],

            ['Category_name' => 'Insurance', 
            'Category_status' => '0', ],

        ]; 

        foreach($category as $c)
        {
            Category::create($c); 
        }
    }
}
