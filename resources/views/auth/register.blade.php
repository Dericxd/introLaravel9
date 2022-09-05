<x-layouts.app
    title="Register"
    meta-description="Register meta description">

    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">
        Register
    </h1>

    <form method="post"
          class="max-w-xl px-8 py-4 mx-auto bg-white rounded shadow dark:bg-slate-800"
          action="{{ route('register') }}">
        @csrf

        <div class="space-y-4">

            <label class="flex flex-col">
            <span class="font-serif text-slate-600 dark:text-slate-400">
                Name
            </span>
                <input
                    class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 dark:text-slate-400 dark:placeholder:text-slate-400"
                    autofocus="autofocus"
                    name="name"
                    type="text"
                    value="{{ old('name') }}"
                >
                @error('name')
                <small class="font-bold text-red-500/80">
                    {{ $message }}
                </small>
                @enderror
            </label>

            <label class="flex flex-col">
            <span class="font-serif text-slate-600 dark:text-slate-400">
                Email
            </span>
                <input
                    class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 dark:text-slate-400 dark:placeholder:text-slate-400"
                    name="email"
                    type="email"
                    value="{{ old('email') }}"
                >
                @error('email')
                <small class="font-bold text-red-500/80">
                    {{ $message }}
                </small>
                @enderror
            </label>

            <label class="flex flex-col">
            <span class="font-serif text-slate-600 dark:text-slate-400">
                Password
            </span>
                <input
                    class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 dark:text-slate-400 dark:placeholder:text-slate-400"
                    name="password"
                    type="password"
                >
                @error('password')
                <small class="font-bold text-red-500/80">
                    {{ $message }}
                </small>
                @enderror
            </label>

            <label class="flex flex-col">
            <span class="font-serif text-slate-600 dark:text-slate-400">
                Password Confimation
            </span>
                <input
                    class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 dark:text-slate-400 dark:placeholder:text-slate-400"
                    name="password_confirmation"
                    type="password"
                >
                @error('password_confirmation')
                <small class="font-bold text-red-500/80">
                    {{ $message }}
                </small>
                @enderror
            </label>

        </div>
        <div class="flex items-center justify-between mt-4">
            <a class="text-sm font-semibold underline border-transparent border-2 rounded dark:text-slate-300 text-slate-600 focus:border-sky-500 focus:outline-none"
               href="{{ route('login') }}"> Login</a>
            <button class="py-1 px-3 mr-2 mb-2 text-sm font-medium
            text-sky-900 focus:outline-none bg-white rounded-lg
            border border-sky-200 hover:bg-sky-100 hover:text-sky-700 focus:z-10
            focus:ring-4 focus:shadow-sky dark:focus:ring-sky-700
            dark:bg-sky-800 dark:text-white dark:border-sky-600 dark:hover:text-white dark:hover:bg-sky-700"
                    type="submit">Register
            </button>
        </div>
    </form>

    </x-layout>
