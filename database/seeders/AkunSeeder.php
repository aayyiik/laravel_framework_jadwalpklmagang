<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $user = [
            [
                'nama'=> 'PAA',
                'nip'=>'154233324222333',
                'nim'=>null,
                'email'=>'paa@gmail.com',
                'password'=>bcrypt('12345'),
                'tgl_lahir'=>'1972-09-10',
                'no_telpon'=>'08123106724',
                'alamat'=>'JL pantura no 10',
                'jenis_kelamin'=>'Perempuan',
                'role_id'=>6

                
            ],
            [
                'nama'=> 'Dosen',
                'nip'=>'15423333342526624',
                'nim'=>null,
                'email'=>'dosen@gmail.com',
                'password'=>bcrypt('12345'),
                'tgl_lahir'=>'1988-03-14',
                'no_telpon'=>'08123105424',
                'alamat'=>'JL Boyolali No 07',
                'jenis_kelamin'=>'Pria',
                'role_id'=>5

            ],
            [
                'nama'=> 'Mahasiswa',
                'nip'=>null,
                'nim'=>'152011513053',
                'email'=>'mahasiswa@gmail.com',
                'password'=>bcrypt('12345'),
                'tgl_lahir'=>'2002-01-25',
                'no_telpon'=>'08768265284',
                'alamat'=>'JL Sukomanunngal 06',
                'jenis_kelamin'=>'Perempuan',
                'role_id'=>4
            ],
        ];

        foreach($user as $key => $value){
            User::create($value);
        }
    }
}
