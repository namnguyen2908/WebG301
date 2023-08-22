@extends ('layouts.app')
@section ('title', 'Details of '. $author->name)
@section ('content')
<div class="table-responsive">
    <table class="table table-striped
    table-hover	
    table-borderless
    table-primary
    align-middle">
        <thead class="table-light">
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr class="table-primary">
                <td>{{$author->name}}</td>
                <td>{{$author->email}}</td>
            </tr>
        </tbody>
    </table>

    <div class="alert alert-primary" role="alert">
        <strong>Songs related to the author:</strong>
    </div>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Author</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            @foreach($author->musics as $musics)
            <tbody>
                <tr class="">
                    <td scope="row">{{$musics->name}}</td>
                    <td scope="row">
                        @foreach($musics->authors as $author)
                        {{$author->name}}<br>
                        @endforeach
                    </td>
                    <td scope="row"><a href="/musics/{{$musics->id}}" class="btn btn-info">Details</a></td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>

</div>
<style>
    .alert-primary {
    --bs-alert-color: black;
    --bs-alert-bg: cornsilk;
    --bs-alert-border-color: blanchedalmond;
}
</style>
@endsection
