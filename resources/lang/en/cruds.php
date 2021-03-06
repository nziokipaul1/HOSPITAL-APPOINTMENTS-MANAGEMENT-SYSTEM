<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission'     => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Title',
            'title_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Title',
            'title_helper'       => '',
            'permissions'        => 'Permissions',
            'permissions_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'           => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Name',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => '',
            'password'                 => 'Password',
            'password_helper'          => '',
            'roles'                    => 'Roles',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
            'phone_number'             => 'Phone Number',
            'phone_number_helper'      => 'Example: 2547XXXXXXXX',
            'profile_photo'            => 'Profile Photo',
            'profile_photo_helper'     => '',
        ],
    ],
    'manageHospital' => [
        'title'          => 'Hospitals',
        'title_singular' => 'Hospital',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => 'Name of the Hospital',
            'address'           => 'Address',
            'address_helper'    => 'Hosp Address',
            'email'             => 'Contact Email',
            'email_helper'      => 'Hospital Main/Contact Email address',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'taskManagement' => [
        'title'          => 'Task management',
        'title_singular' => 'Task management',
    ],
    'taskStatus'     => [
        'title'          => 'Statuses',
        'title_singular' => 'Status',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'taskTag'        => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'task'           => [
        'title'          => 'Tasks',
        'title_singular' => 'Task',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'name'               => 'Name',
            'name_helper'        => '',
            'description'        => 'Description',
            'description_helper' => '',
            'status'             => 'Status',
            'status_helper'      => '',
            'tag'                => 'Tags',
            'tag_helper'         => '',
            'attachment'         => 'Attachment',
            'attachment_helper'  => '',
            'due_date'           => 'Due date',
            'due_date_helper'    => '',
            'assigned_to'        => 'Assigned to',
            'assigned_to_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated At',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted At',
            'deleted_at_helper'  => '',
        ],
    ],
    'tasksCalendar'  => [
        'title'          => 'Calendar',
        'title_singular' => 'Calendar',
    ],
    'manageBranch'   => [
        'title'          => 'Manage Branches',
        'title_singular' => 'Manage Branch',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => '',
            'name'                   => 'Name',
            'name_helper'            => 'Name of Branch',
            'branch_address'         => 'Branch Address',
            'branch_address_helper'  => '',
            'branch_email'           => 'Branch Email',
            'branch_email_helper'    => '',
            'parent_hospital'        => 'Parent Hospital',
            'parent_hospital_helper' => 'Hospital that this branch belongs to',
            'created_at'             => 'Created at',
            'created_at_helper'      => '',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => '',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => '',
        ],
    ],
    'employee'       => [
        'title'          => 'Employees',
        'title_singular' => 'Employee',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => '',
            'name'                => 'Name',
            'name_helper'         => '',
            'email'               => 'Email',
            'email_helper'        => '',
            'phone_number'        => 'Phone Number',
            'phone_number_helper' => '',
            'user'                => 'User',
            'user_helper'         => 'Select Doctor\'s user profile',
            'created_at'          => 'Created at',
            'created_at_helper'   => '',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => '',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => '',
        ],
    ],
    'service'        => [
        'title'          => 'Services',
        'title_singular' => 'Service',
        'fields'         => [
            'id'                              => 'ID',
            'id_helper'                       => '',
            'name'                            => 'Name',
            'name_helper'                     => 'service name. e.g. Dental',
            'hospitals_offering'              => 'Hospitals Offering',
            'hospitals_offering_helper'       => 'All Hospitals offering the service',
            'doctors_offering_service'        => 'Doctors Offering Service',
            'doctors_offering_service_helper' => 'Doctors Offering Service',
            'cost'                            => 'Cost',
            'cost_helper'                     => 'Price of the service',
            'created_at'                      => 'Created at',
            'created_at_helper'               => '',
            'updated_at'                      => 'Updated at',
            'updated_at_helper'               => '',
            'deleted_at'                      => 'Deleted at',
            'deleted_at_helper'               => '',
        ],
    ],
    'appointment'    => [
        'title'          => 'Appointments',
        'title_singular' => 'Appointment',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => '',
            'client'                => 'Client',
            'client_helper'         => 'Client booking the appointment',
            'service_booked'        => 'Service Booked',
            'service_booked_helper' => 'What service are you booking an appointment for?',
            'doctor'                => 'Doctor/Physician',
            'doctor_helper'         => 'Choose the preferred doctor',
            'hospital'              => 'Hospital',
            'hospital_helper'       => 'Hospital to attend',
            'date_and_time'         => 'Date And TimenFor Appointment',
            'date_and_time_helper'  => 'When do you want to get the service?',
            'branch'                => 'Hospital Branch',
            'branch_helper'         => 'Select which hospital branch to attend',
            'created_at'            => 'Created at',
            'created_at_helper'     => '',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => '',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => '',
            'is_completed'          => 'Is Completed?',
            'is_completed_helper'   => 'Check if appointment has been served',
            'rescheduled_to'        => 'Rescheduled To',
            'rescheduled_to_helper' => 'If current date is not available, select new date/time to reschedule here',
        ],
    ],
    'setting'        => [
        'title'          => 'Settings',
        'title_singular' => 'Setting',
    ],
];
