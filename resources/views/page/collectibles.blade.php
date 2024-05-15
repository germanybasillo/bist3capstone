@extends('template.nav')

@include('link.landing')

@section('content')

<div class="content-wrapper">
    <div class="content-header">
       <div class="container-fluid">
          <div class="row mb-2">
             <div class="col-sm-6">
                <h1 class="m-0 text-dark"><span class="fa fa-list-alt"></span> Collectibles</h1>
             </div>
             <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                   <li class="breadcrumb-item"><a href="#">Home</a></li>
                   <li class="breadcrumb-item active">Collectibles</li>
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
                         <th>Tenant Name</th>
                         <th>Room No.</th>
                         <th>Monthly Due</th>
                         <th>Total Payment</th>
                         <th>Balance</th>
                      </tr>
                   </thead>
                   <tbody>
                     <tr>
                        <td>Tenant 1</td>
                        <td>1</td>
                        <td>3000</td>
                        <td>3000</td>
                        <td>2000</td>
                     </tr>
                     <tr>
                        <td>Tenant 2</td>
                        <td>2</td>
                        <td>3000</td>
                        <td>3000</td>
                        <td>2000</td>
                     </tr>
                     <tr>
                        <td>Tenant 3</td>
                        <td>3</td>
                        <td>3000</td>
                        <td>3000</td>
                        <td>2000</td>
                     </tr>
                     <tr>
                        <td>Tenant 4</td>
                        <td>4</td>
                        <td>3000</td>
                        <td>3000</td>
                        <td>2000</td>
                     </tr>
                     <tr>
                        <td>Tenant 5</td>
                        <td>5</td>
                        <td>3000</td>
                        <td>3000</td>
                        <td>2000</td>
                     </tr>
                     <tr>
                        <td>Tenant 6</td>
                        <td>6</td>
                        <td>3000</td>
                        <td>3000</td>
                        <td>2000</td>
                     </tr>
                     <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><b>Total Collectible</b></td>
                        <td>20000</td>
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