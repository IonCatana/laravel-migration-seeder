@extends('layouts.app')
@section('content')
    <div>
        @foreach ($trains as $item)
            <div class="contain">
                <table class="info" style="width: 100%">
                    <tr>
                        <th>Company</th>
                        <th>Departure Station</th>
                        <th>Arrival Station</th>
                        <th>Departure Time</th>
                        <th>Arrival Time</th>
                        <th>Code</th>
                        <th>Carriages</th>
                        <th>Is on Time</th>
                        <th>Is Deleted</th>
                    </tr>
                    <tr>
                        <td>
                            <p class="company">{{ $item->company }}</p>
                        </td>
                        <td>
                            <p>{{ $item->departure_station }}</p>
                        </td>
                        <td>
                            <p>{{ $item->arrival_station }}</p>
                        </td>
                        <td>
                            <p>{{ $item->departure_time }}</p>
                        </td>
                        <td>
                            <p>{{ $item->arrival_time }}</p>
                        </td>
                        <td>
                            <p>{{ $item->code }}</p>
                        </td>
                        <td>
                            <p>{{ $item->carriages }}</p>
                        </td>
                        <td>
                            <p>{{ $item->is_on_time }}</p>
                        </td>
                        <td>
                            <p>{{ $item->is_deleted }}</p>
                        </td>
                    </tr>
                </table>
            </div>
        @endforeach
    </div>
@endsection
