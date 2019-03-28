<?php

use Illuminate\Database\Seeder;

class MahasiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 		$faker = Faker\Factory::create();
    	for ($i=1; $i < 20 ; $i++) { 
			DB::table('mahasiswa')->insert([
	            'nama' => $faker->name,
	            'nrp' => '05111640000'.$i,
	            'alamat' => Str::random(10),
	        ]);
    	}

        for ($i=1; $i < 20 ; $i++) { 
            DB::table('dosen')->insert([
                'nama' => $faker->name,
                'nik' => '23200'.$i,
                'alamat' => Str::random(10),
                'mengajar' => rand(1, 4)

            ]);
        }

        DB::table('mata_kuliah')->insert([
            'id_pengajar' => '1',
            'nama' => 'imk',
        ]);

        DB::table('mata_kuliah')->insert([
            'id_pengajar' => '2',
            'nama' => 'sbd',
        ]);

        DB::table('mata_kuliah')->insert([
            'id_pengajar' => '3',
            'nama' => 'mbd',
        ]);

        DB::table('mata_kuliah')->insert([
            'id_pengajar' => '4',
            'nama' => 'strukdat',
        ]);

                        

    }
}
