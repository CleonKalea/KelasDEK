<?php

namespace App\Models;

class Poli{
    private static $poli = [
        [
            "nampol" => "Poli Mata",
            "slug" => "poli-mata",
            "Biaya" => "500.000",
            "Lokasi" => "Gedung A-7",
            "desc" => "Poli Mata adalah poli yang sangat indah bersamam semuanya",
            "desc2" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati non qui voluptas dolores saepe nisi omnis mollitia, vel modi! Non libero odio eligendi rerum, ipsum "
        ],
        [
            "nampol" => "Poli Jiwa",
            "slug" => "poli-jiwa",
            "Biaya" => "400.000",
            "Lokasi" => "Gedung A-1",
            "desc" => "Poli Mata adalah poli yang menjaga kejiwaan",
            "desc2" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis soluta nobis culpa quia deserunt beatae hic cum praesentium dolor, pariatur odio fugiat aperiam autem dolore ea quisquam provident consectetur ipsum veritatis minima quibusdam qui id officia labore. Praesentium fuga accusamus corrupti facere explicabo ad et corporis, fugit minus repellat soluta error adipisci incidunt nam quo totam est? Excepturi exercitationem error voluptates repudiandae. Blanditiis, velit cum consequatur ex impedit temporibus ratione ducimus expedita nostrum! Ducimus, illo earum voluptatibus quibusdam, enim mollitia excepturi illum perferendis tenetur facilis dolore omnis, aperiam nobis quis sunt est quod iure repellat qui repellendus adipisci autem nam!"
        ],
        [
            "nampol" => "Poli Kandungan",
            "slug" => "poli-kandungan",
            "Biaya" => "450.000",
            "Lokasi" => "Gedung A-4",
            "desc" => "Poli Mata adalah poli yang menjaga anak anda hingga ke dunia ini",
            "desc2" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque illum iure nihil odio asperiores iusto perferendis. Quia unde qui sequi quae eius minus nostrum corporis accusamus ipsam dolorum cupiditate impedit, sed amet distinctio veniam eveniet doloribus corrupti recusandae blanditiis. Consectetur ea nulla accusantium quasi dicta hic esse laboriosam eligendi voluptates!"
        ]
    ];

    public static function daftar(){
        return collect(self::$poli);
    }

    public static function cari($slug){
        $polik = static::daftar();

        return $polik->firstWhere('slug', $slug);
    }
}
