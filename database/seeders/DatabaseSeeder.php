<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Journal;
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
            'email' => 'admin@revue-tinga.com',
            'password' => Hash::make('tinga@2024Admin'),
        ]);
        $maintainer = User::create([
            'firstname' => 'Maintainer',
            'lastname' => 'Maintainer',
            'username' => 'Maintainer',
            'birthdate' => Carbon::now(),
            'gender' => 'Male',
            'email' => 'maintainer@revue-tinga.com',
            'password' => Hash::make('tinga@2024Maintainer'),
        ]);

        $journal = User::create([
            'firstname' => 'Journal',
            'lastname' => 'Journal',
            'username' => 'Journal',
            'birthdate' => Carbon::now(),
            'gender' => 'Male',
            'email' => 'journal@revue-tinga.com',
            'password' => Hash::make('tinga@2024Journal'),
        ]);

        Journal::create([
            'title' => 'Tinga',
            'description' => '',
            'issn' => '',
            'logo_path' => '',
        ]);

        $this->call([
            RoleSeeder::class,
        ]);

        $admin_role = Role::where('name', 'admin')->first();
        $admin->assignRole([$admin_role->id]);
        $maintainer->assignRole([$admin_role->id]);
        $journal->assignRole([$admin_role->id]);
    }
}
