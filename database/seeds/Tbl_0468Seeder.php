<?php

use Illuminate\Database\Seeder;

class Tbl_0468Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_0468')->insert([
            'judul_artikel' => Str::random(15),
            'tanggal_artikel' => date_create(),
            'deskripsi_artikel' => Str::random(20),
        ]);
    }
}
