<?php
use App\Alumno;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		DB::table('alumnos')->truncate();
		DB::statement('SET FOREIGN_KEY_CHECKS=1;'); 

        DB::table('alumnos')->insert([
            'nombre' => str_random(10), //nombre = sbnjdbsjdbssd
            'apellido' => str_random(10), //apellido = jcjczxbcjznxczx
            'fechanacimiento' => '2021-09-19',
            'direccion' => 'San Salvador',
            'genero' => str_random(1),
            'telefono' => random_int(1000000, 999999999),
            'correo' => str_random(10).'@gmail.com',
            'clave' =>  bcrypt('password'), 

        ]);


        $datos = [
            'nombre' => str_random(10), //nombre = sbnjdbsjdbssd
            'apellido' => str_random(10), //apellido = jcjczxbcjznxczx
            'fechanacimiento' => '2021-09-19',
            'direccion' => 'San Salvador',
            'genero' => str_random(1),
            'telefono' => random_int(1000000, 999999999),
            'correo' => str_random(10).'@gmail.com',
            'clave' =>  bcrypt('password'), 
        ];



        factory(Alumno::class, 18)->create();




    }
}