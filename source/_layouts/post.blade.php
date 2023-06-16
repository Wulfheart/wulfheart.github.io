@extends('_layouts.main')

@php
    $page->type = 'article';
@endphp

@section('body')
    <a href="/">Home</a>
    <h1>{{ $page->title }}</h1>

    <p>{{ date('Y-m-d', $page->date) }}</p>

    <div >
        @yield('content')
    </div>

    <nav class="">
        <div>
            @if ($next = $page->getNext())
                <a href="{{ $next->getUrl() }}" title="Older Post: {{ $next->title }}">
                    &LeftArrow; {{ $next->title }}
                </a>
            @endif
        </div>

        <div>
            @if ($previous = $page->getPrevious())
                <a href="{{ $previous->getUrl() }}" title="Newer Post: {{ $previous->title }}">
                    {{ $previous->title }} &RightArrow;
                </a>
            @endif
        </div>
    </nav>
@endsection
