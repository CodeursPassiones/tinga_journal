<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ensemble des permissins
        $permissions_list = [
            // Article
            'voir-article',
            'écrire-article',
            'créer-article',
            // Journal
            'voir-Journal',
            'écrire-Journal',
            'créer-Journal',

            // User
            'voir-user',
            'écrire-user',
            'créer-user',
        ];
        $authors_permissions_list = [
            // Article
            'voir-article',
            'créer-article',
        ];
        $reviewers_permissions_list = [
            // Article
            'voir-article',
            'écrire-article',
        ];

        // Création des permission
        foreach ($permissions_list as $permission) {
            Permission::create(['name' => $permission]);
        }
        // Création des roles
        $author = Role::create(['name' => 'author']);
        $admin = Role::create(['name' => 'admin']);
        $reviewer = Role::create(['name' => 'reviewer']);

        // Récupération des permissions
        $all_permissions = Permission::all();
        $author_permissions = $all_permissions->whereIn('name', $authors_permissions_list);

        $reviewer_permissions = $all_permissions->whereIn('name', $reviewers_permissions_list);

        // Synchronisation de chque permission aux roles créés
        $author->syncPermissions($author_permissions);
        $reviewer->syncPermissions($reviewer_permissions);
        $admin->syncPermissions($permissions_list);
    }
}
