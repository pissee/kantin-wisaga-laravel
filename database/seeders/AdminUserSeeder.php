<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Cari pengguna yang akan dijadikan admin, misalnya berdasarkan email
        $user = User::where('email', 'admin@gmail.com')->first();

        if ($user) {
            $user->role = 'admin';
            $user->save();
        } else {
            // Buat pengguna admin baru jika belum ada
            User::create([
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('sayaadalahadmin'), 
                'role' => 'admin',
            ]);
        }
    }
}
