@extends ('layouts.app')
@section ('title', 'ADD new Category')
@section ('content')
<form action="/categories/{{$category->id}}" method="POST">
    @csrf
    @method ('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="" value="{{$category->name}}">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection