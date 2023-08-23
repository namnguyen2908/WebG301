@extends ('layouts.app')
@section ('title', 'Details of '. $music->name)
@section ('content')

<div class="bg-dark vh-100 d-flex justify-content-center align-items-center">
    <div class="container d-flex justify-content-center">
        
    <div class="card p-2">
    <div class="text-center p-image"> <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/3.webp" \\ảnh class="card-img-top" alt="Apple Computer" /> </div>
            <div class="p-info px-3 py-3">
                <div>
                    <h5 class="mb-0">{{$music->name}}</h5>
                    <span>Category: {{$music->category->name}}</span><br>
                    <span>Author: 
                        @foreach($music->authors as $author)
                        {{ $author->name }}<br>
                        @endforeach
                    </span>
                    <span>National: {{$music->national->name}}</span><br>
                    <span>Singer: {{$music->singer}}</span><br>
                </div>

                <div class="heart"> <i class="bx bx-heart"></i> </div>
            </div>

            <div class="p-about">
                <p>Description: {{$music->description}}</p>
            </div>
            <div class="buttons d-flex flex-row gap-3 px-3"><button class="btn btn-outline-danger w-100">Dowload</button> </div>
        </div>
    </div>
</div>
<style>
    img.card-img-top {
    width: 380px;
    height: auto;
}
</style>
@endsection