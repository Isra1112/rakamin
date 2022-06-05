<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()->create([
            'name'=>'sport',
            'user_id'=>1
        ]);
        Category::factory()->create([
            'name'=>'politic',
            'user_id'=>2
        ]);
        Category::factory()->create([
            'name'=>'music',
            'user_id'=>3
        ]);
        Category::factory()->create([
            'name'=>'technology',
            'user_id'=>4
        ]);
        Category::factory()->create([
            'name'=>'health',
            'user_id'=>5
        ]);
        Category::factory()->create([
            'name'=>'economy',
            'user_id'=>6
        ]);
    }
}
