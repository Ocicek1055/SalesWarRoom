@extends('layouts.app')

@section('title', 'Projeler')

@section('content')
<div class="container">
    <h1>Projeler</h1>
    <a href="{{ route('projects.create') }}" class="btn btn-primary">Yeni Proje Ekle</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Proje Adı</th>
                <th>Müteahhit</th>
                <th>Konut Sayısı</th>
                <th>Başlangıç Tarihi</th>
                <th>Bitiş Tarihi</th>
                <th>Aksiyonlar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->contractor->name }}</td>
                    <td>{{ $project->number_of_residences }}</td>
                    <td>{{ $project->start_date }}</td>
                    <td>{{ $project->end_date }}</td>
                    <td>
                        <a href="{{ route('projects.show', $project->id) }}" class="btn btn-info">Detay</a>
                        <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning">Düzenle</a>
                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display:inline-block;">
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
