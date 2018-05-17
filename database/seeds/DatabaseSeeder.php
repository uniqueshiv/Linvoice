<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currentTime=\Carbon\Carbon::now()->toDateTimeString();
        // $this->call(UsersTableSeeder::class);
        DB::table('roles')->insert([
            'name' => 'Admin',
            'display_name' => 'Admin',
            'description' => 'Administration',
            'created_at' => $currentTime,
        ]);
        
        DB::table('roles')->insert([
            'name' => 'Client',
            'display_name' => 'Client',
            'description' => 'Client Services',
            'created_at' => $currentTime,
        ]);
        
        DB::table('users')->insert([
            'userid' => '2a074c72-6fba-11e6-8993-408d5c225069',
            'name' => 'Admin',
            'address' => 'Test Address',
            'mobile' => '1234567890',
            'email' => 'admin@admin.com',
            'password' => bcrypt('111111'),
            'created_at' => $currentTime,
        ]);
        DB::table('users')->insert([
            'userid' => '2a074c72-6fba-11e6-8973-408d5c222069',
            'name' => 'Webninjaz',
            'address' => 'Webninjaz Address',
            'mobile' => '12097890',
            'email' => 'webninjaz@admin.com',
            'password' => bcrypt('111111'),
            'created_at' => $currentTime,
        ]);
        
        DB::table('role_user')->insert([
            'user_id' => '1',
            'role_id' => '1'
        ]);
    }
}
