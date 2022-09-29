@extends('layouts.base')

@section('header')
    <x-navbar :user="$user" />
@endsection

@section('content')
    @if (session('success'))
        <div class="p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800" role="alert">
            <span class="font-medium">{{ session('success') }}</span>
        </div>
    @endif

    {{-- <div class="flex items-center space-x-4">
        @if ($user->image == null)
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
    </div> --}}
    {{ $tweets->links('vendor.pagination.simple-tailwind') }}
    <div>
        @foreach ($tweets as $tweet)
            <div class="grid grid-cols-5 items-center bg-green-400">
                <div></div>
                <div class="p-10 col-span-3 bg-red-400 items-center justify-center lg:max-w-full">
                    <div
                        class="border border-gray-400 rounded-xl lg:border lg:border-gray-400 bg-blue-400 rounded-xl p-4 flex flex-col justify-between leading-normal">
                        <div class="mb-8">
                            <p class="whitespace-pre-line text-gray-700 text-base ">{{ $tweet->text }}</p>
                        </div>
                        <div class="flex items-center">
                            <img class="w-10 h-10 rounded-full mr-4" src="{{ Storage::url($tweet->user->image) }}"
                                alt="Avatar of Writer">
                            <div class="text-sm">
                                <p class="text-gray-900 font-bold leading-none">{{ $tweet->user->nickname }}</p>
                                <p class="text-gray-600">{{ $tweet->created_at }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div></div>
    </div>
    <div class="">
    </div>
@endsection
