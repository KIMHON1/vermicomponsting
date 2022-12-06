<?php

namespace Database\Seeders;
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
// Adding the role and permmission of our system
//user_permisions

Permission::firstOrcreate(['name' => 'create-users']);
Permission::firstOrcreate(['name' => 'edit-users']);
Permission::firstOrcreate(['name' => 'delete-users']);

//bins_permisions


Permission::firstOrcreate(['name' => 'create-bins']);
Permission::firstOrcreate(['name' => 'edit-bins']);
Permission::firstOrcreate(['name' => 'delete-bins']);


//bin_conditions_permitions

Permission::firstOrcreate(['name' => 'create-binconditions']);
Permission::firstOrcreate(['name' => 'edit-binconditions']);
Permission::firstOrcreate(['name' => 'delete-binconditions']);

//bin_location_permisions

Permission::firstOrcreate(['name' => 'create-bin_locations']);
Permission::firstOrcreate(['name' => 'edit-bin_locations']);
Permission::firstOrcreate(['name' => 'delete-bin_locations']);


//worm types permisions

Permission::firstOrcreate(['name' => 'create-worm_types']);
Permission::firstOrcreate(['name' => 'edit-worm_types']);
Permission::firstOrcreate(['name' => 'delete-worm_types']);


// roles we are having

$adminRole = Role::firstOrcreate(['name' => 'Admin']);
$vermiculturistRole = Role::firstOrcreate(['name' => 'vermiculturist']);

// giving addimin permissions


$adminRole->givePermissionTo([

// users 
    'create-users',
    'edit-users',
    'delete-users',

//bins

    'create-bins',
    'edit-bins',
    'delete-bins',

// bin_conditions

    'create-binconditions',
    'edit-binconditions',
    'delete-binconditions',


//bin_location

    'create-bin_locations',
    'edit-bin_locations',
    'delete-bin_locations',


//worm types permisions
    
    'create-worm_types',
    'edit-worm_types',
    'delete-worm_types',
  
]);


// giving vermiculturist permisions


$vermiculturistRole->givePermissionTo([


//bins

    'create-bins',
    'edit-bins',
    'delete-bins',

// bin_conditions

    'create-binconditions',
    'edit-binconditions',
    'delete-binconditions',

//bin_location

    'create-bin_locations',
    'edit-bin_locations',
    'delete-bin_locations',


//worm types permisions
    
    'create-worm_types',
    'edit-worm_types',
    'delete-worm_types',
  
    
]);

    }
}
