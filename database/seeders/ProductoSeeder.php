<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            [
                'producto' => 'Agua 1Lt'
                , 'existencias' => 15
                , 'precio_unitario' => 12.5 
                , 'fotografia' => 'agua.jpg'
                , 'descripcion' => 'Agua baja en sales'
                , 'estatus' => 'Activo'
                , 'tasa_iva' => 16
                , 'created_at' => '2021-11-18 07:22'
                , 'updated_at' => '2021-11-18 07:22'
            ]
            ,   [
                'producto' => 'Leche deslactosada 1.5Lt'
                , 'existencias' => 56
                , 'precio_unitario' => 32 
                , 'fotografia' => 'leche.jpg'
                , 'descripcion' => 'Leche deslactosada 100% origen animal'
                , 'estatus' => 'Activo'
                , 'tasa_iva' => 16
                , 'created_at' => '2021-11-18 07:22'
                , 'updated_at' => '2021-11-18 07:22'
            ]
        ]);
        
    }
}
