@extends ('layouts.app')
@section ('title', 'ADD new Author')
@section ('content')
<form action="/nationals/{{$national->id}}" method="POST">
    @csrf
    @method ('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="" value="{{$national->name}}">
        <label for="" class="form-label">Area</label>
        <input type="text" class="form-control" name="area" id="area" aria-describedby="helpId" placeholder="" value="{{$national->area}}">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection