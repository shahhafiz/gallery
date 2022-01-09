<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Image;
use Carbon\Carbon;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = [
            [
                'id'             => 1,
                'link'           => 'storage/img-1.png',
                'description'    => 'This is the description',
                'tags'           => 'tag1, tag2, tag3',
                'created_at'     => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'     => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        Image::insert($images);
    }
}
