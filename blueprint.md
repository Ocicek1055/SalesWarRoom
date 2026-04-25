# Sales War Room - Proje Blueprint'i

## 1. Projeye Genel Bakış

Bu proje, 3.000 müteahhit ve 1.3 milyon konutluk büyük ölçekli bir "Sales War Room" operasyonunu yönetmek için geliştirilmiş bir Laravel uygulamasıdır. Uygulamanın temel amacı, müteahhitler, projeler, paydaşlar ve satış aktiviteleri arasındaki ilişkileri yönetmek, takip etmek ve raporlamaktır.

## 2. Uygulanan Özellikler ve Tasarım

*Bu bölüm, proje geliştikçe tamamlanan tüm stil, tasarım ve özelliklerin bir kaydını tutacaktır.*

- **Proje Kurulumu:** Temel Laravel projesi oluşturuldu.

## 3. Mevcut Görev: Proje Altyapısının Kurulumu

Bu ilk aşamada, uygulamanın temel veritabanı yapısı ve mimari iskeleti oluşturulacaktır.

### Plan ve Adımlar

1.  **Veritabanı Şemasını Oluştur:**
    *   [X] `create_contractors_table` migration oluştur.
    *   [X] `create_projects_table` migration oluştur (contractors tablosuna referans içerecek).
    *   [X] `create_stakeholders_table` migration oluştur.
    *   [X] `create_sales_activities_table` migration oluştur (projects tablosuna referans içerecek).
    *   [X] `create_project_stakeholder_table` pivot tablosu için migration oluştur (projects ve stakeholders arasındaki çoklu ilişki için).

2.  **Eloquent Modellerini Oluştur:**
    *   [ ] `Contractor` modeli oluştur.
    *   [ ] `Project` modeli oluştur.
    *   [ ] `Stakeholder` modeli oluştur.
    *   [ ] `SalesActivity` modeli oluştur.

3.  **Resource Controller'larını Oluştur:**
    *   [ ] `ContractorController` oluştur.
    *   [ ] `ProjectController` oluştur.
    *   [ ] `StakeholderController` oluştur.
    *   [ ] `SalesActivityController` oluştur.

4.  **Proje Dokümantasyonunu Oluştur:**
    *   [ ] `PROJECT_CONTEXT.md` dosyasını oluşturarak projenin genel mantığını ve veritabanı şemasını belgele.
