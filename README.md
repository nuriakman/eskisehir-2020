# ESKİŞEHİR 2020 TEMASI

Bu tema "Özgür Yazılım Kış Kampı Eskişehir 2020 PHP ve MySQL ile Web Programlamaya Giriş" sınıfının Birlikte Öğrenelim projesi için Modern Business temasının uyarlanmış ve modifiye edilmiş halidir.

Original tema MIT lisanlı olup, bu haliyle isteyen istediği şekilde kullanabilir.Her hangi bir yerinde tema adından ya da bizlerden bahsetmesine gerek yoktur. Yine de Modern Business Tema adından söz ederse iyi olur.

### Temaya kattığımız bazı özellikler;

- Tema parçalanarak php dosyaları ve dizin yapısı düzenlenmiştir,
- Url koruması, sayfa başlarında yer alan "kontrol" değişkeni ve .htaccess dosyası ile güvenilir duruma getirilmiştir,
- Sayfalama url adresleri seo() fonksiyonu ile seo uyumlu hale getirilmiştir,
- Anasayfa'nın tamamı ve hakkımızda sayfasının bir bölümü dışında kalan sayfalar Modern Business teması orjinalliğinde bırakılmıştır.

### Temada yer alan bağlantıların (URL) çalışması için;

##### 000-default.conf dosyası:

Dosyayı açmak için;

```sh 
sudo gedit /etc/apache2/sites-available/000-default.conf
```

#####  Dosya içerisindekileri tamamen silin ve aşağıdaki kodları yapıştırın;

Tabiki sizin kullanıcı adınızı ve proje adresinizi kendinize göre düzenlemeniz gerekmektedir.

```text 
<VirtualHost *:80>
	ServerAdmin kullaniciadiniz@localhost
	DocumentRoot /var/www/html

	<Directory /var/www/html/eskisehir-2020>
		Options Indexes FollowSymLinks
		AllowOverride All
		Require all granted
	</Directory>

	ErrorLog ${APACHE_LOG_DIR}/error_01proje.log
	CustomLog ${APACHE_LOG_DIR}/access_01proje.log combined
</VirtualHost>
```

Kaydedip kapatın ve sunucuyu yeniden başlatın;

```sh 
sudo /etc/init.d/apache2 restart
```


