@extends('layouts.app')

@section('title', 'Sales War Room - DAF Enerji Yönetimi')

@section('content')
<div class="w-full min-h-screen bg-gray-100 text-gray-800">

    <!-- Header -->
    <header class="bg-white shadow-md">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}">
                        <img class="h-12 w-auto" src="{{ asset('images/logo.png') }}" alt="DAF Enerji Yönetimi">
                    </a>
                </div>
                <nav class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="{{ route('home') }}" class="bg-daf-blue text-white px-3 py-2 rounded-md text-sm font-medium">Anasayfa</a>
                        <a href="{{ route('contractors.index') }}" class="text-gray-600 hover:bg-gray-200 hover:text-daf-blue px-3 py-2 rounded-md text-sm font-medium">Müteahhitler</a>
                        <a href="{{ route('projects.index') }}" class="text-gray-600 hover:bg-gray-200 hover:text-daf-blue px-3 py-2 rounded-md text-sm font-medium">Projeler</a>
                        <a href="{{ route('stakeholders.index') }}" class="text-gray-600 hover:bg-gray-200 hover:text-daf-blue px-3 py-2 rounded-md text-sm font-medium">Paydaşlar</a>
                        <a href="{{ route('sales-activities.index') }}" class="text-gray-600 hover:bg-gray-200 hover:text-daf-blue px-3 py-2 rounded-md text-sm font-medium">Satış Aktiviteleri</a>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <main class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">

        <!-- Target Panel -->
        <div class="w-full p-8 mb-8 text-center bg-daf-green rounded-2xl shadow-2xl">
            <h2 class="text-5xl md:text-6xl font-extrabold tracking-tight text-white">HEDEF: 1.3 MİLYON KONUT</h2>
        </div>

        <!-- Progress Bar -->
        <div class="mb-10">
            @php
                $target = 1300000;
                $progress = ($totalResidences / $target) * 100;
            @endphp
            <div class="flex justify-between mb-1 text-lg font-medium text-gray-700">
                <span>Mevcut Durum</span>
                <span>{{ number_format($totalResidences) }} / {{ number_format($target) }}</span>
            </div>
            <div class="w-full bg-gray-300 rounded-full h-6">
                <div class="bg-daf-blue h-6 rounded-full text-center text-white font-bold" style="width: {{ $progress }}%">
                    {{ number_format($progress, 2) }}%
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Total Contractors Card -->
            <div class="bg-white rounded-xl shadow-lg p-6 flex items-center space-x-6 relative overflow-hidden">
                <div class="p-4 bg-daf-blue rounded-full">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                </div>
                <div>
                    <p class="text-gray-500 text-sm">Toplam Müteahhit</p>
                    <p class="text-3xl font-bold text-daf-blue">{{ $totalContractors }}</p>
                </div>
            </div>

            <!-- Active Projects Card -->
            <div class="bg-white rounded-xl shadow-lg p-6 flex items-center space-x-6 relative overflow-hidden">
                <div class="p-4 bg-daf-green rounded-full">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                </div>
                <div>
                    <p class="text-gray-500 text-sm">Aktif Projeler</p>
                    <p class="text-3xl font-bold text-daf-green">{{ $activeProjects }}</p>
                </div>
            </div>

            <!-- Today's Meetings Card -->
            <div class="bg-white rounded-xl shadow-lg p-6 flex items-center space-x-6 relative overflow-hidden">
                <div class="p-4 bg-daf-blue rounded-full">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </div>
                <div>
                    <p class="text-gray-500 text-sm">Bugünkü Görüşmeler</p>
                    <p class="text-3xl font-bold text-daf-blue">{{ $todaySalesActivities }}</p>
                </div>
            </div>
        </div>

    </main>
</div>
@endsection
