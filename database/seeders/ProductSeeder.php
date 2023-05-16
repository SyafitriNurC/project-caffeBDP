<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Added Start
        $products = [
            [
                'name' => 'Lemon tea',
                'image' => 'https://i.pinimg.com/564x/8c/1c/52/8c1c52ed1e348a206278a162a52fe070.jpg',
                'price' => 120,
                'description' => 'PHP Language'
            ],
            [
                'name' => 'Teh Tarik',
                'image' => 'https://i.pinimg.com/564x/1c/09/72/1c09721e3b12144d120020364cd8fdb7.jpg',
                'price' => 220,
                'description' => 'Laravel freamwork'
            ],
            [
                'name' => 'Orange juice',
                'image' => 'https://i.pinimg.com/564x/a6/62/87/a662873d10f10cbf44666c493e23a533.jpg',
                'price' => 300,
                'description' => 'Python Language'
            ],
            [
                'name' => 'Coffe Ice',
                'image' => 'https://i.pinimg.com/564x/1b/59/35/1b5935299501303840e372c27fdffcfd.jpg',
                'price' => 110,
                'description' => 'Codeigniter freamwork'
            ],
            [
                'name' => 'Strawberry Juice',
                'image' => 'https://i.pinimg.com/474x/e3/9e/bf/e39ebfcc020a0e08d6dc1d8b82baddd5.jpg',
                'price' => 110,
                'description' => 'Codeigniter freamwork'
            ],
            [
                'name' => 'Matcha Ice',
                'image' => 'https://i.pinimg.com/564x/cc/52/52/cc52523538f22ca7f1ab80b97ef4867c.jpg',
                'price' => 110,
                'description' => 'Codeigniter freamwork'
            ],
            [
                'name' => 'Dragon Fruit Juice',
                'image' => 'https://i.pinimg.com/564x/c3/c5/68/c3c568acfbd7a4150fa00ec089dd6c70.jpg',
                'price' => 110,
                'description' => 'Codeigniter freamwork'
            ],
            [
                'name' => 'Chocolate Ice',
                'image' => 'https://i.pinimg.com/564x/80/90/15/80901592c8ae751b93b5b3079cdb9ba1.jpg',
                'price' => 110,
                'description' => 'Codeigniter freamwork'
            ],
            [
                'name' => 'Seblak',
                'image' => 'https://ik.imagekit.io/tvlk/blog/2022/03/Resep-Seblak-Enak-Traveloka-Mart-3.jpg?tr=dpr-2,w-675',
                'price' => 110,
                'description' => 'Codeigniter freamwork'
            ],
            [
                'name' => 'Mie Ayam',
                'image' => 'https://www.nibble.id/uploads/asal_usul_mie_ayam_01_0ace759bee.jpg',
                'price' => 110,
                'description' => 'Codeigniter freamwork'
            ],
            [
                'name' => 'Baso',
                'image' => 'https://i0.wp.com/resepkoki.id/wp-content/uploads/2016/04/Resep-Bakso-urat.jpg?fit=1518%2C1920&ssl=1',
                'price' => 110,
                'description' => 'Codeigniter freamwork'
            ],
            [
                'name' => 'Mie Gebetan',
                'image' => 'https://i.pinimg.com/564x/6c/9c/fb/6c9cfbda40f0d15572fb59e4ad30965e.jpg',
                'price' => 110,
                'description' => 'Codeigniter freamwork'
            ],
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
        //Added End
    }
}