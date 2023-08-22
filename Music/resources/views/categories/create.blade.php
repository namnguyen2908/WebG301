@extends ('layouts.app')
@section ('title', 'ADD new Category')
@section ('content')
<form action="/categories" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="">     
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection