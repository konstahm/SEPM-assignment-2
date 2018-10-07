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
          'imagePath' => 'http://cdn.msy.com.au/20073-large_default/razer-mamba-elite-rz01-02560100-chroma-gaming-mouse.jpg',
          'title' => 'Razer Mamba Elite (Chroma) Gaming Mouse',
          'description' => 'Razer Mamba Elite (RZ01-02560100) Chroma 16000 DPI Gaming Mouse',
          'price' => 97
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => 'http://cdn.msy.com.au/19992-large_default/steelseries-62446-rival-600-dual-optical-7-programmable-button-12000cpi-gaming-mouse.jpg',
          'title' => 'Steelseries Rival 600 (RGB) Gaming Mouse',
          'description' => ' Steelseries (62446) Rival 600 Dual-Optical 7 programmable button 12000CPI Gaming Mouse',
          'price' => 99
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => 'http://cdn.msy.com.au/20180-large_default/corsair-darkcore-rgb-ch-9315011-ap-performance-wired-wireless-16000-dpi-optical-gaming-mouse.jpg',
          'title' => 'Corsair Darkcore (RGB) Gaming Mouse',
          'description' => 'Corsair Darkcore RGB (CH-9315011-AP) Performance Wired/Wireless 16000 DPI optical gaming mouse',
          'price' => 129
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => 'http://cdn.msy.com.au/11859-large_default/-razer-blackwidow-x-chroma-017602-rgb-mechanical-gaming-keyboard.jpg',
          'title' => 'Razer BLACKWIDOW (Chroma) Mechanical Gaming Keyboard',
          'description' => 'Razer BLACKWIDOW X CHROMA (017602) RGB Mechanical Gaming Keyboard',
          'price' => 143
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => 'http://cdn.msy.com.au/14389-large_default/steelseries-64575-apex-m500-mx-blue-mechanical-gaming-keyboard.jpg',
          'title' => 'Steelseries APEX (Blue) Mechanical Gaming Keyboard',
          'description' => 'SteelSeries 64575 APEX M500 MX BLUE Mechanical Gaming Keyboard',
          'price' => 119
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => 'http://cdn.msy.com.au/20199-large_default/corsair-gaming-k70-mk2-rgb-led-ch-9109010-na-cherry-mx-rgb-red-full-mechanical-keyboard.jpg',
          'title' => 'Corsair K70 MK2 (RGB) Mechanical Gaming Keyboard',
          'description' => 'Corsair Gaming K70 MK2 RGB LED (CH-9109010-NA) Cherry MX RGB RED Full Mechanical Keyboard',
          'price' => 215
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => 'http://cdn.msy.com.au/17980-large_default/asus-rog-strix-xg258q-245-gaming-1ms-240hz-eyecare-free-sync-has-gameplus-dp-hdmi-usb30-game.jpg',
          'title' => 'ASUS ROG STRIX 24.5" Gaming Monitor',
          'description' => 'ASUS ROG STRIX (XG258Q) 24.5" Gaming 1ms 240Hz Eyecare Free-Sync HAS GamePlus DP HDMI USB30 Game',
          'price' => 539
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => 'http://cdn.msy.com.au/17727-large_default/samsung-24-gaming-curve-lc24fg73fqexxy-1920x1080-1ms-144hz-freesync-d-port-hdmi-tilt-h-adj.jpg',
          'title' => 'Samsung 24" Gaming Curve Monitor',
          'description' => 'Samsung 24" Gaming Curve (LC24FG73FQEXXY) 1920x1080 1ms 144Hz FreeSync D/Port HDMI TILT H/ADJ',
          'price' => 369
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => 'http://cdn.msy.com.au/14408-large_default/lg-ips-27-27mp59g-1920x1080-1ms-freesync-hdmi-dp12-d-sub-gaming-monitor.jpg',
          'title' => 'LG IPS 27" 27MP59G Gaming Monitor',
          'description' => 'LG IPS 27" 27MP59G 1920x1080 1ms FreeSync HDMI DP1.2 D-SUB Gaming Monitor',
          'price' => 253
        ]);
        $product->save();
    }
}
