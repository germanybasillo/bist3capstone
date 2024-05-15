@extends('template.nav')

@include('link.landing')

@section('content')

<div class="content-wrapper">
    <div class="content-header">
       <div class="container-fluid">
          <div class="row mb-2">
             <div class="col-sm-6">
                <h1 class="m-0 text-dark"><span class="fa fa-money-bill"></span> Bill Rates</h1>
             </div>
             <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                   <li class="breadcrumb-item"><a href="#">Home</a></li>
                   <li class="breadcrumb-item active">Bills</li>
                </ol>
             </div>
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
                         <th>Bills</th>
                         <th>Rate</th>
                         <th>Action</th>
                      </tr>
                   </thead>
                   <tbody>
                      <tr>
                         <td>Electricity</td>
                         <td>100 / KWh</td>
                         <td class="text-right">
                            <a class="btn btn-sm btn-success" href="#" data-toggle="modal" data-target="#edit"><i
                                  class="fa fa-edit"></i></a>
                            <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#delete"><i
                                  class="fa fa-trash-alt"></i></a>
                         </td>
                      </tr>
                      <tr>
                         <td>Water</td>
                         <td>70 Cu</td>
                         <td class="text-right">
                            <a class="btn btn-sm btn-success" href="#" data-toggle="modal" data-target="#edit"><i
                                  class="fa fa-edit"></i></a>
                            <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#delete"><i
                                  class="fa fa-trash-alt"></i></a>
                         </td>
                      </tr>
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