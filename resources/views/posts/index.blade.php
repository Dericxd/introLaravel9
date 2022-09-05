<x-layouts.app
    title="Blog"
    meta-description="Blog meta description">

    <header class="px-6 py-4 space-y-2 text-center">

        <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">
            Blog
        </h1>
        @auth
            <a class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium
                text-sky-900 focus:outline-none bg-white rounded-lg
                border border-sky-200 hover:bg-sky-100 hover:text-sky-700 focus:z-10
                focus:ring-4 focus:shadow-sky dark:focus:ring-sky-700
                dark:bg-sky-800 dark:text-white dark:border-sky-600 dark:hover:text-white dark:hover:bg-sky-700"
               href="{{ route('posts.create') }}">
                Crear nuevo post
            </a>
        @endauth

    </header>


    <main class="grid w-full gap-4 px-4 max-w-7xl sm:grid-cols-2 md:grid-cols-3">
        @foreach ( $posts as $post)
            <div class="max-w-3xl px-4 py-2 space-y-4 bg-white rounded shadow dark:bg-slate-700">
                <h2 class="text-xl text-slate-600 dark:text-slate-600 dark:text-slate-300 hover:underline">
                    <a href="{{ route('posts.show',$post) }}">
                        {{ $post->title }}
                    </a>

                </h2>
                @auth
                    <div class="flex justify-between">
                        <a href="{{ route('posts.edit',$post) }}" class="inline-flex items-center text-xs hover:text-slate-600 text-slate-500 focus:outline-none focus:border-slate-200" >
                            Editar
                        </a>
                        <form action="{{ route('posts.destroy', $post) }}"
                              method="post">
                            @csrf
                            @method('delete')
                            <button class="inline-flex items-center text-xs text-red-600  hover:text-red-600 dark:text-red-500/80 focus:outline-none" type="submit"> Delete</button>
                        </form>
                    </div>
                @endauth
            </div>
        @endforeach
    </main>

</x-layout>
