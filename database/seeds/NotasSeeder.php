<?php

use App\Nota;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		DB::table('notas')->truncate();
		DB::statement('SET FOREIGN_KEY_CHECKS=1;'); 


        DB::table('notas')->insert([
            'nota1' => random_int(1,10),
            'nota2' => random_int(1,10),
            'nota3' => random_int(1,10),
            'promedio' => random_int(1,10),
            'parcial' => random_int(1,10),
            'idalumno' => '1',
            'idcursos' => '1',
            'idprofesor' => '1',
        ]);

        factory(Nota::class, 18)->create();










        $data = DB::select('SELECT * FROM alumnos');
        dd($data);
    }
}
