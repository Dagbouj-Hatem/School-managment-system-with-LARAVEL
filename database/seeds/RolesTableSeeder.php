<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//test if table is empty
    	if(DB::table('roles')->get()->count()<=1)
    	{
          // insert roles
        }else
        {
        	//echo "Table ROLES not empty ! \n";
        }
    }
}
