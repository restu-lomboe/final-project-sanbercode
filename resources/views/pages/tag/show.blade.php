@extends('layouts.app')
@section('title',"$tag->nama tag")
@section('content')
<div class="container">
   <div class="jumbotron" id="tc_jumbotron">
      <div class="card-body" id="xx" style="color: #fff;border:1px solid #fff;">
         <div class="text-center">
            <small>Tag:</small>
            <h1 style="font-size: 3.5rem;">{{ $tag->nama }}</h1> ({{ $tag->pertanyaan->count() }} posts)
         </div>
      </div>
   </div>
</div>
<div class="container">
   <div class="row">
      <div class="col-md-12" id="tc_container_wrap">
         <div class="card" id="tc_paneldefault">
            <div class="card-body" id="tc_panelbody" style="background: #f9f9f9;">
               <div class="card">
                  <div class="card-header" style="background-color: #2ab27b;padding: 6px 11px 6px 23px;">
                     <div class="menu_a" style="float: left;">
                        <a href="{{route('tag.index')}}">Tag</a>
                     </div>
                     <div class="search" style="margin: 3px;">
                        <div class="col-md-4 float-right" style="padding-right: 0;">
                           <div class="input-group">
                              <input type="text" class="form-control" placeholder="Search for..."
                                 style=" margin-right: 3px;background: #f5f8fa;">
                              <span class="input-group-btn">
                                 <button class="btn btn-warning" type="button" style="color: #fff;">Go!</button>
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12" style="padding-right: 0;"><br>
                     <table class="table table-bordered">
                        <thead id="tc_thead">
                           <tr>
                              <th scope="col">Thread</th>
                              <th scope="col">Jawaban</th>
                              <th scope="col">Views</th>
                              <th scope="col">Created</th>
                           </tr>
                        </thead>
                        <tbody style="background: #f9f9f9;">
                           @foreach($tag->pertanyaan as  $value)
                           <tr>
                              <td width="453">
                                 <div class="forum_title">
                                    <h4> <a href="{{ route('pertanyaan.show',  $value->id) }}">{{ substr( $value->judul, 0, 45) }}</a>
                                    </h4>
                                    <p>{!! strip_tags(substr( $value->isi, 0, 60) ) !!}</p>
                                    @foreach( $value->tag as $tag)
                                    <a href="{{ route('tag.show', $tag->nama) }}"
                                       class="badge badge-success tag_label">#{{ $tag->nama }}</a>
                                    @endforeach
                                 </div>
                              </td>
                              <td style="text-align: center"><small></small></td>
                              <td style="text-align: center"><small> {{ views($value)->count() }}</small></td>
                              <td>
                                 <div class="forum_by">
                                    <small
                                       style="margin-bottom: 0; color: #666">{{ $value->created_at->diffForHumans() }}</small>
                                    <small>by <a href="#">{{ $value->user->nama }}</a></small>
                                 </div>
                              </td>
                           </tr>
                           @endforeach
                        </tbody>
                     </table>
                  </div>
               </div>
               <hr style="margin-top: 0;">
               <div class="card">
                  <div class="card-header"></div>
                  <div class="card-body" style="background: rgb(90, 90, 90)"></div>
                  <div class="card-header"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div><br>
@endsection