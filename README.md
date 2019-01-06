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

# MODEL

### 1-> Daha sonra "portal.kouosl/forum/forum" adresinden modüle erişildiğinde ise kullancıya sunulan (frontend ile) ekleme ekranı şöyledir;

![forumforum](https://user-images.githubusercontent.com/46402809/50738666-c7e06400-11e7-11e9-84c8-dd2121796349.PNG)

### ** Kayıt ekleme yapılırsa oluşan görüntü ise şöyle olur;

![kayitekle](https://user-images.githubusercontent.com/46402809/50738677-fd854d00-11e7-11e9-833c-e55e3422b910.PNG)


### 3-> Model Generator ve CRUD Generator işlemleri yapıldıktan sonra elde edilen php dosyalarının (create,read,update,delete fonksiyonlarının içerisinde olduğu) içeriği ise şöyledir;

### **Create.php dosya içeriği;

![create](https://user-images.githubusercontent.com/46402809/50741244-6c27d200-120b-11e9-836e-a32d125918aa.PNG)

### **Index.php dosya içeriği;

![index](https://user-images.githubusercontent.com/46402809/50741254-8b266400-120b-11e9-8252-2b6a05b5ba4f.PNG)

### **Update.php dosya içeriği;

![update](https://user-images.githubusercontent.com/46402809/50741257-a2655180-120b-11e9-9297-6567d261600f.PNG)


### Not:
Yukarıda belirtilen model kısımlarının haricinde birçok kod parçası ve değişiklik mevcuttur. Bunlara daha detaylı ulaşım sağlamak için portal klasörünün içerisinde bulunan gerekli dosyaları açarak gerekli incelemeler yapılabilir.
