<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $role_employee = Role::where('name', 'master')->first();
	    $role_manager  = Role::where('name', 'supermaster')->first();
	    $employee = new User();
	    $employee->name = 'Marco Mendes';
	    $employee->email = 'marcomendes0202@hotmail.com';
	    $employee->password = bcrypt('Readonly123');
	    $employee->save();
	    $employee->roles()->attach($role_manager);
	    $employee->roles()->attach($role_employee);

	    $employee = new User();
	    $employee->name = 'Hugo Carvalho';
	    $employee->email = 'h.l.decarvalho@gmail.com';
	    $employee->password = bcrypt('Readonly123');
	    $employee->save();
	    $employee->roles()->attach($role_manager);
	    $employee->roles()->attach($role_employee);

	    $employee = new User();
	    $employee->name = 'Nuno Oliveira';
	    $employee->email = 'nuno.oliveira.vnf@gmail.com';
	    $employee->password = bcrypt('Readonly123');
	    $employee->save();
	    $employee->roles()->attach($role_manager);
	    $employee->roles()->attach($role_employee);
	   

    }
}
