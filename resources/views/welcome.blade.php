@extends('layouts.app')

@section('title', 'Anasayfa')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Toplam Konut Sayısı</div>
                <div class="card-body">
                    <h5 class="card-title">{{ number_format($totalResidences) }} / 1.300.000</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">Toplam Müteahhit Sayısı</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $totalContractors }}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-info mb-3">
                <div class="card-header">Bugünkü Satış Aktiviteleri</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $todaySalesActivities }}</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Proje Yönetim Sistemine Hoşgeldiniz!</div>

                <div class="card-body">
                    <p>Bu sistem, inşaat projelerinizin müteahhitlerini, projelerini, paydaşlarını ve satış aktivitelerini kolayca yönetmenizi sağlar.</p>
                    <p>Yukarıdaki menüden istediğiniz bölüme ulaşabilirsiniz.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
