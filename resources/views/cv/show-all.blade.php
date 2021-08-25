@extends('layouts.resume')
@section('content')
    <div class="overflow-x-auto pt-20">
        <table class="table w-full">
            <thead>
                <tr>
                    <th>#</th>
                    <th>name</th>
                    <th>job</th>
                    <th>description</th>
                    <th>work</th>
                    <th>Settings</th>
                </tr>
            </thead>
            <tbody>
            @foreach($resumes as $resume)
                <tr>
                    <th>{{ $resume->id }}</th>
                    <td>{{ $resume->name }}</td>
                    <td>{{ $resume->job }}</td>
                    <td>{{ $resume->description }}</td>
                    <td>{{ $resume->work }}</td>
                    <td>
                        <a href="{{ url('/cv/show-my-cv/'. $resume->id) }}" class="btn btn-primary">View</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
