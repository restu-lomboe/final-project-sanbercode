@extends('layouts.master')

@section('css')

@endsection

@section('content')
<div class="container">
    <div class="row">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src=" {{ asset('images/bg2.jpg') }} " class="d-block w-100" alt="...">
                </div>

                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container mb-4">
    <div class="row">
        <div class="col-md-8 border-bottom">
            <a href=" {{ route('pertanyaan') }} " class="btn btn-warning float-left">New Question </a>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
        </div>
    </div>

</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 border-right pr-3">
            <ul class="list-unstyled text-justify">
                <li class="media pb-3 mb-5 border-bottom">
                <img class="mr-3 rounded-circle" src="https://via.placeholder.com/50" alt="Generic placeholder image">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1"><a href="{{ route('pertanyaan.detail') }}">List-based media object</a></h5>
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                        <span class="btn btn-success btn-sm mr-2">php</span><span class="btn btn-success btn-sm mr-2">laravel</span><span class="btn btn-success btn-sm mr-2">javascript</span>
                        <br>
                        <small>Restu</small> . <small>12-Jan-2020</small> . <small><i class="fas fa-eye"></i> 10</small> . <small><i class="fas fa-comments"></i> 15</small>
                    </div>
                </li>
                <li class="media pb-3 mb-5 border-bottom">
                <img class="mr-3 rounded-circle" src="https://via.placeholder.com/50" alt="Generic placeholder image">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1"><a href="{{ route('pertanyaan.detail') }}">List-based media object</a></h5>
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                        <span class="btn btn-success btn-sm mr-2">php</span><span class="btn btn-success btn-sm mr-2">laravel</span><span class="btn btn-success btn-sm mr-2">javascript</span>
                        <br>
                        <small>Restu</small> . <small>12-Jan-2020</small> . <small><i class="fas fa-eye"></i> 10</small> . <small><i class="fas fa-comments"></i> 15</small>
                    </div>
                </li>
                <li class="media pb-3 mb-5 border-bottom">
                <img class="mr-3 rounded-circle" src="https://via.placeholder.com/50" alt="Generic placeholder image">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1"><a href="{{ route('pertanyaan.detail') }}">List-based media object</a></h5>
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                        <span class="btn btn-success btn-sm mr-2">php</span><span class="btn btn-success btn-sm mr-2">laravel</span><span class="btn btn-success btn-sm mr-2">javascript</span>
                        <br>
                        <small>Restu</small> . <small>12-Jan-2020</small> . <small><i class="fas fa-eye"></i> 10</small> . <small><i class="fas fa-comments"></i> 15</small>
                    </div>
                </li>


            </ul>
        </div>
        <div class="col-md-4">
            <div class="card text-white mb-3">
                <div class="card-header text-dark">Popular Post</div>
                <div class="card-body text-dark text-justify">
                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, eligendi.</li>
                        <li>Lorem ipsum dolor sit amet.</li>
                    </ul>
                </div>
            </div>
        </div>


    </div>
</div>


@endsection
