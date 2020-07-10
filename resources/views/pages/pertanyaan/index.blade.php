@extends('layouts.master')

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
                <a href=" {{ route('pertanyaan.create') }} " class="btn btn-warning float-left">New Question </a>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                        {!! $pertanyaan->links() !!}
                    </ul>
                </nav>
            </div>
        </div>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 border-right pr-3">
                <ul class="list-unstyled text-justify">
                    @foreach($pertanyaan as $value)
                    <li class="media pb-3 mb-5 border-bottom">
                        <img class="mr-3 rounded-circle" src="https://via.placeholder.com/50" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1"><a href="{{ route('pertanyaan.show', $value->id) }}">{{ $value->judul }}</a></h5>
                            <p>{!! substr(strip_tags($value->isi), 0, 60) !!}</p>
                            @foreach($value->tag as $tag_penanda)
                                <span class="btn btn-success btn-sm mr-2">{{ $tag_penanda->nama }}</span>
                            @endforeach
                            <br>
                            <small>{{ $value->user->nama }}</small> | <small>{{ $value->created_at }}</small> | <small><i class="fas fa-eye"></i> {{ views($value)->count() }}</small> | <small><i class="fas fa-comments"></i> 15</small>
                        </div>
                    </li>
                    @endforeach
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
