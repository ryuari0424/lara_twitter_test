@extends('layouts.base')

@section('header')
    <x-navbar :user="$user"/>
@endsection

@section('content')
    @if (session('success'))
        <div class="p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800" role="alert">
            <span class="font-medium">{{ session('success') }}</span>
        </div>
    @endif

    <div class="flex items-center space-x-4">
        @if($user->image == null)
        <div class="flex-shrink-0">
            <img class="w-12 h-12 rounded-full" src="{{ asset('storage/img/noimage.png') }}" alt="image">
        </div>
        @else
        <div class="flex-shrink-0">
            <img class="w-12 h-12 rounded-full" src="{{ Storage::url($user->image) }}" alt=" image">
        </div>
        @endif
        <div class="flex-1 min-w-0">
            <p class="text-sm font-bold text-gray-900 truncate dark:text-white">
                {{ $user->nickname }}
            </p>
        </div>
    </div>


    <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 xl:grid-cols-3 gap-5">
        <!--Card 1-->
        <div class=" w-full lg:max-w-full lg:flex">
            {{-- <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                style="background-image: url('/mountain.jpg')" title="Mountain">
            </div> --}}
            <div
                class="border border-gray-400 rounded-xl lg:border lg:border-gray-400 bg-white rounded-xl p-4 flex flex-col justify-between leading-normal">
                <div class="mb-8">
                    <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
                </div>
                <div class="flex items-center">
                    <img class="w-10 h-10 rounded-full mr-4" src="{{ Storage::url($user->image) }}" alt="Avatar of Writer">
                    <div class="text-sm">
                        <p class="text-gray-900 font-bold leading-none">{{ $user->nickname }}</p>
                        <p class="text-gray-600">登校日</p>
                    </div>
                </div>
            </div>
        </div>
        <!--Card 2-->
        {{-- <div class="w-full lg:max-w-full lg:flex">
            <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                style="background-image: url('/river.jpg')" title="River">
            </div>
            <div
                class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                <div class="mb-8">

                    <div class="text-gray-900 font-bold text-xl mb-2">15 Rivers In Norway</div>
                    <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
                </div>
                <div class="flex items-center">
                    <img class="w-10 h-10 rounded-full mr-4" src="/karen.png" alt="Avatar of Writer">
                    <div class="text-sm">
                        <p class="text-gray-900 leading-none">Karen Johnson</p>
                        <p class="text-gray-600">Aug 10</p>
                    </div>
                </div>
            </div>
        </div>
        <!--Card 3-->
        <div class="w-full lg:max-w-full lg:flex">
            <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                style="background-image: url('/forest.jpg')" title="Forest">
            </div>
            <div
                class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                <div class="mb-8">
                    <p class="text-sm text-gray-600 flex items-center">
                        <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <path
                                d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                        </svg>
                        Members only
                    </p>
                    <div class="text-gray-900 font-bold text-xl mb-2">5 National Forests across the U.S.</div>
                    <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
                </div>
                <div class="flex items-center">
                    <img class="w-10 h-10 rounded-full mr-4" src="/rafael.png" alt="Avatar of Writer">
                    <div class="text-sm">
                        <p class="text-gray-900 leading-none">Rafael Martin</p>
                        <p class="text-gray-600">Aug 9</p>
                    </div>
                </div> --}}
        {{-- </div>
        </div> --}}
    {{-- </div> --}}
    </div>
@endsection
