<div class="space-y-4">

    <label class="flex flex-col">
        <span class="font-serif text-slate-600 dark:text-slate-400"> Title </span>
        <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 dark:text-slate-400 dark:placeholder:text-slate-400"
               name="title" type="text" value="{{ old('title', $post->title) }}">
        @error('title')
        <small class="font-bold text-red-500/80">
            {{ $message }}
        </small>
        @enderror
    </label>
    <label class="flex flex-col">
        <span class="font-serif text-slate-600 dark:text-slate-400"> Body </span>
        <textarea class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 dark:text-slate-400 dark:placeholder:text-slate-400"
                  name="body" id="" cols="21" rows="5">{{old('body',$post->body)}}</textarea>
        @error('body')
        <small class="font-bold text-red-500/80">
            {{ $message }}
        </small>
        @enderror
    </label>

</div>
