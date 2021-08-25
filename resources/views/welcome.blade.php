@extends('layouts.resume')
@section('content')


    <div class="hero min-h-screen" style="background-image: url(&quot;https://picsum.photos/id/1005/1600/1400&quot;);">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="text-center hero-content text-neutral-content">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold">
                    Make Resume
                </h1>
                <p class="mb-5">
                    Make Your <span>Cv</span> For Free and always will be free
                </p>
                <a href="{{ route('login') }}" class="btn btn-primary">Get Started</a>
            </div>
        </div>
    </div>

@endsection
