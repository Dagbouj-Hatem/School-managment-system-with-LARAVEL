<?php

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {


        //test if table is empty
        if(DB::table('users')->get()->count()==0)
        {    
            // insert a default super administrator 
            User::create([
            'first_name' => $faker->firstNameMale ,
            'last_name' => $faker->lastName ,
            'date_of_birthday' => $faker->dateTime ,
            'address1' => $faker->address ,
            'address2' => $faker->address ,
            'city' => $faker->city ,
            'zipcode' => $faker->postcode ,
            'avatar' => $faker->unique()->imageUrl($width = 50, $height = 50 ,'people'), 
            'phone' => $faker->e164PhoneNumber , 
            'email' => 'superadmin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'type_account' => '0' ,
            'remember_token' => str_random(10),
            ])->assignRole('Super administrateur');

             // insert a default administrator 
            User::create([
            'first_name' => $faker->firstNameMale ,
            'last_name' => $faker->lastName ,
            'date_of_birthday' => $faker->dateTime ,
            'address1' => $faker->address ,
            'address2' => $faker->address ,
            'city' => $faker->city ,
            'zipcode' => $faker->postcode ,
            'avatar' => $faker->unique()->imageUrl($width = 50, $height = 50 ,'people'), 
            'phone' => $faker->e164PhoneNumber , 
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'type_account' => '0' ,
            'remember_token' => str_random(10),
            ])->assignRole('Administrateur');
            // insert a default studient 
            User::create([
            'first_name' => $faker->firstNameMale ,
            'last_name' => $faker->lastName ,
            'date_of_birthday' => $faker->dateTime ,
            'address1' => $faker->address ,
            'address2' => $faker->address ,
            'city' => $faker->city ,
            'zipcode' => $faker->postcode ,
            'avatar' => $faker->unique()->imageUrl($width = 50, $height = 50 ,'people'), 
            'phone' => $faker->e164PhoneNumber , 
            'email' => 'etudiant@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'type_account' => '1' ,
            'remember_token' => str_random(10),
            ])->assignRole('Etudiant');
            // insert a default Enseignant 
            User::create([
            'first_name' => $faker->firstNameMale ,
            'last_name' => $faker->lastName ,
            'date_of_birthday' => $faker->dateTime ,
            'address1' => $faker->address ,
            'address2' => $faker->address ,
            'city' => $faker->city ,
            'zipcode' => $faker->postcode ,
            'avatar' => $faker->unique()->imageUrl($width = 50, $height = 50 ,'people'), 
            'phone' => $faker->e164PhoneNumber , 
            'email' => 'enseignant@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'type_account' => '2' ,
            'remember_token' => str_random(10),
            ])->assignRole('Enseignant');
            // insert a default Parent 
            User::create([
            'first_name' => $faker->firstNameMale ,
            'last_name' => $faker->lastName ,
            'date_of_birthday' => $faker->dateTime ,
            'address1' => $faker->address ,
            'address2' => $faker->address ,
            'city' => $faker->city ,
            'zipcode' => $faker->postcode ,
            'avatar' => $faker->unique()->imageUrl($width = 50, $height = 50 ,'people'), 
            'phone' => $faker->e164PhoneNumber , 
            'email' => 'parent@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'type_account' => '3' ,
            'remember_token' => str_random(10),
            ])->assignRole('Tutors');
            
            // insert 20 others users
       /*     factory(App\User::class, 20)->create()->each(function ($user) {

                    // Adding permissions via a role 
                    if($user->type_account==0)
                    {
                        $user->assignRole('Administrateur');
                    }
                    elseif($user->type_account==1)
                    {
                        $user->assignRole('Etudiant');
                    }
                    elseif($user->type_account==2)
                    {
                        $user->assignRole('Enseignant');
                    }
                    else
                    {
                        $user->assignRole('Tutors');
                    }
                    // end roles 
             });*/

        }else
        {
            echo "Table USERS not empty ! \n";
        }
    }
}
