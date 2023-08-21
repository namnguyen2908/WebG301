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
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
            @foreach ($authors as $authors)
            <tbody class="table-group-divider">
                <tr class="table-primary" >
                    <td>{{$authors->name}}</td>
                    <td>{{$authors->email}}</td>
                    <td>
                        <a href="/authors/{{$authors->id}}" class="btn btn-info">Details</a>
                        <a href="/authors/{{$authors->id}}/edit" class="btn btn-primary">Edit</a>
                        <a> <form action="/authors/{{$authors->id}}" method="POST">
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
