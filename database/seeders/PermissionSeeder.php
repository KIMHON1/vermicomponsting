<?php

namespace Database\Seeders;
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class PermissionSeeder extends Seeder
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
$permissions =[
//users permisions
    'view-users',
    'create-users',
    'edit-users',
    'delete-users',

//bins_permisions

    'view-bins',
    'create-bins',
    'edit-bins',
    'delete-bins',


//bin_conditions_permitions
    'view-binconditions',
    'create-binconditions',
    'edit-binconditions',
    'delete-binconditions',
    'view-bin_locations',
    'create-bin_locations',
    'edit-bin_locations',
    'delete-bin_locations',
    //worm types permisions

    'view-worm_types',
    'create-worm_types',
    'edit-worm_types',
    'delete-worm_types',


    //crud for roles
    'view-roles',
    'create-roles',
    'delete-roles',
    'update-roles',





]

;
       
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }


    }
}

// roles we are having

// $adminRole = Role::firstOrcreate(['name' => 'Admin']);
// $vermiculturistRole = Role::firstOrcreate(['name' => 'vermiculturist']);
// $managerRole = Role::firstorcreate(['name'=> 'coperativeManager']);
// $sedoRole = Role::firstorcreate(['name' => 'Sedo']);
// $sectorAgronomyRole =Role::firstorcreate(['name'=>'sectorAgronomy']);
// $districtAgronomyRole =Role::firstorcreate(['name'=>'districtAgronomy']);
// $provinceAgronomyRole =Role::firstorcreate(['name'=>'provinceAgronomy']);

// $adminRole = Role::firstOrcreate(['name' => 'Admin']);


// giving addimin permissions


// $adminRole->givePermissionTo([

// users 
    // 'create-users',
    // 'edit-users',
    // 'delete-users',

//bins

    // 'create-bins',
    // 'edit-bins',
    // 'delete-bins',

// bin_conditions

    // 'create-binconditions',
    // 'edit-binconditions',
    // 'delete-binconditions',


//bin_location

    // 'create-bin_locations',
    // 'edit-bin_locations',
    // 'delete-bin_locations',


//worm types permisions
    
//     'create-worm_types',
//     'edit-worm_types',
//     'delete-worm_types',
  
// ]);


// giving vermiculturist permisions


// $vermiculturistRole->givePermissionTo([


//bins

    // 'create-bins',
    // 'edit-bins',
    // 'delete-bins',

// bin_conditions

    // 'create-binconditions',
    // 'edit-binconditions',
    // 'delete-binconditions',

//bin_location

    // 'create-bin_locations',
    // 'edit-bin_locations',
    // 'delete-bin_locations',


//worm types permisions
    
//     'create-worm_types',
//     'edit-worm_types',
//     'delete-worm_types',
  
    
// ]);

