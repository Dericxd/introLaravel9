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
        <div style="direction: flex; align-items: baseline">
            <h2>
                <a href="{{ route('posts.show',$post) }}">
                    {{ $post->title }}
                </a>
                <small >
                    <strong>
                        <a href="{{ route('posts.edit',$post) }}" style="color: cyan"> Editar </a>
                    </strong>
                </small>
                <form action="{{ route('posts.destroy', $post) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit"> Delete</button>
                </form>
            </h2>
        </div>
    @endforeach

</x-layout>
