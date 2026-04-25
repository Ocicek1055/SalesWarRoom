# Proje Yönetim Sistemi

## Proje Özeti

Bu proje, bir inşaat firmasının proje yönetimi ihtiyaçlarını karşılamak üzere geliştirilmiş bir web uygulamasıdır. Sistem, müteahhitlerin, projelerin, paydaşların ve satış aktivitelerinin takibini ve yönetimini kolaylaştırmayı, "Sales War Room" konseptiyle satış hedeflerine odaklanmayı amaçlamaktadır.

### Hedefler

*   **Merkezi Veri Yönetimi:** Tüm proje bilgilerini tek bir platformda toplayarak veri tutarlılığını ve erişilebilirliği artırmak.
*   **Verimli Süreçler:** Proje ekleme, güncelleme, silme gibi işlemleri hızlandırmak ve kolaylaştırmak.
*   **Raporlama ve Analiz:** Proje durumu, satış performansı gibi konularda anlık ve doğru raporlar sunmak.
*   **Satış Odaklı Arayüz:** "HEDEF: 1.3 MİLYON KONUT" gibi büyük hedefleri ve ilerlemeyi sürekli göz önünde tutan, motive edici bir kullanıcı arayüzü sunmak.

## Uygulanan Özellikler

*   **Modüller:**
    *   **Müteahhitler:** Müteahhit bilgilerinin (isim, iletişim bilgileri vb.) kaydedilmesi, güncellenmesi ve listelenmesi.
    *   **Projeler:** Proje bilgilerinin (proje adı, müteahhit, konut sayısı, tarihler vb.) yönetimi.
    *   **Paydaşlar:** Projelerle ilişkili paydaşların (yatırımcı, arsa sahibi vb.) takibi.
    *   **Satış Aktiviteleri:** Satışla ilgili aktivitelerin (müşteri görüşmesi, sözleşme imzalama vb.) kaydedilmesi.
*   **Anasayfa (Dashboard):**
    *   **Profesyonel Tasarım:** Tailwind CSS kullanılarak modern, karanlık tema üzerine kurulu bir dashboard arayüzü oluşturuldu.
    *   **Ana Hedef Paneli:** Ekranın üst kısmında dikkat çekici, büyük bir fontla "HEDEF: 1.3 MİLYON KONUT" paneli yer alır.
    *   **İlerleme Çubuğu:** Ana hedefe ne kadar yaklaşıldığını gösteren dinamik bir ilerleme çubuğu.
    *   **İstatistik Kartları:** 'Toplam Müteahhit', 'Aktif Projeler' ve 'Bugünkü Görüşmeler' verilerini gösteren 3 adet modern ve ikonlu istatistik kartı.
*   **CRUD İşlemleri:** Tüm modüller için standart oluşturma, okuma, güncelleme ve silme (CRUD) işlemleri.
*   **İlişkisel Veri Modeli:** Modüller arasında (örneğin, Projeler ve Müteahhitler) ilişkiler kurularak veri bütünlüğü sağlanmıştır.

## Teknolojiler

*   **Backend:** PHP, Laravel
*   **Frontend:** Blade, Tailwind CSS, HTML
*   **Veritabanı:** Railway üzerinde MySQL

## Geliştirme Notları

*   `welcome.blade.php` anasayfası, Tailwind CSS ile profesyonel bir dashboard görünümüne kavuşturulmuştur.
*   `HomeController`, anasayfada gösterilecek 'Aktif Projeler' verisini hesaplayacak şekilde güncellenmiştir.
*   `.env` dosyası, Railway üzerindeki MySQL veritabanı ile bağlantı kuracak şekilde özel değişkenlerle optimize edilmiştir.
*   Tüm `store` ve `update` işlemleri için veri doğrulama (validation) kuralları eklenmiştir.
*   Rotalarda model binding kullanılarak kod okunabilirliği ve güvenliği artırılmıştır.
*   `create` ve `edit` formlarında, ilişkili verileri seçmek için dropdown menüler kullanılmıştır.