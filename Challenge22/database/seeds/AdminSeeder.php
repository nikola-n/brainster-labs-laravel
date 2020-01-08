<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $data = [
                "email" => 'admin@admin',
                "password" =>'admin'
            ];

            \DB::table('admins')->insert($data);
    }

}

