@extends('layouts.master')
@section('title',"$pertanyaan->judul")


@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 text-justify border-right pr-3">
                <div class="row">
                    <div class="col-md-1 text-center">
                        <a href=""><i class="fas fa-sort-up fa-3x"></i></a>
                        <span>2</span>
                        <a href=""><i class="fas fa-sort-down fa-3x"></i></a>
                    </div>
                    <div class="col-md-11 mb-5">
                        <div class="border-bottom pb-3 mb-5">
                            <h1 class="h3">{{ $pertanyaan->judul }}</h1>
                            <small>Create {{ $pertanyaan->created_at }}</small> . <small>views {{ views($pertanyaan)->count() }}</small>
                            <p class="mt-3 mb-1">{!! $pertanyaan->isi !!}</p>
                            <br>
                            @foreach($pertanyaan->tag as $tag_penanda)
                                <span class="btn btn-success btn-sm mr-2">{{ $tag_penanda->nama }}</span>
                            @endforeach
                        </div>
                        {{-- komentar pertanyaan --}}
                        <div class="ml-5">
                            <p class="m-0 border-top border-bottom pt-2 pb-2" style="font-size: 12px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, est. <a href="">--Restu</a> july 28 at 11:23 </p>
                        </div>
                        <a href="" data-toggle="modal" data-target="#exampleModal" style="font-size: 12px;">add a comment</a>
                    </div>

                    {{-- jawaban --}}
                    <h1 class="h3">  Jawaban </h1>
                    @foreach($pertanyaan->jawaban as $value)
                        <div class="row mt-5 pr-3">
                            <div class="col-md-1 text-center">
                                <a href=""><i class="fas fa-sort-up fa-3x"></i></a>
                                <span>2</span>
                                <a href=""><i class="fas fa-sort-down fa-3x"></i></a>
                            </div>
                            <div class="col-md-11">
                                <div class="border-bottom pb-3 mb-5">
{{--                                    <h1 class="h3">{{ $value-judul }}</h1>--}}
                                    <small>Create {{ $value->created_at }}</small> . <small>views 22</small>
                                    <p class="mt-3 mb-1">{{ $value->isi }}</p>
                                </div>

                                {{-- komentar jawaban --}}
                                <div class="ml-5 border-top border-bottom pt-2 pb-2">
                                    <p class="m-0" style="font-size: 12px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, est. <a href="">--Restu</a> july 28 at 11:23 </p>
                                    <div class="media mt-3" style="position: relative; left:65%;">
                                        <img class="mr-2 rounded-circle" src="https://via.placeholder.com/30" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <small class="mt-0">Restu</small><br>
                                            <small title="point reputations">100</small> . <small>Dijawab 3 jam yang lalu</small>
                                        </div>
                                    </div>
                                </div>
                                <a href="" style="font-size: 12px;" data-toggle="modal" data-target="#exampleModal">add a comment</a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white mb-3">
                    <div class="card-header bg-secondary">Pertanyaan Yang Sama</div>
                    <div class="card-body">
                        {{-- pertanyaan yang sama --}}
                        @foreach($like as $value)
                            <?php $tag = $value->tag ?>
                        <div class="media text-dark pb-3 border-bottom mb-3">
                            <img class="mr-3 rounded-circle" src="https://via.placeholder.com/50" alt="Generic placeholder image">
                            <div class="media-body">
                                <p class="mt-0 mb-0 font-weight-bold">{{ $value->nama }}</p>
                                <small>12-July-2020</small><br>
                                <a href="{{ route('pertanyaan.show', $value->id) }}"><small>{{ $value->judul }}</small></a><br>
                                <?php
                                 $tags = explode(',', $tag)
                                ?>
                                <div class="">
                                    @foreach($tags as $item)
                                        <small class="btn btn-success btn-sm" style="font-size: 8px;">{{ $item }}</small>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <div class="float-right">
                            <a href="" class="btn btn-link">See more &nbsp;&nbsp;&nbsp;<i class="fas fa-arrow-alt-circle-right"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Jawaban kamu</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" required autofocus>
                            <small>Note* :masukan jawaban Lebih spesifik dan bayangkan Anda menerima jawaban dari pertanyaan kamu</small>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
