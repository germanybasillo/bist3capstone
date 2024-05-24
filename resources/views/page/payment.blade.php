@extends('template.nav')

@include('template.link.landing')

@section('content')

<div class="content-wrapper">
    <div class="content-header">
       <div class="container-fluid">
          <div class="row mb-2">
             <div class="col-sm-6">
                <h1 class="m-0 text-dark"><span class="fa fa-money-bill"></span> Payments</h1>
             </div>
             <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                   <li class="breadcrumb-item"><a href="#">Home</a></li>
                   <li class="breadcrumb-item active">Payments</li>
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
                         <th>Payment Amount</th>
                         <th>Date</th>
                         <th>Proof of Payment</th>
                         <th>Remarks</th>
                         <th>Status</th>
                         <th>Action</th>
                      </tr>
                   </thead>
                   <tbody>
                      <tr>
                         <td>Php 3,000.00</td>
                         <td>Sept 06, 2021</td>
                         <td><img src="../assets/img/credit/paypal2.png" width="50" style="border: 2px solid gray"></td>
                         <td>remarks</td>
                         <td><span class="badge bg-success">approved</span></td>
                         <td class="text-right">
                           <a class="btn btn-sm btn-info" href="#" data-toggle="modal" data-target="#edit"><i
                                 class="fa fa-eye"></i></a>
                                 <a class="btn btn-sm btn-success" href="#" data-toggle="modal" data-target="#edit"><i
                                       class="fa fa-edit"></i></a>
                         </td>
                      </tr>
                      <tr>
                         <td>Php 3,500.00</td>
                         <td>Sept 06, 2021</td>
                         <td><img src="../assets/img/credit/paypal2.png" width="50" style="border: 2px solid gray"></td>
                         <td>remarks</td>
                         <td><span class="badge bg-info">pending</span></td>
                         <td class="text-right">
                           <a class="btn btn-sm btn-info" href="#" data-toggle="modal" data-target="#edit"><i
                                 class="fa fa-eye"></i></a>
                                 <a class="btn btn-sm btn-success" href="#" data-toggle="modal" data-target="#edit"><i
                                       class="fa fa-edit"></i></a>
                         </td>
                      </tr>
                      <tr>
                         <td>Php 4,000.00</td>
                         <td>Sept 06, 2021</td>
                         <td><img src="../assets/img/credit/paypal2.png" width="50" style="border: 2px solid gray"></td>
                         <td>remarks</td>
                         <td><span class="badge bg-danger">disapproved</span></td>
                         <td class="text-right">
                           <a class="btn btn-sm btn-info" href="#" data-toggle="modal" data-target="#edit"><i
                                 class="fa fa-eye"></i></a>
                                 <a class="btn btn-sm btn-success" href="#" data-toggle="modal" data-target="#edit"><i
                                       class="fa fa-edit"></i></a>
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