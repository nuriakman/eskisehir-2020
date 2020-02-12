<?php
  include('inc/fonksiyonlar.php'); 
  // baglan();  
  define('kontrol', true);
  $sayfa = $_GET['sayfa'];

  include('inc/inc.header.php');

  if (!isset($sayfa) OR $sayfa == 'anasayfa') {
    include 'inc/inc.carousel.php'; 
  }
  

  switch ($sayfa) {
    case 'anasayfa':
      include 'anasayfa.php';
      break;

    case 'hakkimizda':
      include 'hakkimizda.php';
      break;

    case 'hizmetler':
      include 'hizmetler.php';
      break;

    case 'iletisim':
      include 'iletisim.php';
      break;

    case '1-kolon-sayfa':
      include '1-kolon-sayfa.php';
      break;

    case '2-kolon-sayfa':
      include '2-kolon-sayfa.php';
      break;

    case '3-kolon-sayfa':
      include '3-kolon-sayfa.php';
      break;

    case '4-kolon-sayfa':
      include '4-kolon-sayfa.php';
      break;

    case 'tek-sayfa':
      include 'tek-sayfa.php';
      break;

    case '1.-blog-anasayfa':
      include '1.-blog-anasayfa.php';
      break;

    case '2.-blog-anasayfa':
      include '2.-blog-anasayfa.php';
      break;

    case 'ilet-sayfasi':
      include 'ilet-sayfasi.php';
      break;

    case 'genis-sayfa':
      include 'genis-sayfa.php';
      break;

    case 'kenar-cubugu':
      include 'kenar-cubugu.php';
      break;

    case 'sik-sorulan-sorular':
      include 'sik-sorulan-sorular.php';
      break;

    case '404':
      include '404.php';
      break;

    case 'fiyatlandirma-tablosu':
      include 'fiyatlandirma-tablosu.php';
      break;
    
    default:
      include 'anasayfa.php';
      break;
  }

  include('inc/inc.footer.php'); 