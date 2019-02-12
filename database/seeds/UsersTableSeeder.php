<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //admin
        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'john@doe.com',
            'password' => bcrypt('password'),
            'phone' => 123123123,
            'address' => '14 Sezame St., Somecity, Somecountry',
            'status' => 'Active',
            'pesel' => '75020112290',
            'type' => 'admin'
        ]);

        //patient 1
        DB::table('users')->insert([
            'name' => 'Jennifer Kolon',
            'email' => 'jen@kol.us',
            'password' => bcrypt('password'),
            'phone' => 323121999,
            'address' => '1 Doe St., Carson, USA',
            'status' => 'Active',
            'pesel' => '66070813230',
            'type' => 'patient'
        ]);

        //patient 2
        DB::table('users')->insert([
            'name' => 'Karl Maxwell',
            'email' => 'keyem@max.us',
            'password' => bcrypt('password'),
            'phone' => 727171777,
            'address' => '1 Man St., Thecity, USA',
            'status' => 'Active',
            'pesel' => '99123038291',
            'type' => 'patient'
        ]);

        //doctor 1
        DB::table('users')->insert([
            'name' => 'Alan Smis',
            'email' => 'alansmis@here.us',
            'password' => bcrypt('password'),
            'phone' => 383111931,
            'address' => '7 Rescue St., Thecity, USA',
            'status' => 'Active',
            'pesel' => '79101321345',
            'type' => 'doctor'
        ]);

        //doctor 2
        DB::table('users')->insert([
            'name' => 'Martha Friedrisch',
            'email' => 'marta@warta.us',
            'password' => bcrypt('password'),
            'phone' => 987123000,
            'address' => '12 Woman St., Thecity, USA',
            'status' => 'Active',
            'pesel' => '89071092103',
            'type' => 'doctor'
        ]);

        //specialization 1
        DB::table('specializations')->insert([
            'name' => 'oncology'
        ]);

        //specialization 2
        DB::table('specializations')->insert([
            'name' => 'surgeon'
        ]);

        //specialization 3
        DB::table('specializations')->insert([
            'name' => 'internist'
        ]);
    }
}
