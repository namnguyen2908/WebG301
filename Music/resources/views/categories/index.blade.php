@extends ('layouts.app')
@section ('title', 'MP3')
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
                <th>Action</th>
            </tr>
        </thead>
            @foreach ($categories as $categories)
            <tbody class="table-group-divider">
                <tr class="table-primary">
                    <td>{{$categories->name}}</td>
                    <td>
                        <a href="/categories/{{$categories->id}}" class="btn btn-info">Details</a>
                        <a href="/categories/{{$categories->id}}/edit" class="btn btn-primary">Edit</a>
                        <a> <form action="/categories/{{$categories->id}}" method="POST">
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
