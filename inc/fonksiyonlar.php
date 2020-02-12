<?php 
// Veritabanı bağlantısı;
function baglan()
{
	$sunucu       = "localhost";
	$vtAadi       = "veritabanı adı";
	$kullaniciAdi = "root";
	$parola       = "parolan";

	try {
	     $baglan = new PDO("mysql:host={$sunucu};dbname={$vtAadi};charset=utf8", $kullaniciAdi, $parola);
	} catch ( PDOException $e ){
	     die($e->getMessage());
	}	
}

// Makale başlığını adres çubuğuna SEO uyumlu yazdırmak;
// Aralarına - koyarak yazdırma;
function seo($text)
{
$find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
$replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
$text = strtolower(str_replace($find, $replace, $text));
$text = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $text);
$text = trim(preg_replace('/\s+/', ' ', $text));
$text = str_replace(' ', '-', $text);
return $text;
}

// Kullanımı
// echo seo("Bu yazıdaki tüm türkçe karakterler düzeltilecektir.");
// Çıktı: bu-yazidaki-tum-turkce-karakterler-duzeltilecektir