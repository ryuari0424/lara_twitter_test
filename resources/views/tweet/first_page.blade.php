@extends('layouts.base')

@section('header')
    <x-navbar/>
@endsection

@section('content')
    {{-- @if(Tweet::where->tweets->isEmpty())
    <div class="">
        <p>
            TWEETはありませんぜ
        </p>
    </div>
    @endif --}}

    @if(session('success'))
    <div class="p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800" role="alert">
        <span class="font-medium">{{session('success')}}</span>
    </div>
    @endif

    <div class="flex items-center space-x-4">
        <div class="flex-shrink-0">
            <img class="w-12 h-12 rounded-full" src="{{ Storage::url($user->image) }}" alt="Neil image">
        </div>
        <div class="flex-1 min-w-0">
            <p class="text-sm font-bold text-gray-900 truncate dark:text-white">
                {{ $user->nickname }}
            </p>
        </div>
        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
            $320
        </div>
    </div>


@endsection