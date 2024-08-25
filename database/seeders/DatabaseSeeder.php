<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(7)->create();

        $admin = User::create([
            'firstname' => 'Admin',
            'lastname' => 'Admin',
            'username' => 'Admin',
            'birthdate' => Carbon::now(),
            'gender' => 'Male',
            'email' => 'test@example.com',
            'password' => Hash::make('secret'),
        ]);

        $this->call([
            RoleSeeder::class,
            JournalSeeder::class,
            VolumeSeeder::class,
            IssueSeeder::class,
            DisciplineSeeder::class,
            ArticleSeeder::class,
            ArticleAuthorSeeder::class,
        ]);

        $admin_role = Role::where('name', 'admin')->first();
        $admin->assignRole([$admin_role->id]);
    }
}
