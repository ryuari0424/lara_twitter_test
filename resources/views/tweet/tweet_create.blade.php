@extends('layouts.base')

@section('header')
    <x-navbar :user="$user"/>
@endsection

@section('content')
    <x-tweet_card :user="$user"/>
@endsection