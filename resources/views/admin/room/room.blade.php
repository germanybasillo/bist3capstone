@extends('template.nav')

@include('template.link.landing')

@section('content')
@if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<div class="content-wrapper">
    <div class="content-header">
       <div class="container-fluid">
          <div class="row mb-2">
             <div class="col-sm-6">
                <h1 class="m-0 text-dark"><span class="fa fa-home"></span> Rooms</h1>
             </div>
             <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                   <li class="breadcrumb-item"><a href="#">Home</a></li>
                   <li class="breadcrumb-item active">Rooms</li>
                </ol>
             </div>
             <a class="btn btn-sm elevation-2" href="addroom" style="margin-top: 20px;margin-left: 10px;background-color: #05445E;color: #ddd;"><i
                   class="fa fa-user-plus"></i>
                Add New</a>
          </div>
       </div>
    </div>
    <section class="content">
       <div class="container-fluid">
          <div class="card card-info elevation-2">
             <br>
             <div class="col-md-12 table-responsive">
                <table id="example1" class="table table-bordered table-hover">
                   <thead class="btn-cancel">
                      <tr>
                         <th>Room Number</th>
                         <th>Description</th>
                         <th>Image</th>
                         <th>Action</th>
                      </tr>
                   </thead>
                   <tbody>
                     @foreach ($rooms as $room)
                      <tr>
                         <td>{{$room->number}}</td>
                         <td>{{$room->description}}</td>
                         <td><img src="../assets/img/room.jpg" width="100" style="border: 2px solid gray"></td>
                         <td class="text-right">
                            <a class="btn btn-sm btn-success" href="/rooms/{{$room->id}}" data-toggle="modal" data-target="#edit"><i
                                  class="fa fa-edit"></i></a>
                        <form action="{{ route('rooms.destroy', $room->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete"><i
                              class="fa fa-trash-alt"></i></button>
                         </td>
                      </tr>
                      @endforeach
                   </tbody>
                </table>
             </div>
          </div>
       </div>
    </section>
 </div>
</div>
<div id="delete" class="modal animated rubberBand delete-modal" role="dialog">
 <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
       <div class="modal-body text-center">
          <img src="../assets/img/sent.png" alt="" width="50" height="46">
          <h3>Are you sure want to delete this Operator?</h3>
          <div class="m-t-20">
             <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
             <button type="submit" class="btn btn-danger">Delete</button>
          </div>
       </div>
    </div>
 </div>
</div>

@endsection