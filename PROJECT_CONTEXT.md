# Proje Yönetim Sistemi

## Proje Özeti

Bu proje, bir inşaat firmasının proje yönetimi ihtiyaçlarını karşılamak üzere geliştirilmiş bir web uygulamasıdır. Sistem, müteahhitlerin, projelerin, paydaşların ve satış aktivitelerinin takibini ve yönetimini kolaylaştırmayı amaçlamaktadır.

### Hedefler

*   **Merkezi Veri Yönetimi:** Tüm proje bilgilerini tek bir platformda toplayarak veri tutarlılığını ve erişilebilirliği artırmak.
*   **Verimli Süreçler:** Proje ekleme, güncelleme, silme gibi işlemleri hızlandırmak ve kolaylaştırmak.
*   **Raporlama ve Analiz:** Proje durumu, satış performansı gibi konularda anlık ve doğru raporlar sunmak.
*   **Kullanıcı Dostu Arayüz:** Sistemin tüm kullanıcılar tarafından kolayca anlaşılır ve kullanılır olmasını sağlamak.

## Uygulanan Özellikler

*   **Modüller:**
    *   **Müteahhitler:** Müteahhit bilgilerinin (isim, iletişim bilgileri vb.) kaydedilmesi, güncellenmesi ve listelenmesi.
    *   **Projeler:** Proje bilgilerinin (proje adı, müteahhit, konut sayısı, tarihler vb.) yönetimi.
    *   **Paydaşlar:** Projelerle ilişkili paydaşların (yatırımcı, arsa sahibi vb.) takibi.
    *   **Satış Aktiviteleri:** Satışla ilgili aktivitelerin (müşteri görüşmesi, sözleşme imzalama vb.) kaydedilmesi.
*   **Anasayfa (Dashboard):**
    *   Toplam konut sayısı, toplam müteahhit sayısı ve günlük satış aktiviteleri gibi önemli istatistiklerin gösterildiği bir başlangıç ekranı.
*   **CRUD İşlemleri:** Tüm modüller için standart oluşturma, okuma, güncelleme ve silme (CRUD) işlemleri.
*   **İlişkisel Veri Modeli:** Modüller arasında (örneğin, Projeler ve Müteahhitler) ilişkiler kurularak veri bütünlüğü sağlanmıştır.

## Teknolojiler

*   **Backend:** PHP, Laravel
*   **Frontend:** Blade, HTML, CSS, Bootstrap
*   **Veritabanı:** MySQL (veya projede kullanılan diğer veritabanı)

## Geliştirme Notları

*   Tüm `store` ve `update` işlemleri için veri doğrulama (validation) kuralları eklenmiştir.
*   Rotalarda model binding kullanılarak kod okunabilirliği ve güvenliği artırılmıştır.
*   `create` ve `edit` formlarında, ilişkili verileri (örneğin, bir projeye müteahhit atamak) seçmek için dropdown menüler kullanılmıştır.