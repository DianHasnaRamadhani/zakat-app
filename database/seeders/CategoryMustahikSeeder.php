<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryMustahikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_mustahiks')->insert([
            'category_name'=>'aktif',
            'description'=>'ini aktif'
        ]);
    }
}
