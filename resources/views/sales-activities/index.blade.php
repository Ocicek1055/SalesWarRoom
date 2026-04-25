@extends('layouts.app')

@section('title', 'Satış Aktiviteleri')

@section('content')
<div class="container">
    <h1>Satış Aktiviteleri</h1>
    <a href="{{ route('sales-activities.create') }}" class="btn btn-primary">Yeni Satış Aktivitesi Ekle</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Proje</th>
                <th>Aktivite Tipi</th>
                <th>Tarih</th>
                <th>Notlar</th>
                <th>Aksiyonlar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($salesActivities as $activity)
                <tr>
                    <td>{{ $activity->id }}</td>
                    <td>{{ $activity->project->name }}</td>
                    <td>{{ $activity->activity_type }}</td>
                    <td>{{ $activity->activity_date }}</td>
                    <td>{{ $activity->notes }}</td>
                    <td>
                        <a href="{{ route('sales-activities.show', $activity->id) }}" class="btn btn-info">Detay</a>
                        <a href="{{ route('sales-activities.edit', $activity->id) }}" class="btn btn-warning">Düzenle</a>
                        <form action="{{ route('sales-activities.destroy', $activity->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Sil</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
