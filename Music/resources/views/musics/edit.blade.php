@extends ('layouts.app')
@section ('title', 'ADD new Music')
@section ('content')
<form action="/musics/{{$music->id}}" method="POST">
    @csrf
    @method ('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="" value="{{$music->name}}">
        <label for="" class="form-label">King of music</label>
        <input type="text" class="form-control" name="kindofmusic" id="kindofmusic" aria-describedby="helpId" placeholder="" value="{{$music->kindofmusic}}">
        <label for="" class="form-label">Author</label>
        <select name="authors[]" id="authors" multiple>
            @foreach ($authors as $author)
                <option value="{{$author->id}}" @if(in_array($author->id, $music->authors->pluck('id')->toArray())) selected @endif>{{$author->name}}</option>
            @endforeach
        </select>
        <label for="" class="form-label">National</label>
        <select name="national" id="national">
            @foreach($nationals as $national)
            <option {{ ($national->id == $music->national->id)?"selected":""}} value="{{$national->id}}">{{$national->name}}</option>
            @endforeach
        </select>
        <label for="" class="form-label">singer</label>
        <input type="text" class="form-control" name="singer" id="singer" aria-describedby="helpId" placeholder="" value="{{$music->singer}}">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection