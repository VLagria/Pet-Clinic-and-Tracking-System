<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     

        DB::table('user_accounts')->insert(array(
            array('user_name'=>'Dr.Vet12',
                'user_password'=>'drvet123',
                'user_mobile'=>'09887872122',
                'user_email'=>'drvet12@gmail.com',
                'userType_id'=>'2'),
            array('user_name'=>'admin21',
                'user_password'=>'admin12345',
                'user_mobile'=>'0988773324',
                'user_email'=>'admin21@yahoo.com',
                'userType_id'=>'1'),
            array('user_name'=>'user21',
                'user_password'=>'user21345',
                'user_mobile'=>'097512121121',
                'user_email'=>'user12@gmail.com',
                'userType_id'=>'3'),
        ));

        DB::table('pet_types')->insert(array(
            array('type_name'=>'Cat'),
            array('type_name'=>'Dog'),
            array('type_name'=>'Reptile'),
            array('type_name'=>'Bird'),
            array('type_name'=>'Rodent'),

        ));
    }
}
