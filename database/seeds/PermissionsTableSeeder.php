<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'         => '1',
                'title'      => 'user_management_access',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '2',
                'title'      => 'permission_create',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '3',
                'title'      => 'permission_edit',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '4',
                'title'      => 'permission_show',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '5',
                'title'      => 'permission_delete',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '6',
                'title'      => 'permission_access',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '7',
                'title'      => 'role_create',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '8',
                'title'      => 'role_edit',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '9',
                'title'      => 'role_show',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '10',
                'title'      => 'role_delete',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '11',
                'title'      => 'role_access',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '12',
                'title'      => 'user_create',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '13',
                'title'      => 'user_edit',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '14',
                'title'      => 'user_show',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '15',
                'title'      => 'user_delete',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '16',
                'title'      => 'user_access',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '17',
                'title'      => 'manage_hospital_create',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '18',
                'title'      => 'manage_hospital_edit',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '19',
                'title'      => 'manage_hospital_show',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '20',
                'title'      => 'manage_hospital_delete',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '21',
                'title'      => 'manage_hospital_access',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '22',
                'title'      => 'task_management_access',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '23',
                'title'      => 'task_status_create',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '24',
                'title'      => 'task_status_edit',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '25',
                'title'      => 'task_status_show',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '26',
                'title'      => 'task_status_delete',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '27',
                'title'      => 'task_status_access',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '28',
                'title'      => 'task_tag_create',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '29',
                'title'      => 'task_tag_edit',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '30',
                'title'      => 'task_tag_show',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '31',
                'title'      => 'task_tag_delete',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '32',
                'title'      => 'task_tag_access',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '33',
                'title'      => 'task_create',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '34',
                'title'      => 'task_edit',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '35',
                'title'      => 'task_show',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '36',
                'title'      => 'task_delete',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '37',
                'title'      => 'task_access',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '38',
                'title'      => 'tasks_calendar_access',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '39',
                'title'      => 'manage_branch_create',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '40',
                'title'      => 'manage_branch_edit',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '41',
                'title'      => 'manage_branch_show',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '42',
                'title'      => 'manage_branch_delete',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '43',
                'title'      => 'manage_branch_access',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '44',
                'title'      => 'employee_create',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '45',
                'title'      => 'employee_edit',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '46',
                'title'      => 'employee_show',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '47',
                'title'      => 'employee_delete',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '48',
                'title'      => 'employee_access',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '49',
                'title'      => 'service_create',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '50',
                'title'      => 'service_edit',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '51',
                'title'      => 'service_show',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '52',
                'title'      => 'service_delete',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '53',
                'title'      => 'service_access',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '54',
                'title'      => 'appointment_create',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '55',
                'title'      => 'appointment_edit',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '56',
                'title'      => 'appointment_show',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '57',
                'title'      => 'appointment_delete',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '58',
                'title'      => 'appointment_access',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
            [
                'id'         => '59',
                'title'      => 'setting_access',
                'created_at' => '2019-09-06 12:34:52',
                'updated_at' => '2019-09-06 12:34:52',
            ],
        ];

        Permission::insert($permissions);
    }
}
