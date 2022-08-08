<x-layouts.app
    title="Crear nuevo post"
    meta-description="Formulario para crear un nuevo post en el blog">
    <h1> Crear new Post</h1>


    <form method="post" action="{{ route('posts.store') }}">
        @csrf

        <label>
            Title
            <br/>
            <input name="title" type="text" value="{{ old('title') }}">
            <br/>
            @error('title')
                <small >
                    <strong>
                        {{ $message }}
                    </strong>
                </small>
            <br/>
            @enderror
        </label>

        <label>
            Body
            <br/>
            <textarea name="body" id="" cols="21" rows="5" >
                {{old('body')}}
            </textarea>
            <br/>
            @error('body')
                <small >
                    <strong>
                        {{ $message }}
                    </strong>
                </small>
            <br/>
            @enderror
        </label>
        <button type="submit">Enviar</button>
    </form>
</x-layouts.app>
