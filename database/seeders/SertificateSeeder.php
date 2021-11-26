<?php

namespace Database\Seeders;

use App\Models\Sertificate;
use Illuminate\Database\Seeder;

class SertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sertificate::create([
            'product_id' => "1",
            'title' => 'Back To The Norm - Size M',
            'slug' => 'back-to-the-norm-m',
            'image' => 'img/sertifikat/sertif online M_page-0001.jpg',
            'deskripsi' => 'Certificate of Authenticity'
        ]);
        Sertificate::create([
            'product_id' => "1",
            'title' => 'Back To The Norm - Size L',
            'slug' => 'back-to-the-norm-l',
            'image' => 'img/sertifikat/sertif online L_page-0001.jpg',
            'deskripsi' => 'Certificate of Authenticity'
        ]);
        Sertificate::create([
            'product_id' => "1",
            'title' => 'Back To The Norm - Size XL',
            'slug' => 'back-to-the-norm-xl',
            'image' => 'img/sertifikat/sertif online XL_page-0001.jpg',
            'deskripsi' => 'Certificate of Authenticity'
        ]);
    }
}
