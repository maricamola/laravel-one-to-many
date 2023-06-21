<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=['Frontend','Backend','Full-stack','Design',];

        foreach($data as $category){
            $new_category = New Category();
            $new_category->name = $category;
            //il primo è il parametro da sluggare, il secondo è il divisore
            $new_category->slug = Str::slug($category, '-');
            $new_category->save();
        }
    }
}
