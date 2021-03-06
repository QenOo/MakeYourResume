@extends('layouts.resume')
@section('content')


    <div class="py-24 bg-white">
        <p class="mt-4 text-sm leading-7 text-gray-500 font-regular text-center">
            SERVICES
        </p>
        <h3 class="text-3xl sm:text-5xl leading-normal font-extrabold tracking-tight text-gray-900 text-center mb-10 sm:mb-16">
            Our<span class="text-indigo-600"> Services</span>
        </h3>
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row justify-between">

            <div class="mx-auto">
                <ul class="md:grid md:grid-cols-3 md:col-gap-10 md:row-gap-10">
                    <li class="group border p-5 py-16 text-center hover:shadow-xl transition duration-500 ease-in-out">
                        <a href="#">
                            <div class="flex flex-col items-center">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center text-indigo-500 group-hover:text-white">
                                        <svg class="h-16 w-16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="mt-6 group-hover:text-white">
                                    <h4 class="text-lg leading-6 font-semibold text-gray-900">Service Name</h4>
                                    <p class="mt-2 text-base leading-6 text-gray-500">
                                        Lorem ipsum, dolor sit amet.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="mt-10 md:mt-0 border p-5 py-16 text-center hover:shadow-xl transition duration-500 ease-in-out">
                        <a href="#">
                            <div class="flex flex-col items-center">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center text-indigo-500">
                                        <svg class="h-16 w-16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="mt-6">
                                    <h4 class="text-lg leading-6 font-semibold text-gray-900">Service Name</h4>
                                    <p class="mt-2 text-base leading-6 text-gray-500">
                                        Lorem ipsum, dolor sit amet.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="mt-10 md:mt-0 border p-5 py-16 text-center hover:shadow-lg">
                        <a href="#">
                            <div class="flex flex-col items-center">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center text-indigo-500">
                                        <svg class="h-16 w-16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <h4 class="text-lg leading-6 font-semibold text-gray-900">Service Name</h4>
                                    <p class="mt-2 text-base leading-6 text-gray-500">
                                        Lorem ipsum, dolor sit amet.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </li>

                </ul>
            </div>

        </div>
    </div>



@endsection
