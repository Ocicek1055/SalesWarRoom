# SalesWarRoom Projesi Mimarisi (Blueprint)

## 1. Projeye Genel Bakış

**SalesWarRoom**, Laravel çerçevesi kullanılarak geliştirilmiş bir full-stack web uygulamasıdır. Projenin temel amacı, satış ve proje yönetimi süreçlerini merkezileştiren bir platform oluşturmaktır. Bu belge, uygulamanın teknik mimarisini, tasarım kararlarını ve geliştirme sürecinde atılan adımları detaylandırmaktadır.

## 2. Uygulanan Tasarım, Stil ve Özellikler

Bu başlangıç aşamasında, projenin temel altyapısının kurulması ve uygulamanın **Railway** platformunda başarılı bir şekilde dağıtılması üzerine odaklanılmıştır. Bu süreç, projenin gelecekteki gelişimi için sağlam bir temel oluşturmuştur.

### 2.1. Teknik Altyapı ve Dağıtım

*   **Framework:** Laravel (PHP)
*   **Veritabanı:** MySQL
*   **Hosting Platformu:** Railway
*   **Dağıtım Stratejisi:** `git push` ile otomatik dağıtım.

### 2.2. Karşılaşılan Zorluk ve Çözüm Süreci

Projenin ilk dağıtım sürecinde, platforma özgü ve belgelenmemiş, kritik bir veritabanı bağlantı sorunuyla karşılaşılmıştır. Günler süren hata ayıklama sürecinin ardından sorunun temel nedenleri tespit edilmiş ve çözüme kavuşturulmuştur:

1.  **Sorun:** Railway platformu, standart `127.0.0.1` veya `localhost` yerine, sadece kendi iç ağından erişilebilen özel bir veritabanı sunucu adı (`mysql.railway.internal`) kullanmaktadır. Ayrıca, dağıtım sırasında ortam değişkenleri (`.env` dosyası) olması gerektiği gibi yüklenmiyordu ve uygulama sürekli olarak eski, önbelleğe alınmış yapılandırma dosyalarını kullanıyordu.
2.  **Çözüm:**
    *   Veritabanı sunucu adresi olarak `mysql.railway.internal` kullanıldı.
    *   Dağıtım komutu (`railway.json` içinde), `php artisan config:clear` komutunu içerecek şekilde güncellendi. Bu, her dağıtımda Laravel'in en güncel ortam değişkenlerini ve yapılandırma dosyalarını okumasını zorunlu kıldı.
    *   Hassas veritabanı bilgileri (şifre, sunucu adı vb.) güvenlik amacıyla koddan çıkarılarak tamamen Railway'in "Variables" bölümüne taşındı.

## 3. Güncel Plan ve Adımlar (Tamamlandı)

Aşağıdaki plan, veritabanı bağlantı sorununu çözmek ve uygulamayı hem çalışır hem de güvenli bir hale getirmek için uygulanmış ve başarıyla tamamlanmıştır.

*   **Adım 1: Teşhis:** Sorunun, yanlış veritabanı sunucu adı ve platformun ortam değişkenlerini doğru yükleyememesinden kaynaklandığı kesin olarak teşhis edildi.
*   **Adım 2: Güvenli Yapılandırmaya Dönüş:** `config/database.php` dosyası, hassas bilgileri sabit olarak içermek yerine, `env()` yardımcı fonksiyonları aracılığıyla ortam değişkenlerinden okuyacak şekilde yeniden düzenlendi.
*   **Adım 3: Dağıtım Komutunu İyileştirme:** `railway.json` dosyası, dağıtım başlangıcında yapılandırma önbelleğini temizlemek (`php artisan config:clear`) ve veritabanı geçişlerini zorlamak (`php artisan migrate --force`) için güncellendi.
*   **Adım 4: Ortam Değişkenlerini Ayarlama:** Kullanıcıya, Railway arayüzünde doğru `DB_HOST`, `DB_PASSWORD` ve diğer gerekli veritabanı değişkenlerini ayarlaması talimatı verildi.
*   **Adım 5: Son Dağıtım:** Güvenli ve stabil hale getirilen son kod, `git push` ile Railway'e gönderildi ve **başarılı bir dağıtım** gerçekleştirildi.
