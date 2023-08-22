@extends ('layouts.app')
@section ('title', 'Edit Music')
@section ('content')
<form action="/musics/{{$music->id}}" method="POST">
    @csrf
    @method ('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Name:</label>
        <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="" value="{{$music->name}}">
        <label for="" class="form-label">Author:</label><br>
        <select name="authors[]" id="authors" multiple>
            @foreach ($authors as $author)
                <option value="{{$author->id}}" @if(in_array($author->id, $music->authors->pluck('id')->toArray())) selected @endif>{{$author->name}}</option>
            @endforeach
        </select><br>
        <label for="" class="form-label">National:</label><br>
        <select name="national" id="national">
            @foreach($nationals as $national)
            <option {{ ($national->id == $music->national->id)?"selected":""}} value="{{$national->id}}">{{$national->name}}</option>
            @endforeach
        </select><br>
        <label for="" class="form-label">Category:</label><br>
        <select name="category" id="category">
            @foreach($categories as $category)
            <option {{ ($category->id == $music->category->id)?"selected":""}} value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select><br>
        <label for="" class="form-label">Singer:</label>
        <input type="text" class="form-control" name="singer" id="singer" aria-describedby="helpId" placeholder="" value="{{$music->singer}}">
        <label for="" class="form-label">Description:</label>
        <input type="text" class="form-control" name="description" id="description" aria-describedby="helpId" placeholder="" value="{{$music->description}}">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection