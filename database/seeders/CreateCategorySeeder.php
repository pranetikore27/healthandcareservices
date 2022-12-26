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
            'Category_isparent' => '0', 
            'Category_parentid' => '0', 
            'Category_isactive' => '1'],
            
            
            ['Category_name' => 'Medical', 
            'Category_isparent' => '0', 
            'Category_parentid' => '0', 
            'Category_isactive' => '1'], 

            ['Category_name' => 'Ambulance', 
            'Category_isparent' => '0', 
            'Category_parentid' => '0', 
            'Category_isactive' => '1'],

            ['Category_name' => 'Blood Bank', 
            'Category_isparent' => '0', 
            'Category_parentid' => '0', 
            'Category_isactive' => '1'],

            ['Category_name' => 'Insurance', 
            'Category_isparent' => '0', 
            'Category_parentid' => '0', 
            'Category_isactive' => '1'],

        ]; 

        foreach($category as $c)
        {
            Category::create($c); 
        }
    }
}
