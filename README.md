# KURULUM

Forum modülünü kurmuş olduğunuz portal kısmına eklemek için yapılması gereken adımlar;
### 1-> Kurulum yapmış olduğunuz yerdeki "portal" klasörünün içerisinde bulunan "composer.json" dosyasını açınız ve içerisine -repositories- kısmına modülün linkini ekleyiniz.

![link](https://user-images.githubusercontent.com/46402809/50738411-9619ce00-11e4-11e9-9c66-520cbacaf8b9.PNG)

### 2-> Daha sonra oluşturmuş olduğunuz modülünüzü "portal" klasörünün içerisinde bulunan -frontend- , -backend- ve -api- klasörlerinin içerisindeki "main.php" dosyasına ekleyiniz.

![forum](https://user-images.githubusercontent.com/46402809/50738457-2fe17b00-11e5-11e9-8d80-7125e197f507.PNG)


### 3-> Daha sonra "composer.json" dosyasına eklediğimiz eklentiyi aktifleştirmek için komut ekranından önce -vagrant ssh- yapılır ve -cd /var/www/portal- dizininde -sudo composer update komutu uygulanır.

![ekleme](https://user-images.githubusercontent.com/46402809/50738524-01b06b00-11e6-11e9-898a-d91d2b3eb978.PNG)


### 4-> Daha sonra ise veritabanında (phpmyadmin) tablo oluşturmak için migration işlemi yapılmıştı. Bu işlem sonucu oluşan tabloları kendi bilgisayarınızda çalıştırmak için cmd ekranında -vagrant ssh- yaptıktan sonra -cd /var/www/portal- dizininin içerisinde -php yii migrate --migrationPath=@vendor/kouosl/sample/migrations --interactive=0- komutu uygulanarak oluşmuş olan tablolar kullanılır.

![migrate](https://user-images.githubusercontent.com/46402809/50738610-f447b080-11e6-11e9-9169-72f5cdd23b3f.PNG)


### ** Bu aşamadan sonra phpmyadmin sayfası görüntüsü şöyle olur;

![php](https://user-images.githubusercontent.com/46402809/50738637-4dafdf80-11e7-11e9-9324-ca5c9de624aa.PNG)


### 5-> Daha sonra "portal.kouosl/forum/forum" adresinden modüle erişildiğinde ise kullancıya sunulan (frontend ile) ekleme ekranı şöyledir;

![forumforum](https://user-images.githubusercontent.com/46402809/50738666-c7e06400-11e7-11e9-84c8-dd2121796349.PNG)

### ** Kayıt ekleme yapılırsa oluşan görüntü ise şöyle olur;

![kayitekle](https://user-images.githubusercontent.com/46402809/50738677-fd854d00-11e7-11e9-833c-e55e3422b910.PNG)
