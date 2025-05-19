<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Form;

class FormsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $param = [
        //     'name' => '福島太郎',
        //     'tel' => '01205546287',
        //     'content' => '福島は福島'
        // ];
        // DB::table('forms')->insert($param);
        //         $param = [
        //     'name' => '宮城太郎',
        //     'tel' => '01205547894',
        //     'content' => '宮城は宮城'
        // ];
        // DB::table('forms')->insert($param);
        //                 $param = [
        //     'name' => '山形太郎',
        //     'tel' => '01205549836',
        //     'content' => '山形は山形'
        // ];
        // DB::table('forms')->insert($param);
        Form::factory()->count(5)->create();
    }
}
