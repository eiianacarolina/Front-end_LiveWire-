<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estado = collect(['SP', 'RJ', 'MT', 'RS', 'ES', 'MG']);
        $cidade = collect(['São Paulo','Duque de Caxias','3 Lagoas','Curitiba','Vitória',
        'Belo Horizonte','Uberlândia','Presidente Epitácio','Porto Alegre','Cuiabá']);
        $estado_civil = collect(['casado', 'solteiro', 'viuvo']);

        for($i = 0; $i<400; $i++){
            Usuario::create([
                'nome'=> 'pessoa'.$i,
                'email'=> 'pessoa'.$i.'@senai',
                'celular'=>'18992898910',
                'estado_civil'=> $estado_civil->random(),
                'data_nascimento'=> rand(1990, 2005) . '-'.rand(1,12).'-'.rand(1,28),
                'cidade'=>$cidade->random(),
                'estado'=>$estado->random(),
                'endereco'=> 'Rua ABC',
                'cep'=> '1234567',
                'password'=> '1234'
            ]);
        }
    }
}


