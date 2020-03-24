@extends('index')

@section('content')
    @foreach($codes as $code)
        <div class="col-lg-12 grid-margin stretch-card average-price-card">
            @include('partials.cards.code')
        </div>
    @endforeach
@endsection
