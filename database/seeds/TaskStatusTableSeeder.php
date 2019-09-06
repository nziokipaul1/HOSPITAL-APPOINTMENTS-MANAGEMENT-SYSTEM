<?php

use App\TaskStatus;
use Illuminate\Database\Seeder;

class TaskStatusTableSeeder extends Seeder
{
    public function run()
    {
        $taskStatuses = [[
            'id'         => '1',
            'name'       => 'Open',
            'created_at' => '2019-09-06 12:28:11',
            'updated_at' => '2019-09-06 12:28:11',
        ],
            [
                'id'         => '2',
                'name'       => 'In progress',
                'created_at' => '2019-09-06 12:28:11',
                'updated_at' => '2019-09-06 12:28:11',
            ],
            [
                'id'         => '3',
                'name'       => 'Closed',
                'created_at' => '2019-09-06 12:28:11',
                'updated_at' => '2019-09-06 12:28:11',
            ]];

        TaskStatus::insert($taskStatuses);
    }
}
