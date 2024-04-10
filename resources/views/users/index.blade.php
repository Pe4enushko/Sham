@extends('layouts.main')
@section('content')

<table border="1px solid black">
    <th>login</th>
    <th>password</th>
    <th>image</th>
@foreach($data as $dat)
    <tr>
        <td>{{ $dat->login }}</td>
        <td>{{ $dat->password }}</td>
        <td>{{ $dat->image }}</td>
    </tr>
@endforeach
</table>

@endsection