<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $admin = User::create([
            'firstname' => 'Admin',
            'lastname' => 'Admin',
            'username' => 'Admin',
            'birthdate' => Carbon::now(),
            'gender' => 'Male',
            'email' => 'test@example.com',
            'password' => Hash::make('secret'),
        ]);
        $users = User::factory(1)->create();

        $this->call([
            RoleSeeder::class,
            JournalSeeder::class,
            // VolumeSeeder::class,
            // IssueSeeder::class,
            DisciplineSeeder::class,
            // ArticleSeeder::class,
            // ArticleUserSeeder::class,
        ]);

        $admin_role = Role::where('name', 'admin')->first();
        $author = Role::where('name', 'author')->first();
        $admin->assignRole([$admin_role->id]);
        foreach ($users as $user) {
            $user->assignRole($author->id);
        }
    }
}
