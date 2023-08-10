@extends ('layouts.app')
@section ('title', 'Details of '. $music->name)
@section ('content')
<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="product p-4">
                                <h5 class="text-uppercase">Music: {{$music->name}}</h5>
                                <div class="price d-flex flex-row align-items-center">
                                    <div class="ml-2"> <small class="dis-price">Kind of music: </small> <span>{{$music->kingofmusic}}</span> </div>
                                </div>
                                <div class="price d-flex flex-row align-items-center">
                                    <div class="ml-2"> <small class="dis-price">Author: </small> <span>{{$music->author}}</span> </div>
                                </div>
                                <div class="price d-flex flex-row align-items-center">
                                    <div class="ml-2"> <small class="dis-price">Singer: </small> <span>{{$music->singer}}</span> </div>
                                </div>
                            </div>
                            <p class="about">Shop from a wide range of t-shirt from orianz. Pefect for your everyday use, you could pair it with a stylish pair of jeans or trousers complete the look.</p>
                            <div class="cart mt-4 align-items-center"> <button class="btn btn-danger text-uppercase mr-2 px-4">Dowload</button> <i class="fa fa-heart text-muted"></i> <i class="fa fa-share-alt text-muted"></i> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
