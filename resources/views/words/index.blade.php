@extends('layouts.app')

@section('content')
    <h1>Üretilen Kelimeler</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Sıra Numarası</th>
            <th>Kelime</th>
            <th>Harf Adetleri</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($words as $word)
            <tr>
                <td>{{ $word->id }}</td>
                <td>{{ $word->word }}</td>
                <td>{{ $word->getLetterCounts() }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $words->links('pagination::bootstrap-4') }}
@endsection
