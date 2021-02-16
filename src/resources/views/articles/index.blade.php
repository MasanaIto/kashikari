@extends('app')

@section('title', '貸し借りリスト')

@section('content')
    @include('nav')
    <div class="container">
        @foreach($articles as $article)
        <div class="card mt-3">
            <div class="card-body d-flex flex-row">
                <i class="fas fa-user-circle fa-3x mr-1"></i>
                <div>
                    <div class="font-weight-bold">
                        貸した人 {{ $article->lender->nickname }} → 借りた人 {{ $article->borrower->nickname }}
                    </div>
                    <div class="font-weight-lighter">
                        返却期限：{{ $article->deadline }}
                    </div>
                </div>
            </div>
            <div class="card-body pt-0 pb-2">
                <h3 class="h4 card-title">
                    {{ $article->article_name }} | {{ $article->status }}
                </h3>
                <div class="card-text">
                    {{ $article->description }}
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
