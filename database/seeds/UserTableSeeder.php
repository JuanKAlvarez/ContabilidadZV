<?php 
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder {

    public function run()
	{


	\DB::table('users')->insert(array(
		
			'name'			=>		'Juan K Alvarez',
			'email'			=>		'JuanAlvarezCuartas@hotmail.com',
			'password'		=>		\Hash::make('123456')
		));

	}

}


