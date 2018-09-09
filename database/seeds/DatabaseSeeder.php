<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Modalidades
        DB::table('modalidade_eventos')->insert([
            'nome_modalidade' => 'Congresso'
        ]);

        DB::table('modalidade_eventos')->insert([
            'nome_modalidade' => 'Convenção'
        ]);

        DB::table('modalidade_eventos')->insert([
            'nome_modalidade' => 'Seminários'
        ]);

        DB::table('modalidade_eventos')->insert([
            'nome_modalidade' => 'Workshops e oficinas'
        ]);

        //Endereco
        DB::table('enderecos')->insert([
            'endereco' => 'Rua maria das dores',
            'cep' => '35950000',
            'bairro' => 'centro',
            'uf' => 'MG',
            'numero' => '111',
            'cidade' => 'estique',
            'estado' => 'Minas Gerais'
        ]);

        //Pessoa
        DB::table('pessoa_juridicas')->insert([
            'id_endereco' => 1,
            'cnpj' => '47442098000109',
            'razao_social' => 'Razão do manos',
            'inscricao_estadual' => 'SSP'
        ]);
        
        //Evento
        DB::table('eventos')->insert([
            'id_modalidade_evento' => '1',
            'id_pessoa_juridica' => '1',
            'nome' => 'CPM 22',
            'descricao_evento' => 'O recomeço do CPM 22.',
            'data_evento' => '2018-09-01',
            'foto_evento' => 'cpm22.png'
        ]);     
    }
}
