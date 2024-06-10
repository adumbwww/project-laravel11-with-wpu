<?php



namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

// class Blog extends Model
// {
//     use HasFactory;

//     protected $table = 'blogs';
// }

class Blog
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'zenless-zone-zero-perilisan-resmi-dijadwalkan-juli-2024',
                'title' => 'Zenless Zone Zero: Perilisan Resmi Dijadwalkan Juli 2024',
                'author' => 'Adam Widianto',
                'body' => 'Para penggemar action RPG dengan elemen roguelike, bersiaplah! Zenless Zone Zero, game terbaru dari HoYoverse, 
                akan resmi diluncurkan pada awal Juli 2024 untuk berbagai platform, termasuk Android, iOS, PC, dan PlayStation 5.
                Zenless Zone Zero mengajak pemain untuk menjelajahi New Eridu, sebuah kota metropolitan yang dikelilingi oleh area 
                berbahaya yang dikenal sebagai Belahan, penuh dengan monster mengerikan. Sebagai pemimpin tim elit, pemain bertugas 
                menyelamatkan kota dan mengungkap misteri di balik Calamity, peristiwa apokaliptik yang mengubah dunia.
                Game ini menawarkan perpaduan gameplay yang seru dan menantang, menggabungkan elemen action RPG dengan roguelike. 
                Pemain akan bertarung melawan berbagai macam monster dengan kemampuan unik dan strategi tim yang diperlukan untuk mengalahkan mereka.
                Zenless Zone Zero tidak hanya menawarkan gameplay yang menarik, tetapi juga komunitas yang aktif dan penuh dengan pemain yang antusias. 
                Pemain dapat bergabung dengan berbagai guild, bertukar strategi, dan bersenang-senang bersama pemain lain dari seluruh dunia.
                Pra-registrasi untuk Zenless Zone Zero telah dibuka di semua platform. Bagi para penggemar action RPG dan game dengan cerita 
                yang menarik, Zenless Zone Zero adalah game yang wajib dicoba.',
            ],
            [
                'id' => 2,
                'slug' => 'wuthering-waves-siap-berpetualang-di-dunia-terbuka-yang-menakjubkan',
                'title' => 'Wuthering Waves: Siap Berpetualang di Dunia Terbuka yang Menakjubkan!',
                'author' => 'Adam Widianto',
                'body' => 'Para penjelajah dunia fantasi, bersiaplah untuk petualangan baru yang luar biasa! Wuthering Waves, game open-world action RPG 
                terbaru dari Kuro Games, telah resmi diluncurkan pada 22 Mei 2024 untuk platform PC, Android, dan iOS. Sejak perilisannya, 
                game ini telah mendapatkan banyak pujian dari para pemain karena dunia yang luas dan indah, gameplay yang seru dan menantang, 
                serta cerita yang menarik
                Memasuki Wuthering Waves, pemain akan disuguhkan dengan dunia yang sangat luas dan penuh dengan tempat-tempat menarik untuk dikunjungi. 
                Dari hutan lebat yang penuh dengan monster berbahaya, hingga kota-kota yang ramai dengan penduduk yang ramah, setiap sudut dunia ini 
                memiliki cerita dan misterinya sendiri. Pemain bebas untuk menjelajahi dunia ini sesuka hati mereka, dan selalu ada sesuatu yang baru untuk ditemukan.
                Wuthering Waves adalah game open-world RPG yang wajib dicoba bagi para gamer yang mencari pengalaman bermain yang imersif, visual yang memukau, 
                gameplay yang seru, dan cerita yang menarik.',
            ]
            ];
    }

    public static function find($slug): array
    {
        // return Arr::first(static::all(), function($blog) use ($slug) {
        //     return $blog['slug'] == $slug;
        // });

        $blog = Arr::first(static::all(), fn ($blog) => $blog['slug'] == $slug);

        if (!$blog) {
            abort(404);
        }
        return $blog;
    }

}
