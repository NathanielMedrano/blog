<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

		$user = new User();
		$user->email = 'natmed1991@gmail.com';
		$user->password = 'letnatin';
		$user->save();
	}

}