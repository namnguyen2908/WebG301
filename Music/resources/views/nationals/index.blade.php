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
                <th>Area</th>
                <th>Action</th>
            </tr>
        </thead>
            @foreach ($nationals as $nationals)
            <tbody class="table-group-divider">
                <tr class="table-primary" >
                    <td>{{$nationals->name}}</td>
                    <td>{{$nationals->area}}</td>
                    <td>
                        <a href="/nationals/{{$nationals->id}}" class="btn btn-info">Details</a>
                        <a href="/nationals/{{$nationals->id}}/edit" class="btn btn-primary">Edit</a>
                        <a> <form action="/nationals/{{$nationals->id}}" method="POST">
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
