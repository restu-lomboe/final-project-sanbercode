@extends('layouts.app')
@section('title','Buat Pertanyaan')
@section('content')
<div class="container">
   <div class="jumbotron" id="tc_jumbotron">
      <div class="col-md-8 offset-md-2">
         <div class="text-center">
            <h3 style="color: #fff;">Buat Pertanyaan</h3>
         </div>
         <hr style="background: #fff">
      </div>
      <div class="row justify-content-center">
         <div class="col-md-9">
            <div class="card">
               <div class="card-body">
                  <form action="{{ route('pertanyaan.store') }}" method="post" enctype="multipart/form-data" autocomplete="off">
                     @csrf
                     <div class="form-group">
                        <input type="text" id="tc_input" class="form-control" name="judul" placeholder="Judul">
                     </div>

                     <div class="des">
                        <a class="btn btn_tc btn-block" data-toggle="collapse" data-target="#description-textarea"
                           style="color: #777">Description</a>
                        <div id="description-textarea" class="collapse">
                           <div class="bg">
                              <div class="form-group">
                                 <textarea type="text" class="form-control" id="tc_input" name="isi" placeholder="Keluhanmu"> </textarea>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <select name="tags[]" multiple="multiple" id="tags" class="form-control">
                           @foreach($tags as $tag)
                           <option value="{{ $tag->id }}">{{ $tag->nama }}</option>
                           @endforeach
                        </select>
                     </div>

                     <button type="submit" class="btn btn-success btn-block">Submit</button>
                  </form>
               </div>
            </div>
            <br>

            <div class="alert alert-info alert-dismissible fade show" role="alert">
               @forelse($pertanyaan as $value)
               <b>Pertanyaan Terakhir Anda:</b><br>

               <a href="{{ route('pertanyaan.show', $value->id) }}" style="color: #444">
                  <h5 style="margin-top: 4px;"><i class="fa fa-newspaper-o"></i> {{ $value->judul }}</h5>
               </a>
               @empty
               <strong> Pertanyaan baru akan muncul disini.</strong><br>
               @endforelse
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
         </div>
      </div>
   </div>
</div>

<script type="text/javascript">
   $(document).ready(() => {
      $("#tags").select2({
         placeholder: "Select Tags",
         maximumSelectionLength: 2
      })
   })

   CKEDITOR.replace('isi', {
      extraPlugins: "codesnippet"
   })
</script>
@endsection