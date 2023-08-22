@extends ('layouts.app')
@section ('title', 'KMusic')
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
                <th>Author</th>
                <th>Singer</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach ($musics as $musics)
        <tbody class="table-group-divider">
            <tr class="table-primary">
                <td>{{$musics->name}}</td>
                <td>
                    @foreach($musics->authors as $author)
                    {{ $author->name }}<br>
                    @endforeach
                </td>
                <td>{{$musics->singer}}</td>
                <td>
                    <a href="/musics/{{$musics->id}}" class="btn btn-info">Details</a>
                    <a href="/musics/{{$musics->id}}/edit" class="btn btn-primary">Edit</a>
                    <a>
                        <form action="/musics/{{$musics->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger mt-2" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </a>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
@endsection