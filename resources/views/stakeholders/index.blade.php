@extends('layouts.app')

@section('title', 'Paydaşlar')

@section('content')
<div class="container">
    <h1>Paydaşlar</h1>
    <a href="{{ route('stakeholders.create') }}" class="btn btn-primary">Yeni Paydaş Ekle</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>İsim</th>
                <th>Proje</th>
                <th>Paydaş Tipi</th>
                <th>İletişim</th>
                <th>Aksiyonlar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stakeholders as $stakeholder)
                <tr>
                    <td>{{ $stakeholder->id }}</td>
                    <td>{{ $stakeholder->name }}</td>
                    <td>{{ $stakeholder->project->name }}</td>
                    <td>{{ $stakeholder->type }}</td>
                    <td>{{ $stakeholder->contact_info }}</td>
                    <td>
                        <a href="{{ route('stakeholders.show', $stakeholder->id) }}" class="btn btn-info">Detay</a>
                        <a href="{{ route('stakeholders.edit', $stakeholder->id) }}" class="btn btn-warning">Düzenle</a>
                        <form action="{{ route('stakeholders.destroy', $stakeholder->id) }}" method="POST" style="display:inline-block;">
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
