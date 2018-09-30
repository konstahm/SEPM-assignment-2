<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
          'imagePath' => 'https://static1.squarespace.com/static/59728c4da5790a92b3ce576f/59ea61d6692ebe1e522a8510/5b21cd502b6a2890518e2bde/1528941907047/KAWS_TogetherBrown.jpg?format=1500w',
          'title' => 'KAWS: Together Vinyl Figure',
          'description' => 'The vinyl is stylized in a classic design with KAWS classic eye motif highlighted in black.
                            The figure features two interlocked Companions hugging, and stands at 11.5 inches tall.',
          'price' => 310
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => 'https://stockx.imgix.net/products/streetwear/Kaws-Together-Vinyl-Figure-Black.jpg?fit=fill&bg=FFFFFF&w=1400&h=1000&auto=format,compress&trim=color&q=90',
          'title' => 'KAWS: Together Vinyl Figure (Black)',
          'description' => 'The vinyl is stylized in an all-black design with KAWS classic eye motif highlighted in yellow.
                            The figure features two interlocked Companions hugging, and stands at 11.5 inches tall.',
          'price' => 310
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => 'https://cdna2.zoeysite.com/Adzpo594RQGDpLcjBynL1z/cache=expiry:31536000/compress/https://s3.amazonaws.com/zcom-media/sites/a0iE000000FF6rdIAD/media/catalog/product/a/s/astro_boy_grey.png',
          'title' => 'KAWS: Astro Boy Companion Figure (Grey)',
          'description' => 'Astro Boy usually shown in various heroic poses, the manga hero is here transformed into a pathetic figure,
                            As with all his characters, KAWS brands Astro Boy with his trademark X to replace the original wide eyes.',
          'price' => 4200
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => 'http://174.129.230.82/Hoca/Shop/engine/wp-content/uploads/2016/02/IMG_4580.jpg',
          'title' => 'KAWS: Original Black Dissected Companion Figure',
          'description' => 'KAWS Dissected Companion',
          'price' => 500
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => 'https://cdn.shopify.com/s/files/1/0847/4326/products/kaws_smalllie_brown.jpg?v=1514677777',
          'title' => 'KAWS: Small Lie Companion Figure (Brown)',
          'description' => 'The vinyl is stylized in an brown design with KAWS classic eye motif highlighted in black.
                            The figure features an emotional Companions.',
          'price' => 300
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => 'https://i1.wp.com/nasdank.com/wp-content/uploads/2018/08/Kaws-Small-Lie-Companion-Vinyl-Black.jpg?fit=1780%2C1780&ssl=1',
          'title' => 'KAWS: Small Lie Companion Figure (Black)',
          'description' => 'The vinyl is stylized in an all-black design with KAWS classic eye motif highlighted in black.
                            The figure features an emotional Companions.',
          'price' => 310
        ]);
        $product->save();
    }
}
