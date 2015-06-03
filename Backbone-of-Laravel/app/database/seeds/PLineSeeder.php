<?php

class PLineSeeder extends Seeder
{
    public function run()
    {
        DB::table('pLine')->insert(array(
            array(
                'pLine' => 'Q-Line',
                'pPic' => 'Doe'
            ),
            array(
                'pLine' => 'E-Line',
                'pPic' => 'Doe'
            ),
            array(
                'pLine' => 'V-Line',
                'pPic' => 'Doe'
            ),
            array(
                'pLine' => 'Videowall',
                'pPic' => 'Doe'
            ),
            array(
                'pLine' => 'Multi-touch',
                'pPic' => 'Doe'
            )
        ));
    }
}