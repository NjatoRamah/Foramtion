@extends('user.layout.master')
@section('title')
    NJR FORMATION
@endsection
@section('contenues')
    <div class='hero'>
        <div class='left-hero'>
            <div class="suba-header">
                <div class="suba-header">
                    @include('user/page/banner/main-banner')
                </div>
                <div class="figures">
                    @include('user/page/service/personnel')
                </div>
            </div>
        </div>
        <div class='right-hero'>
            @include('user/page/banner/right')
        </div>
    </div>
    @include('user.page.service.article')
    @include('user.page.service.formation')
    @include('user.page.service.annonce')
    @include('user.page.service.archives')
    @if (Session::has('client'))
        @include('user.page.contact.contact')
    @endif
    @include('user.layout.footer')
@endsection