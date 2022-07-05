<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionTabelSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleSuperAdmin = Role::create(['name' => 'superadmin']);
                     // Permission List as array
                     $permissions = [
                        
                        [
                            'group_name' => 'admin',
                            'permissions' => [
                                'admin.create',
                                'admin.view',
                                'admin.edit',
                                'admin.delete',
                                'admin.approve',
                            ]
                        ],
                        [
                            'group_name' => 'role',
                            'permissions' => [
                                'role.create',
                                'role.view',
                                'role.edit',
                                'role.delete',
                                'role.approve',
                            ]
                        ],
                        [
                            'group_name' => 'category',
                            'permissions' => [
                                'category.create',
                                'category.view',
                                'category.edit',
                                'category.delete',
                                'category.approve',
                            ]
                        ],
                     ];

                for ($i = 0; $i < count($permissions); $i++) {
                // Create Permission
                $permissionGroup = $permissions[$i]['group_name'];
                for ($j = 0; $j < count($permissions[$i]['permissions']); $j++) {
                    $permission = Permission::create(['name' => $permissions[$i]['permissions'][$j],'group_name'=>$permissionGroup]);
                    $roleSuperAdmin->givePermissionTo($permission);
                    $permission->assignRole($roleSuperAdmin);
                }
                
            }
    }
}
