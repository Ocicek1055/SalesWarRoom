# Sales War Room - Proje Blueprint'i

## 1. Projeye Genel Bakış

**Sales War Room**, satış süreçlerini merkezileştirmek, izlemek ve yönetmek için tasarlanmış bir web uygulamasıdır. Bu araç, şirketlerin ve yüklenicilerin projelerini, bu projelerdeki kilit paydaşları ve tüm satış faaliyetlerini tek bir yerden yönetmelerine olanak tanır. Uygulamanın amacı, satış hattı (pipeline) hakkında net bir görünürlük sağlamak ve veri odaklı kararlar alınmasını kolaylaştırmaktır.

## 2. Uygulanan Özellikler ve Tasarım

Bu bölüm, projenin ilk versiyonundan mevcut versiyonuna kadar uygulanan tüm özellikleri, tasarım kararlarını ve teknik altyapıyı belgeler.

### 2.1. Teknik Altyapı

*   **Backend Framework:** Laravel (PHP)
*   **Veritabanı:** MySQL (Railway servisi üzerinden)
*   **Dağıtım Platformu:** Railway
*   **Mimari:** Model-View-Controller (MVC)

### 2.2. Çekirdek Bileşenler

*   **Modeller (Models):** Veri mantığını ve veritabanı etkileşimlerini yöneten Eloquent ORM modelleri.
    *   `Contractor`: Yüklenici firmaların bilgilerini tutar.
    *   `Project`: Takip edilen projeleri ve detaylarını tutar.
    *   `Stakeholder`: Projelerdeki kilit kişileri (paydaşları) tutar.
    *   `SalesActivity`: Satışla ilgili yapılan aktiviteleri (toplantı, telefon, e-posta vb.) kaydeder.
*   **Kontrolcüler (Controllers):** Gelen HTTP isteklerini işleyen ve yanıtları düzenleyen sınıflar. Her model için bir `resource` kontrolcüsü oluşturulmuştur.
*   **Veritabanı Şeması (Migrations):** Veritabanı tablolarının yapısı, `create_*_table.php` dosyaları ile versiyon kontrolü altında tanımlanmıştır.
*   **Yönlendirme (Routing):** Uygulama URL'leri ve ilgili kontrolcü eylemleri `routes/web.php` dosyasında tanımlanmıştır.

### 2.3. Dağıtım ve Sunucu Yapılandırması

*   **`railway.json`:** Dağıtım sürecini otomatize etmek ve kontrol altına almak için özel bir yapılandırma dosyası oluşturulmuştur.
    *   **Build (İnşa) Aşaması:** Her dağıtımdan önce `config:cache`, `route:cache`, ve `view:cache` komutları çalıştırılarak uygulama optimize edilir.
    *   **Deploy (Yayın) Aşaması:** Uygulama `heroku-php-apache2` kullanılarak başlatılır.
*   **Ortam Yapılandırması (`config/app.php`):** Dağıtım sorunlarını teşhis etmek amacıyla uygulama ortamı geçici olarak `'production'` olarak sabitlenmiştir.

## 3. Mevcut Plan: Altyapıyı Stabil Hale Getirme ve Veritabanını Kurma

Bu bölüm, şu anda üzerinde çalıştığımız görevin adımlarını özetlemektedir.

**Ana Hedef:** Uygulamanın Railway üzerinde stabil bir şekilde çalışmasını sağlamak ve başlangıç için gerekli veritabanı tablolarını oluşturmak.

### Aşılan Sorunlar ve Çözümleri:

1.  **SORUN:** Uygulama "crashed" durumuna düşüyordu.
    *   **ÇÖZÜM 1:** `config/database.php` dosyasında yanlış yapılandırılmış bir satır (`'charset' => 'utf8mb4',`) düzeltildi.
    *   **ÇÖZÜM 2:** `env()` yardımcı fonksiyonlarının üretim ortamında beklenmedik davranışlarını elemek için `config/app.php` içinde ortam `'production'` olarak sabitlendi.
    *   **ÇÖZÜM 3 (Nihai Çözüm):** Railway'in dağıtım sürecini varsayılan ayarlarla yönettiği ve bunun projemizle uyumsuz olduğu tespit edildi. Kontrolü ele almak için dağıtım adımlarını (`build` ve `deploy`) açıkça tanımlayan bir `railway.json` dosyası oluşturuldu.

2.  **SORUN:** `php artisan migrate` komutu terminalden çalıştırılamıyordu.
    *   **GEÇİCİ ÇÖZÜM GİRİŞİMİ:** Web arayüzünden migrasyonu tetiklemek için geçici bir rota oluşturma denemeleri, uygulamanın sürekli çökmesi nedeniyle başarısız oldu.

### Mevcut Adım:

*   **Uygulanan Değişiklikleri Dağıtma:** `railway.json` dosyasını ve diğer yapılandırma düzeltmelerini içeren son `commit`'ler Railway'e gönderildi.

### Sonraki Adımlar:

1.  **Dağıtımın Başarısını Doğrulama:** Yeni dağıtımın "crashed" olmadan başarıyla tamamlandığını gözlemle.
2.  **Veritabanı Migrasyonunu Çalıştırma:** Uygulama stabil hale geldiğinde, veritabanı tablolarını oluşturmak için `php artisan migrate` komutunu çalıştırmanın bir yolunu bul. (Bu, muhtemelen Railway'in "one-off command" özelliği veya gerekirse "Truva Atı v3" ile yapılacaktır.)
3.  **Temizlik:** Teşhis için yapılan geçici değişiklikleri (örneğin `config/app.php`'deki sabitleme) geri al.
4.  **Geliştirmeye Devam:** Altyapı stabil hale geldiğinde, uygulamanın arayüzünü ve işlevselliğini geliştirmeye başla.
