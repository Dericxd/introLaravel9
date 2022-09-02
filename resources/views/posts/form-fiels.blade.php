<label>
    Title
    <br/>
    <input name="title" type="text" value="{{ old('title', $post->title) }}">
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
    <textarea name="body" id="" cols="21" rows="5" >{{old('body',$post->body)}}</textarea>
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
