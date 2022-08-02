<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'id' => '1',
            'user_id' => '1',
            'judul' => 'Contoh buku',
            'slug' => 'contoh-buku',
            'cover' => 'cover1.png',
            'file' => 'https://flipbookpdf.net/web/site/2333bf05fc97faeb3032d487effb7e312111be26202110.pdf-ba68005824ab2cdcad418db1b9ccded4c020591e.html',
            'ringkasan' => 'ini adalah ringkasan',
            'penulis' => 'nama penulis',
            'penerbit' => 'nama penerbit',
            'category_id' => '1',
            'jml_halaman' => '250',
            'is_verify' => '1',
        ]);
    }
}
