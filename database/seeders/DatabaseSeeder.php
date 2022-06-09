<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
        $this->users();
        $this->paginas();
        $this->centros();
        $this->slides();
        $this->servicos();
    }


    public function users() {
        DB::table('users')->insert([
            'nome' => 'Anselmo Maduela',
            'email' => 'admin@mz.com',
            'username' => 'admin',
            'tipo' => 'admin',
            'telefone' => 841234567,
            'password' => Hash::make('senha'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'nome' => 'Edilso Orlando',
            'email' => 'edymz@mz.com',
            'username' => 'edymz',
            'tipo' => 'admin',
            'telefone' => 821234567,
            'password' => Hash::make('123'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }

    public function paginas() {
        DB::table('paginas')->insert([
            'nome' => 'Sobre nos',
            'nome_abreviado' => 'sobre_nos',
            'conteudo' => 'loLorem ipsum dolor sit amet consectetur adipisicing elit. Atque dolor illum omnis itaque nam eligendi animi numquam ipsa repellat, accusantium nulla in aspernatur optio nihil, ad fuga eum iste tempore?rem',
            'destaque' => 'noimage.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('paginas')->insert([
            'nome' => 'Termos e Condicoes',
            'nome_abreviado' => 'termos_e_condicoes',
            'conteudo' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque dolor illum omnis itaque nam eligendi animi numquam ipsa repellat, accusantium nulla in aspernatur optio nihil, ad fuga eum iste tempore?rem',
            'destaque' => 'noimage.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('paginas')->insert([
            'nome' => 'Termos de Uso',
            'nome_abreviado' => 'termos_de_uso',
            'conteudo' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque dolor illum omnis itaque nam eligendi animi numquam ipsa repellat, accusantium nulla in aspernatur optio nihil, ad fuga eum iste tempore?rem',
            'destaque' => 'noimage.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('paginas')->insert([
            'nome' => 'Contactos',
            'nome_abreviado' => 'contactos',
            'conteudo' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque dolor illum omnis itaque nam eligendi animi numquam ipsa repellat, accusantium nulla in aspernatur optio nihil, ad fuga eum iste tempore?rem',
            'destaque' => 'noimage.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }

    public function centros() {
        DB::table('centros')->insert([
            'nome' => 'Bacia 1',
            'nome_abreviado' => 'bacia1',
            'endereco' => 'Chiveve',
            'valor_acesso' => 20,
            'detalhe' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque eaque cumque quas deserunt sunt cum magnam eius tenetur reprehenderit unde architecto iusto quasi corporis nemo, praesentium inventore doloribus repudiandae nostrum',
            'imagem' => Str::random(10).'.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('centros')->insert([
            'nome' => 'Bacia 2',
            'nome_abreviado' => 'bacia2',
            'endereco' => 'Casa das Frutas',
            'valor_acesso' => 20,
            'detalhe' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque eaque cumque quas deserunt sunt cum magnam eius tenetur reprehenderit unde architecto iusto quasi corporis nemo, praesentium inventore doloribus repudiandae nostrum',
            'imagem' => Str::random(10).'.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('centros')->insert([
            'nome' => 'Bacia 3',
            'nome_abreviado' => 'bacia3',
            'endereco' => 'Clube do Golf',
            'valor_acesso' => 20,
            'detalhe' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque eaque cumque quas deserunt sunt cum magnam eius tenetur reprehenderit unde architecto iusto quasi corporis nemo, praesentium inventore doloribus repudiandae nostrum',
            'imagem' => Str::random(10).'.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }

    public function slides() {
        DB::table('slides')->insert([
            'imagem' => 'slide1.jpg',
            'titulo' => 'Imagem 1 do Slide',
            'descricao' => Str::random(80),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
        DB::table('slides')->insert([
            'imagem' => 'slide2.jpg',
            'titulo' => 'Imagem 2 do Slide',
            'descricao' => Str::random(80),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
        DB::table('slides')->insert([
            'imagem' => 'slide3.jpg',
            'titulo' => 'Imagem 3 do Slide',
            'descricao' => Str::random(80),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

    }

    public function servicos() {
        DB::table('servicos')->insert([
            'nome' => 'Mar-na-Braza',
            'tipo' => 'Restaurante',
            'centro_id' => 1,
            'preco' => 0,
            'telefone' => 841212122,
            'telefone_alt' => 841212121,
            'imagem' => 'servico.jpg',
            'descricao' => Str::random(80),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('servicos')->insert([
            'nome' => 'Rio-na-Braza',
            'tipo' => 'Restaurante',
            'centro_id' => 2,
            'preco' => 0,
            'telefone' => 841212122,
            'telefone_alt' => 841212121,
            'imagem' => 'servico.jpg',
            'descricao' => Str::random(80),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('servicos')->insert([
            'nome' => 'Lagoa-na-Braza',
            'tipo' => 'Restaurante',
            'centro_id' => 3,
            'preco' => 0,
            'telefone' => 841212122,
            'telefone_alt' => 841212121,
            'imagem' => 'servico.jpg',
            'descricao' => Str::random(80),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
    }
}
