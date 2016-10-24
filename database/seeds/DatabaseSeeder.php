<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	public function run()
	{
        Model::unguard();
        $post = factory('App\Warehouse', 'active', 5)->create();
        $post = factory('App\Warehouse', 'inactive', 5)->create();
        Model::reguard();
	}
}
