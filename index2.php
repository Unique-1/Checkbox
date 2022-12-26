<!DOCTYPE html>
<html>
<head>
    <title>Plagiarism Detector</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <style>
      body{

      /*background-image:url(images/5.jpg);*/

      /*background-repeat: no-repeat;
      background-position: center;
      background-size:100% 100% ;*/
      background-color: #808080;
          }
     
      textarea {
        width: 400px;
        height: 350px;
        font-size: 11px;
      }
    </style>
</head>


<body>

  <div class="login-logo">
    <a href="#" style="color: #000;"><b>PLAGIARISM DETECTOR APP</b>&nbsp;&nbsp;<i class="fa fa-th-large fa-2x"></i></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Paste your content here</p>

      <form action="/report" method="POST">

        <div class="input-group mb-8">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-book"></i></span>
          </div>
          <textarea name="text" for="fname" class="form-control" placeholder="Please enter paste/type your content here" rows="3"></textarea>
        </div>


        
    <div class="social-auth-links text-center mb-4">
        <button type="submit" name="login" class="btn btn-primary"> <i class="fa fa-report-generate mr-2"></i> Generate Report</button> 

        <br/>
      </div>



      <p style="color:red; text-align: center;" >NOTE: Time to generate report depends on length of text.</p>
      </form>
      <h3 style="color:blueviolet; text-align: center;" >DESIGNED BY: OLADEJO SODIQ ADEMOLA HC20190103178</h3>
      <h3 style="color:red; text-align: center;" >SUPERVISED BY: MR. LONGE</h3>

    </div>
    <!-- /.login-card-body -->
  </div>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>

</body>
</html>
