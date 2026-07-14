<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            // Facial Services
            [
                'name' => 'Facial Basic',
                'category' => 'facial',
                'description' => 'Perawatan wajah dasar untuk membersihkan dan menyegarkan kulit. Termasuk pembersihan, eksfoliasi, dan masker wajah.',
                'price' => 350000,
                'duration' => 45,
                'is_active' => true,
            ],
            [
                'name' => 'Facial Whitening',
                'category' => 'facial',
                'description' => 'Perawatan pencerah kulit dengan bahan aktif yang aman dan efektif untuk mencerahkan warna kulit.',
                'price' => 500000,
                'duration' => 60,
                'is_active' => true,
            ],
            [
                'name' => 'Acne Facial',
                'category' => 'facial',
                'description' => 'Perawatan khusus untuk kulit berjerawat. Mengandung bahan anti-inflamasi dan antibakteri.',
                'price' => 450000,
                'duration' => 55,
                'is_active' => true,
            ],
            // Laser Services
            [
                'name' => 'Laser Hair Removal',
                'category' => 'laser',
                'description' => 'Penghilangan rambut permanen dengan teknologi laser terbaru untuk hasil maksimal.',
                'price' => 750000,
                'duration' => 45,
                'is_active' => true,
            ],
            [
                'name' => 'Laser Skin Rejuvenation',
                'category' => 'laser',
                'description' => 'Peremajaan kulit dengan laser untuk mengatasi kerutan, bekas jerawat, dan pigmentasi.',
                'price' => 850000,
                'duration' => 60,
                'is_active' => true,
            ],
            // Anti-Aging
            [
                'name' => 'Anti-Aging Treatment',
                'category' => 'anti-aging',
                'description' => 'Perawatan anti-penuaan dengan teknologi terkini untuk mengurangi kerutan dan menjaga elastisitas kulit.',
                'price' => 650000,
                'duration' => 70,
                'is_active' => true,
            ],
            [
                'name' => 'Collagen Facial',
                'category' => 'anti-aging',
                'description' => 'Facial dengan kolagen untuk meningkatkan kekenyalan dan kelembaban kulit.',
                'price' => 550000,
                'duration' => 50,
                'is_active' => true,
            ],
            // Body Massages
            [
                'name' => 'Relaxation Massage',
                'category' => 'body',
                'description' => 'Pijat relaksasi dengan minyak esensial untuk menghilangkan stres dan ketegangan otot.',
                'price' => 400000,
                'duration' => 60,
                'is_active' => true,
            ],
            [
                'name' => 'Deep Tissue Massage',
                'category' => 'body',
                'description' => 'Pijat jaringan dalam untuk mengatasi otot kaku, nyeri punggung, dan meningkatkan sirkulasi darah.',
                'price' => 500000,
                'duration' => 75,
                'is_active' => true,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}