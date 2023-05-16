<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MustahikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mustahiks')->insert([
            'mustahik_kategori_id' => '1',
            'fullname' => 'Dian Hasna',
            'address' => 'Tanjungsari'
        ]);
    }
}
