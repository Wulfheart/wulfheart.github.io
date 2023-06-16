@extends('_layouts.main')

@section('body')

    <h1>
        Hey, I'm Alex 👋
    </h1>
    <p>
        I like to develop stuff. Below you can find my thoughts.
    </p>
    <h2>Socials</h2>
    <ul>
        <li><a href="https://twitter.com/alexfwulf">Twitter</a></li>
        <li><a href="https://github.com/Wulfheart">Github</a></li>
    </ul>

    @if ($posts->count() > 0)
        <h2>
            Posts
        </h2>
        <ul>
            @foreach ($posts as $post)
                <li class="w-full mb-6">
                    <a href="{{ $post->getUrl() }}" title="Read {{ $post->title }}">
                        {{ $post->getDate()->format('Y-m-d') }} {{ $post->title }}
                    </a>

                    </div>
            @endforeach
    @endif

    </ul>

@stop
