@extends('layouts.base')
@section('header')
    <x-navbar />
@endsection

@section('content')
    <section class="card-login-form bg-gray-200">
        <div class="bg-gray-200 relative items-center w-full px-5 py-12 mx-auto md:px-12 lg:px-24 max-w-7xl">
            <div class="grid grid-cols-1">
                <div class="w-full max-w-lg mx-auto my-4 bg-white shadow-xl rounded-xl">
                    <div class="p-6 lg:text-center bg-white">
                        <h4 class="mt-8 text-2xl font-semibold leading-none tracking-tighter text-neutral-600 lg:text-3xl">
                            Twitterもどき</h4>
                        <h5 class="mt-8 text-xl font-semibold leading-none tracking-tighter text-neutral-600 lg:text-3xl">
                            アカウント編集</h4>

                            @if ($errors->any())
                                <div class="text-red-600">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="mt-6">
                                <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
                                    <div class="px-4 py-8 sm:px-10">
                                        <form class="space-y-6" action="{{ route('user_update', ['user' => $user->id]) }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div>
                                                <label for="email"
                                                    class="font-semibold leading-none tracking-tighter text-neutral-600 ">名前</label>
                                                <div class="mt-1">
                                                    <input value="{{ $user->name }}" id="name" name="name"
                                                        type="text" autocomplete="name" required
                                                        class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-100 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                                </div>
                                            </div>
                                            <div>
                                                <label for="nickname"
                                                    class="font-semibold leading-none tracking-tighter text-neutral-600 ">ニックネーム</label>
                                                <div class="mt-1">
                                                    <input value="{{ $user->nickname }}" id="nickname" name="nickname"
                                                        type="text" required
                                                        class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-100 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                                </div>
                                            </div>
                                            <div>
                                                <label for="email"
                                                    class="font-semibold leading-none tracking-tighter text-neutral-600 ">
                                                    Email address </label>
                                                <div class="mt-1">
                                                    <input value="{{ $user->email }}" id="email" name="email"
                                                        type="email" autocomplete="email" required
                                                        class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-100 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                                </div>
                                            </div>

                                            <div>
                                                <label for="email"
                                                    class="font-semibold leading-none tracking-tighter text-neutral-600 ">
                                                    プロフィール画像 </label>
                                                <div class="mt-1">
                                                    <input value="" id="profile_image" name="image" type="file"
                                                        class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-100 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                                </div>
                                            </div>

                                            <div>
                                                <button type="submit"
                                                    class="flex items-center justify-center w-full px-10 py-4 text-base font-medium text-center text-white transition duration-500 ease-in-out transform bg-blue-600 rounded-xl hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">更新</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
    </section>

    <div>
        useredit
        {{ $user->name }}
        {{ $user->nickname }}
        {{ $user->id }}
        {{ $user->image }}
        <img class="w-12 h-12 rounded-full" src="{{ Storage::url($user->image) }}" width="25%">

    </div>
@endsection
