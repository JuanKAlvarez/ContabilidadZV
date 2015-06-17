<?php 
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder {

    public function run()
	{


	\DB::table('users')->insert(array(
		
			'name'			=>		'Juan K Alvarez',
			'user'			=>		'JuanKAlvarez',
			'email'			=>		'JuanAlvarezCuartas@hotmail.com',
			'type'			=>		'admin',
			'password'		=>		\Hash::make('123456')
		));
	}

}


