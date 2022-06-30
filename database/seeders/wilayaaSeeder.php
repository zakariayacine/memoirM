<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class wilayaaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wilayas')->delete();

        $wilayas = array(
            array('name' => 'Adrar'),
            array('name' => 'Chlef'),
            array('name' => 'Laghouat'),
            array('name' => 'Oum El Bouaghi'),
            array('name' => 'Batna'),
            array('name' => 'Béjaïa'),
            array('name' => 'Biskra'),
            array('name' => 'Béchar'),
            array('name' => 'Blida'),
            array('name' => 'Bouira'),
            array('name' => 'Tamanrasset'),
            array('name' => 'Tébessa'),
            array('name' => 'Tlemcen'),
            array('name' => 'Tiaret'),
            array('name' => 'Tizi Ouzou'),
            array('name' => 'Alger'),
            array('name' => 'Djelfa'),
            array('name' => 'Jijel'),
            array('name' => 'Sétif'),
            array('name' => 'Saïda'),
            array('name' => 'Skikda'),
            array('name' => 'Sidi Bel Abbès'),
            array('name' => 'Annaba'),
            array('name' => 'Guelma'),
            array('name' => 'Constantine'),
            array('name' => 'Médéa'),
            array('name' => 'Mostaganem'),
            array('name' => 'M\'Sila'),
            array('name' => 'Mascara'),
            array('name' => 'Ouargla'),
            array('name' => 'Oran'),
            array('name' => 'El Bayadh'),
            array('name' => 'Illizi'),
            array('name' => 'Bordj Bou Arreridj'),
            array('name' => 'Boumerdès'),
            array('name' => 'El Tarf'),
            array('name' => 'Tindouf'),
            array('name' => 'Tissemsilt'),
            array('name' => 'El Oued'),
            array('name' => 'Khenchela'),
            array('name' => 'Souk Ahras'),
            array('name' => 'Tipaza'),
            array('name' => 'Mila'),
            array('name' => 'Aïn Defla'),
            array('name' => 'Naâma'),
            array('name' => 'Aïn Témouchent'),
            array('name' => 'Ghardaïa'),
            array('name' => 'Relizane')
        );

        DB::table('wilayas')->insert($wilayas);
    }
}
