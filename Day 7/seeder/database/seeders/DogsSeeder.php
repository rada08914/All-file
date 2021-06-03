<?php

namespace Database\Seeders;
use DB, Carbon;

use Illuminate\Database\Seeder;

class DogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'dog_tag_number'=>'Dog2021525',
                'registeration_number'=>2021525,
                'name'=>'shark',
                'breeder'=>'Zen',
                'owner'=>'Ben',
                'color'=>'black',
                'breed'=>'Askal',
                'sire'=>2,
                'dam'=>3,
                'created_at' => Carbon\Carbon::now(),
                'updated_at'=> Carbon\Carbon::now()
            ],
            [
                'dog_tag_number'=>'Dog2021526',
                'registeration_number'=>2021526,
                'name'=>'Zack',
                'breeder'=>'Len',
                'owner'=>'Jhon',
                'color'=>'brown',
                'breed'=>'Askal',
                'sire'=>1,
                'dam'=>3,
                'created_at' => Carbon\Carbon::now(),
                'updated_at'=> Carbon\Carbon::now()
            ],
            [
                'dog_tag_number'=>'Dog2021527',
                'registeration_number'=>2021527,
                'name'=>'Ping',
                'breeder'=>'Rhey',
                'owner'=>'PJ',
                'color'=>'white black',
                'breed'=>'barron',
                'sire'=>1,
                'dam'=>2,
                'created_at' => Carbon\Carbon::now(),
                'updated_at'=> Carbon\Carbon::now()
            ],
            [
                'dog_tag_number'=>'Dog2021528',
                'registeration_number'=>2021528,
                'name'=>'Caz',
                'breeder'=>'Ken',
                'owner'=>'Magno',
                'color'=>'black',
                'breed'=>'Askal',
                'sire'=>1,
                'dam'=>1,
                'created_at' => Carbon\Carbon::now(),
                'updated_at'=> Carbon\Carbon::now()
            ],
            [
                'dog_tag_number'=>'Dog2021529',
                'registeration_number'=>2021529,
                'name'=>'Jeff',
                'breeder'=>'Raf',
                'owner'=>'carl',
                'color'=>'black',
                'breed'=>'Askal',
                'sire'=>2,
                'dam'=>1,
                'created_at' => Carbon\Carbon::now(),
                'updated_at'=> Carbon\Carbon::now()
            ],
            [
                'dog_tag_number'=>'Dog2021530',
                'registeration_number'=>2021530,
                'name'=>'Perraz',
                'breeder'=>'Parado',
                'owner'=>'Radaz',
                'color'=>'black',
                'breed'=>'Askal',
                'sire'=>1,
                'dam'=>2,
                'created_at' => Carbon\Carbon::now(),
                'updated_at'=> Carbon\Carbon::now()
            ]
        ];

        DB::table('dogs')->insert($data);
    }
}
