@extends('layouts.app')
@section('content')
    <div>
        @foreach ($trains as $item)
            <div class="info">
                <p>{{ $item->company }}</p>
                <p>{{ $item->departure_station }}</p>
                <p>{{ $item->arrival_station }}</p>
                <p>{{ $item->departure_time }}</p>
                <p>{{ $item->arrival_time }}</p>
                <p>{{ $item->code }}</p>
                <p>{{ $item->carriages }}</p>
                <p>{{ $item->is_on_time }}</p>
                <p>{{ $item->is_deleted }}</p>
            </div>
        @endforeach
    </div>
@endsection
