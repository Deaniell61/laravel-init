<?php

use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'id'               => 1,
            'username'         => "admin",
            'password'         => bcrypt('foxylabs'),
            'email'            => "admin@foxylabs.gt",
            'privileges'       => 1,
            'rol'              => 2,
            'empleado'         => null,
            'sucursal'         => null,
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);

        DB::table('usuarios')->insert([
            'id'               => 2,
            'username'         => "daniel",
            'password'         => bcrypt('foxylabs'),
            'email'            => "daniel@foxylabs.gt",
            'privileges'       => 1,
            'rol'              => 1,
            'empleado'         => 1,
            'sucursal'         => null,
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);

        DB::table('usuarios')->insert([
            'id'               => 3,
            'username'         => "alejandro",
            'password'         => bcrypt('foxylabs'),
            'email'            => "alejandro@foxylabs.gt",
            'privileges'       => 1,
            'rol'              => 3,
            'empleado'         => 2,
            'sucursal'         => null,
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
    }
}
