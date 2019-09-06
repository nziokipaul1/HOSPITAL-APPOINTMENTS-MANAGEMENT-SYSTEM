<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::post('users/media', 'UsersApiController@storeMedia')->name('users.storeMedia');
    Route::apiResource('users', 'UsersApiController');

    // Managehospitals
    Route::apiResource('manage-hospitals', 'ManageHospitalsApiController');

    // Taskstatuses
    Route::apiResource('task-statuses', 'TaskStatusApiController');

    // Tasktags
    Route::apiResource('task-tags', 'TaskTagApiController');

    // Tasks
    Route::post('tasks/media', 'TaskApiController@storeMedia')->name('tasks.storeMedia');
    Route::apiResource('tasks', 'TaskApiController');

    // Taskscalendars
    Route::apiResource('tasks-calendars', 'TasksCalendarApiController', ['except' => ['store', 'show', 'update', 'destroy']]);

    // Managebranches
    Route::apiResource('manage-branches', 'ManageBranchesApiController');

    // Employees
    Route::apiResource('employees', 'EmployeesApiController');

    // Services
    Route::apiResource('services', 'ServicesApiController');

    // Appointments
    Route::apiResource('appointments', 'AppointmentsApiController');
});
