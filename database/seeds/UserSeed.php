<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Admin', 'email' => 'admin@admin.com', 'password' => '$2y$10$l4MghrLnKXTRUDlR07XQeesKHRIaAe7WzDf90g751BEf70AwnJ5m.', 'remember_token' => '', 'father_name' => 'admin father', 'nrc_number' => '12/OuKaTha(C)195507', 'date_of_birth' => '1979-06-09', 'phone_number' => '+959441428225', 'address' => 'yangon'],

        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
