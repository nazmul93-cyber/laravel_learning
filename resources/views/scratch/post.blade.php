<x-layout>
        <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
            <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
                <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                    <img src="/images/illustration-1.png" alt="" class="rounded-xl">

                    <p class="mt-4 block text-gray-400 text-xs">
                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                    </p>

                    <div class="flex items-center lg:justify-center text-sm mt-4">
                        <img src="/images/lary-avatar.svg" alt="Lary avatar">
                        <div class="ml-3 text-left">
                            <h5 class="font-bold">{{ $post->author->name }}</h5>
                        </div>
                    </div>
                </div>

                <div class="col-span-8">
                    <div class="hidden lg:flex justify-between mb-6">
                        <a href="/"
                           class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                            <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                                <g fill="none" fill-rule="evenodd">
                                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                    </path>
                                    <path class="fill-current"
                                          d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                    </path>
                                </g>
                            </svg>

                            Back to Posts
                        </a>

                        <div class="space-x-2">
                           <x-category-button :category="$post->category"/>
                        </div>
                    </div>

                    <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                        {{ $post->title }}
                    </h1>

                    <div class="space-y-4 lg:text-lg leading-loose">
                       {{ $post->body }}
                    </div>
                </div>
            </article>
        </main>




























    // working fine
{{--        <article>--}}
{{--            <h1>--}}
{{--                {{  $post->title    }}--}}

{{--            </h1>--}}

{{--            <p>--}}
{{--                By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>                         with this created a new n+1 issue--}}
{{--            </p>--}}

{{--            <div>--}}
{{--                {!! $post->body !!}--}}
{{--                for safety purpose laravel blade doesn't load html, but if user is admin of a content then use this syntax to load html--}}
{{--            </div>--}}


{{--                    {{  $post }}--}}
{{--            <!--        --><?php //echo($post) ?>--}}
{{--                    <?= $post?>         short code for echo--}}
{{--        </article>--}}

</x-layout>


























{{--1st method functioning--}}
{{--@extends('scratch.components.layout')--}}
{{--@section('content')--}}
{{--    <article>--}}
{{--        <h1>--}}
{{--            {{  $post->title    }}--}}

{{--        </h1>--}}

{{--        <p>--}}
{{--            By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>         --}}{{--                with this created a new n+1 issue--}}
{{--        </p>--}}

{{--        <div>--}}
{{--            {!! $post->body !!}     --}}{{--            for safety purpose laravel blade doesn't load html, but if user is admin of a content then use this syntax to load html--}}
{{--        </div>--}}


{{--        --}}{{--        {{  $post }}--}}
{{--        --}}{{--<!--        --><?php //echo($post) ?>--}}
{{--        --}}{{--        <?= $post?> --}}{{----}}{{--        short code for echo--}}
{{--    </article>--}}
{{--    <a href="/">Go back</a>--}}
{{--@endsection--}}