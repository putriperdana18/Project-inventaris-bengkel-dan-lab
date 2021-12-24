<?php

namespace Database\Seeders;

use App\Models\Role; 
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create([
            'name' => 'admin',
            'display_name' => 'izin admin'
        ]);

         $pengguna = Role::create([
            'name' => 'pengguna',
            'display_name' => 'izin pengguna'
        ]);


        $useradmin = new User();
        $useradmin->name = 'Putri Perdana';
        $useradmin->email = 'admin@gmail.com';
        $useradmin->password = Hash::make('12345678');
        $useradmin->save();
        $useradmin->attachRole($admin);

        $pengguna = new User();
        $pengguna->name = 'Puput';
        $pengguna->email = 'puput@gmail.com';
        $pengguna->password = Hash::make('12345678');
        $pengguna->save();
        $pengguna->attachRole($pengguna);
    }
}
