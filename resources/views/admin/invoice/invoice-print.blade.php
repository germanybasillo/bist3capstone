<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Boarding-House-Management-System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
   <link rel="stylesheet" href="../assets/tables/datatables-bs4/css/dataTables.bootstrap4.min.css">   
   <style type="text/css">
      td p {
         margin: -0.3rem;
         font-size: 0.9rem;
      }
      aside.main-sidebar{
         background-color: #05445E;
         color:#ddd;
      }
      nav ul li a p{
         color:#ddd;
      }
      nav ul li a i{
         color:#ddd;
      }
   </style>
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
                    <i class="fas fa-globe"></i> Boarding-House-Management-System
                    <small class="float-right">Date: Sept 06, 2021</small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        From
        <address>
          <strong>Admin, Inc.</strong><br>
          795 Folsom Ave, Suite 600<br>
          San Francisco, CA 94107<br>
          Phone: (804) 123-5432<br>
          Email: info@almasaeedstudio.com
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        To
        <address>
          <strong>John Doe</strong></address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <b>Invoice #007612</b><br>
        <br>
        <b>Due Date:</b> Sept 30, 2021<br>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
          <thead>
                    <tr>
                      <th>Description</th>
                      <th>Month</th>
                      <th>Year</th>
                      <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>Monthly Rent</td>
                      <td>September</td>
                      <td>2021</td>
                      <td>Php 5,000.00</td>
                    </tr>
                    </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
      <div class="col-6">
                  <p class="lead">Payment Methods:</p>
                  <img src="../assets/img/credit/visa.png" alt="Visa">
                  <img src="../assets/img/credit/mastercard.png" alt="Mastercard">
                  <img src="../assets/img/credit/american-express.png" alt="American Express">
                  <img src="../assets/img/credit/paypal2.png" alt="Paypal">

        <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
          Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr
          jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
        </p>
      </div>
      <!-- /.col -->
      <div class="col-6">
        <p class="lead">Amount Due 09/30/2021</p>

        <div class="table-responsive">
          <table class="table">
                      <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td>Php 3000.00</td>
                      </tr>
                      <tr>
                        <th>Tax (9.3%)</th>
                        <td>Php 10.34</td>
                      </tr>
                      <tr>
                        <th>Total:</th>
                        <td>php 3190.00</td>
                      </tr>
                    </table>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

<script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script>
</body>
</html>
