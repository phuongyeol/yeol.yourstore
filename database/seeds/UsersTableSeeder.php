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
       	\DB::table('users')->insert([
            'name'  => 'Phương YeolYeol',
            'username' => 'phuongyeol',
            'email' => 'phuongtran99.k60@gmail.com',
            'password' => bcrypt('123456'),
            'mobile'=>'0973653820',
            'avatar' => 'https://scontent.fhan2-4.fna.fbcdn.net/v/t1.0-9/29570310_598273490523779_7707910327289924284_n.jpg?_nc_cat=0&oh=6b1b15018fb9cd5fc4a6e621549219e6&oe=5BA6F22A'
        ]);

        // \DB::table('users')->insert([
        //     'name'  => 'Phương Trần',
        //     'username' => 'phuongtran',
        //     'email' => '20156275@student.hust.edu.vn',
        //     'password' => bcrypt('123456'),
        //     'mobile'=>'0973653820',
        //     'avatar' => 'https://scontent.fhan2-4.fna.fbcdn.net/v/t31.0-8/30052475_608901596127635_412026047232240072_o.jpg?_nc_cat=0&oh=d0a9e86e9c0057f47dad7f1a151844d7&oe=5BA6914E'
        // ]);

    }
}
