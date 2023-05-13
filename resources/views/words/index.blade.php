@extends('layouts.app')
@section('content')
    <h1>Üretilen Kelimeler</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th style="width: 10%;">Sıra Numarası</th>
                <th style="width: 40%;">Kelime</th>
                <th style="width: 50%;">Harf Adetleri</th>
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
    </div>

    <div class="pagination justify-content-center">
        {{ $words->links('pagination::bootstrap-4') }}
    </div>
@endsection
