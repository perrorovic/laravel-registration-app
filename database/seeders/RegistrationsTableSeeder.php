<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegistrationsTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'fullname' => 'Example 1',
                'email' => 'example1@example.com',
                'address' => 'Example Address No.1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'fullname' => 'Example 2',
                'email' => 'example2@example.com',
                'address' => 'Example Address No.2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'fullname' => 'Example 3',
                'email' => 'example3@example.com',
                'address' => 'Example Address No.3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('registrations')->insert($data);
    }
}

