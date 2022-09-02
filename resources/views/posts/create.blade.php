<x-layouts.app
    title="Crear nuevo post"
    meta-description="Formulario para crear un nuevo post en el blog">
    <h1> Crear new Post</h1>

    <form method="post" action="{{ route('posts.store') }}">
        @csrf

        @include('posts.form-fiels')

        <button type="submit">Enviar</button>
    </form>

    <a href="{{ route('posts.index') }}"> Regresar</a>

</x-layouts.app>
