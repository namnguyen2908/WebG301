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
        <input type="text" class="form-control" name="kingofmusic" id="kingofmusic" aria-describedby="helpId" placeholder="" value="{{$music->kingofmusic}}">
        <label for="" class="form-label">author</label>
        <input type="text" class="form-control" name="author" id="author" aria-describedby="helpId" placeholder="" value="{{$music->author}}">
        <label for="" class="form-label">singer</label>
        <input type="text" class="form-control" name="singer" id="singer" aria-describedby="helpId" placeholder="" value="{{$music->singer}}">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection