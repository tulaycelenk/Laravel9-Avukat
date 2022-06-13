@extends('layouts.home')
@section('title',$setting->title)
@section('keywords',$setting->keywords)
@section('description',$setting->description)
@section('slider')
    @include("home.components._carousel")
@endsection
