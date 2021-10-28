@extends('layouts.adminLayout')
@section('title', 'Center')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="block">
                <div class="block-title">
                    <h4>Center List</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Name</th>
                                <th>Per Day Limit</th>
                                <th>Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($centers as $center)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $center->name }}</td>
                                    <td>{{ $center->per_day_limit }}</td>
                                    <td>{{ $center->address }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
