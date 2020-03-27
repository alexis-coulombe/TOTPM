@extends('index')

@section('content')
    @if(count($codes) > 0)
        @foreach($codes as $code)
            <div class="col-lg-12 grid-margin stretch-card average-price-card">
                @include('partials.cards.code')
            </div>
        @endforeach
    @else
        <div class="row">
            <div class="col-lg-12 text-center pt-5">
                <p><i class="fas fa-hand-holding"></i></p>
                <p>Looks like you dont have anything here yet!</p>
            </div>
        </div>
    @endif

    @include('modals.delete-code')
@endsection
