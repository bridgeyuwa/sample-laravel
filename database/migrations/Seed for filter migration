<?php

use Illuminate\Database\Seeder;

class InstitutionTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Types
        DB::table('types')->insert([
            ['name' => 'Public'],
            ['name' => 'Private'],
        ]);

        // Subtypes
        DB::table('subtypes')->insert([
            ['name' => 'Federal', 'type_id' => 1],
            ['name' => 'State', 'type_id' => 1],
            ['name' => 'Non-sectarian', 'type_id' => 2],
            ['name' => 'Sectarian', 'type_id' => 2],
        ]);

        // Subsubtypes
        DB::table('subsubtypes')->insert([
            ['name' => 'Christian', 'subtype_id' => 4],
            ['name' => 'Islam', 'subtype_id' => 4],
        ]);

        // Subsubsubtypes
        DB::table('subsubsubtypes')->insert([
            ['name' => 'Catholic', 'subsubtype_id' => 1],
            ['name' => 'Protestant', 'subsubtype_id' => 1],
        ]);
    }
}

//DB seeder 
