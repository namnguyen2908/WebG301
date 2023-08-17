@extends ('layouts.app')
@section ('title', 'ADD new Music')
@section ('content')
<form action="/musics" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Name:</label>
        <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="">
        <label for="" class="form-label">Kind of music:</label>
        <input type="text" class="form-control" name="kindofmusic" id="kindofmusic" aria-describedby="helpId" placeholder="">
        <label for="authors" class="form-label">Author:</label><br>
        <select name="authors[]" id="authors" multiple>
            @foreach ($authors as $author)
            <option value="{{$author->id}}">{{$author->name}}</option>
            @endforeach
        </select><br>
        <select name="national_id" id="national_id">
            @foreach($nationals as $national)
            <option value="{{$national->id}}">{{$national->name}}</option>
            @endforeach
        </select>
        <label for="" class="form-label">Singer:</label>
        <input type="text" class="form-control" name="singer" id="singer" aria-describedby="helpId" placeholder="">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection