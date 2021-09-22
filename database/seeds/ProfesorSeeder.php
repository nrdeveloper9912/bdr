<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Profesor;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		DB::table('profesor')->truncate();
		DB::statement('SET FOREIGN_KEY_CHECKS=1;'); 

        DB::table('profesor')->insert([
            'nombre' => str_random(10),
            'apellido' => str_random(10),
            'dui' => random_int(1000000, 999999999),
            'telefono' => random_int(1000000, 999999999),
            'email' => str_random(10).'@gmail.com',
            'clave' => bcrypt('password'), 
        ]);

        factory(Profesor::class, 18)->create();

    }
}
