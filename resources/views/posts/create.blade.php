<x-layouts.app
    title="Crear nuevo post"
    meta-description="Formulario para crear un nuevo post en el blog">
    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500"> Crear new Post</h1>

    <form method="post"
          class="max-w-xl px-8 py-4 mx-auto bg-white rounded shadow dark:bg-slate-800"
          action="{{ route('posts.store') }}">
        @csrf

        @include('posts.form-fiels')

        <div class="flex items-center justify-between mt-4">
        <a class="text-sm font-semibold underline border-transparent border-2 rounded dark:text-slate-300 text-slate-600 focus:border-sky-500 focus:outline-none" href="{{ route('posts.index') }}"> Regresar</a>
        <button class="py-1 px-3 mr-2 mb-2 text-sm font-medium
            text-sky-900 focus:outline-none bg-white rounded-lg
            border border-sky-200 hover:bg-sky-100 hover:text-sky-700 focus:z-10
            focus:ring-4 focus:shadow-sky dark:focus:ring-sky-700
            dark:bg-sky-800 dark:text-white dark:border-sky-600 dark:hover:text-white dark:hover:bg-sky-700" type="submit">Enviar</button>
        </div>
    </form>


</x-layouts.app>
