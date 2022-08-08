<x-layouts.app
    title="Blog"
    meta-description="Blog meta description">

    <h1>Blog</h1>
    <h3>
        <a href="{{ route('posts.create') }}" style="color: deepskyblue">
            Crear nuevo post
        </a>
    </h3>
    @foreach ( $posts as $post)
        <h2>
            <a href="{{ route('posts.show',$post) }}">
                {{ $post->title }}
            </a>
        </h2>
        @endforeach

        </x-layout>
