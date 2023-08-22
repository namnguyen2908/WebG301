@extends ('layouts.app')
@section ('title', 'ADD new Music')
@section ('content')
<form action="/musics" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Name:</label>
        <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder=""> 
        <label for="authors" class="form-label">Author:</label><br>
        <select name="authors[]" id="authors" multiple>
            @foreach ($authors as $author)
            <option value="{{$author->id}}">{{$author->name}}</option>
            @endforeach
        </select>
        <br>
        <label for="" class="form-label" width = "200px" >National:</label><br>
        <select name="national_id" id="national_id">
            @foreach($nationals as $national)
            <option value="{{$national->id}}">{{$national->name}}</option>
            @endforeach
        </select> 
        <br>
        <label for="" class="form-label" width = "200px" >Category:</label><br>
        <select name="category_id" id="category_id">
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select> 
        <br>
        <label for="" class="form-label">Singer:</label>
        <input type="text" class="form-control" name="singer" id="singer" aria-describedby="helpId" placeholder="">
        <label for="" class="form-label">Description:</label>
        <input type="text" class="form-control" name="description" id="description" aria-describedby="helpId" placeholder="">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection