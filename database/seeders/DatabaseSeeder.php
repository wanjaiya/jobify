<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;


class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $permissions = [
            ['name' => 'Manage Users', 'slug' => 'manage-users', 'group' => 'users'],
            ['name' => 'Manage Companies', 'slug' => 'manage-companies', 'group' => 'companies'],
            ['name' => 'Manage Jobs', 'slug' => 'manage-jobs', 'group' => 'jobs'],
            ['name' => 'Manage Applications', 'slug' => 'manage-applications', 'group' => 'applications'],
            ['name' => 'View Profile', 'slug' => 'view-profile', 'group' => 'profile'],
        ];

        Permission::insert($permissions);

        $admin = Role::create(['name' => 'Admin', 'slug' => 'admin']);
        $employer = Role::create(['name' => 'Employer', 'slug' => 'employer']);
        $candidate = Role::create(['name' => 'Candidate', 'slug' => 'candidate']);


        $admin->permissions()->sync(Permission::pluck('id'));
        $employer->permissions()->sync(Permission::whereIn('slug', ['manage-jobs', 'manage-applications'])->pluck('id'));
        $candidate->permissions()->sync(Permission::whereIn('slug', ['view-profile'])->pluck('id'));

       $user =  User::factory()->create([
            'name' => 'Admin Staff Link',
            'email' => 'admin@staff-link.com',
            'password' => bcrypt('K$ndi@26!'),
            'phone_number' => '1234567890',
            'published' => 1,
            'email_verified_at' => now(),
        ]);

       $user->roles()->sync([$admin->id]);

    }
}
