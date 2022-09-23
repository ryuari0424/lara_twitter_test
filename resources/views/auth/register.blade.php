{{-- <x-guest-layout>
    <x-auth-card>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />

                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}

@extends('layouts.base')

@section('header')
    <x-navbar/>
@endsection

@section('content')

<section class="card-login-form bg-gray-200">
    <div class="bg-gray-200 relative items-center w-full px-5 py-12 mx-auto md:px-12 lg:px-24 max-w-7xl">
        <div class="grid grid-cols-1">
            <div class="w-full max-w-lg mx-auto my-4 bg-white shadow-xl rounded-xl">
                <div class="p-6 lg:text-center bg-white">
                    <h2 class="mt-8 text-2xl font-semibold leading-none tracking-tighter text-neutral-600 lg:text-3xl">
                        Twitterもどき</h4>
                        <h5
                            class="mt-8 text-xl font-semibold leading-none tracking-tighter text-neutral-600 lg:text-3xl">
                            アカウント登録</h4>

                            <div class="mt-6">
                                <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
                                    <div class="px-4 py-8 sm:px-10">
                                        <form class="space-y-6" action="{{ route('register') }}" method="POST">
                                            @csrf
                                            <div>
                                                <label for="email"
                                                    class="font-semibold leading-none tracking-tighter text-neutral-600 ">名前</label>
                                                <div class="mt-1">
                                                    <input id="name" name="name" type="text"
                                                        autocomplete="name" required=""
                                                        class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-100 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                                </div>
                                            </div>
                                            <div>
                                                <label for="nickname"
                                                    class="font-semibold leading-none tracking-tighter text-neutral-600 ">ニックネーム</label>
                                                <div class="mt-1">
                                                    <input id="nickname" name="nickname" type="text" required=""
                                                        class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-100 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                                </div>
                                            </div>
                                            <div>
                                                <label for="email"
                                                    class="font-semibold leading-none tracking-tighter text-neutral-600 ">
                                                    Email address </label>
                                                <div class="mt-1">
                                                    <input id="email" name="email" type="email"
                                                        autocomplete="email" required=""
                                                        class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-100 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                                </div>
                                            </div>

                                            <div>
                                                <label for="password"
                                                    class="font-semibold leading-none tracking-tighter text-neutral-600">
                                                    Password </label>
                                                <div class="mt-1">
                                                    <input id="password" name="password" type="password"
                                                        autocomplete="current-password" required=""
                                                        class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-100 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                                </div>
                                            </div>
                                            {{-- パスワード確認 --}}
                                            <div>
                                                <label :value="__('Confirm Password')" for="password_confirmation"
                                                    class="font-semibold leading-none tracking-tighter text-neutral-600">
                                                    Confirm Password </label>
                                                <div class="mt-1">
                                                    <input id="password_confirmation" name="password_confirmation" type="password"
                                                        autocomplete="current-password" required
                                                        class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-100 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                                </div>
                                            </div>

                                            <div>
                                                <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                                    href="{{ route('login') }}">
                                                    {{ __('Already registered?') }}
                                                </a>
                                                <button type="submit"
                                                    class="flex items-center justify-center w-full px-10 py-4 text-base font-medium text-center text-white transition duration-500 ease-in-out transform bg-blue-600 rounded-xl hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Sign
                                                    in</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
        </div>
</section>

@endsection