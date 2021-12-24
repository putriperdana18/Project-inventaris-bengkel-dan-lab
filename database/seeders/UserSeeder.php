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

         $kasir = Role::create([
            'name' => 'kasir',
            'display_name' => 'izin kasir'
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

        $userkasir1 = new User();
        $userkasir1->name = 'Puper';
        $userkasir1->email ='puper@gmail.com';
        $userkasir1->password = Hash::make('12345678');
        $userkasir1->save();
        $userkasir1->attachRole($kasir);

        $userkasir2 = new User();
        $userkasir2->name = 'Sfena';
        $userkasir2->email ='sfena@gmail.com';
        $userkasir2->password = Hash::make('12345678');
        $userkasir2->save();
        $userkasir2->attachRole($kasir);
    }
}
