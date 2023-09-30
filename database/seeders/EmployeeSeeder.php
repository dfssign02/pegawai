<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'nama' => 'Dudi Firmansyah',
            'jeniskelamin' => 'Laki-laki',
            'notelpon' => '08389283928',
        ]);
    }
}
