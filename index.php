
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form Pendaftaran</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
    <!-- Icon Utk page -->
    <LINK REL="SHORTCUT ICON" HREF="favicon.ICO">
    <!-- css validasi-->
    <link rel="stylesheet" href="plugins/Validation/validationEngine.jquery.css" type="text/css"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="hold-transition skin-blue layout-top-nav">
  <script type="text/javascript">
  function validasi(){
    var nama=document.getElementById('txtnm');
    var alamat=document.getElementById('txtalamat');
    var hp=document.getElementById('txthp');
    var Sekolah=document.getElementById('txtasalskl');
    var Ranking=document.getElementById('txtrank');
    var nmot=document.getElementById('txtnmot');
    var hpot=document.getElementById('txthpot');
    var fb=document.getElementById('txtfb');
    var twitter=document.getElementById('txttwitter');
    var Instagram=document.getElementById('txtinstagram');
    var line=document.getElementById('txtline');
    var email=document.getElementById('txtemail');
    var capcha=document.getElementById('txtcap');

  if(harusDiisi(nama, "Nama harus diisi !")){
    if (harusDiisi(alamat,"Alamat harus diisi !")) {
      if (isNumeric(hp,"No Hp harus diisi dengan angka !")) {
        if (harusDiisi(Sekolah,"Asal Sekolah harus diisi !")) {
          if (isNumeric(Ranking,"Ranking kelas harus diisi dengan angka !")) {
            if (harusDiisi(nmot,"Nama orang tua harus diisi !")) {
              if (isNumeric(hpot,"No Hp orang tua harus diisi dengan angka !")) {
                if (harusDiisi(fb,"Facebook harus diisi !")) {
                  if (harusDiisi(twitter,"twitter harus diisi !")) {
                    if (harusDiisi(Instagram,"Instagram harus diisi !")) {
                      if (harusDiisi(line,"Id LINE harus diisi !")) {
                        if (harusDiisi(capcha,"Kode Spam harus diisi !")) {
                          return true;
                        };
                      };
                    };
                  };
                };
              };
            };
          };
        };
      }
    }
  }
  return false;

  }
  function notEmpty(elem, helperMsg){
    if(elem.value.length == 0){
        alert(helperMsg);
        elem.focus();
        return false;
    }
    return true;
}
 
function isNumeric(elem, helperMsg){
    var numericExpression = /^[0-9]+$/;
    if(elem.value.match(numericExpression)){
        return true;
    }else{
        alert(helperMsg);
        elem.focus();
        return false;
    }
}

function harusDiisi(att, msg){
                if (att.value.length == 0) {
                    alert(msg);
                    att.focus();
                    return false;
                }
 
                return true;
            }

  </script>
    <div class="wrapper">
      <header class="main-header">
        <nav class="navbar navbar-static-top">
          <div class="container">
            <div class="navbar-header">
                  <!-- The user image in the navbar-->
                  
              <!--<a href="index.php" class="navbar-brand"><b>PMB</b>Online</a>
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button> -->
              <a href="index.php"><img src="dist/img/logo.png" class="user-image" alt="User Image"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <!-- <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
              <ul class="nav navbar-nav">
              </ul>
              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
                </div>
              </form>
            </div> --><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container">
          <!-- Content Header (Page header) -->
          <!-- <section class="content-header">
            <h1>
              Form Pedaftaran
              <small>Online</small>
            </h1>
          </section> -->

          <!-- Main content -->
          <section class="content">
          	<form name="fangket" id="fangket" action="simpan.php" method="post" onSubmit="return validasi();">
            <div class="box box-default">
              <div class="box-header with-border">
                <h3 class="box-title">Pendaftaran Beasiswa</h3>
              </div>
              
              	<div class="col-md-12">
	              <div class="alert alert-info alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-info"></i> Syarat & Ketentuaan</h4>
                    <ol>
                      <li>Nila Matematika Minimal 7</li>
                      <li>Nila Agama Minimal 7</li>
                    </ol>
                  </div>
            	</div><!-- /.col -->
            	<div class="box-body">
                <div class="col-md-6">
                 <div class="form-group">
                    <label for="txtnm">Nama Lengkap *</label>
                    <input type="text" id="txtnm" name="txtnm" placeholder="Nama Lengkap" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Alamat Lengkap *</label>
                    <textarea class="form-control" rows="3" placeholder="Enter ..." name="txtalamat" id="txtalamat"></textarea>
                  </div>
                  <div class="form-group">
                    <label>No Tlp *</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                      </div>
                      <input type="text" name="txttlp" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                    </div><!-- /.input group -->
                  </div>
                  <div class="form-group">
                    <label>No Hp *</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                          <i class="fa fa-mobile"></i>
                      </div>
                      <input type="text" class="form-control" name="txthp" id="txthp" placeholder="No Hp">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Asal Sekolah *</label>
                    <input type="text" class="form-control" name="txtasalskl" id="txtasalskl" placeholder="Asal Sekolah">
                  </div>
                  <div class="row">
                  	<div class="col-md-3">
                  		<div class="form-group">
                    		<label for="exampleInputEmail1">Ranking Kelas *</label>
                    		<input type="text" class="form-control" name="txtrank" id="txtrank" placeholder="Ranking Kelang">
                  		</div>
                  	</div>
                  	
                  </div>
                  
                  <div class="form-group">
                    <label>Nama Orang Tua *</label>
                    <input type="text" class="form-control" name="txtnmot" id="txtnmot" placeholder="Nama Orang Tua">
                  </div>
                  <div class="form-group">
                    <label>No Hp Orang Tua *</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                          <i class="fa fa-mobile"></i>
                      </div>
                      <input type="text" id="txthpot" class="form-control" name="txthpot" placeholder="No Hp Orang Tua">
                    </div>
                  </div>
                </div> 
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Facebook *</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                          <i class="fa fa-facebook"></i>
                      </div>
                      <input type="text" class="form-control" name="txtfb" id="txtfb" placeholder="Facebook">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Twitter</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                          <i class="fa fa-twitter"></i>
                      </div>
                      <input type="text" class="form-control" name="txttwitter" id="txttwitter" placeholder="twitter">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Instagram *</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                          <i class="fa fa-instagram"></i>
                      </div>
                      <input type="text" class="form-control" name="txtinstagram" id="txtinstagram" placeholder="Instagram">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>LINE *</label>
                      <input type="text" class="form-control" name="txtline" id="txtline" placeholder="ID LINE">
                  </div>
                  <div class="form-group">
                    <label>Email *</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                          <i class="fa fa-envelope"></i>
                      </div>
                      <input type="email" id="exampleInputEmail1" class="form-control" name="txtemail" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <img src="cap.php" alt="cap" />
                    <input type="text" class="form-control" name="txtcap" id="txtcap" placeholder="Masukan Kode Capcta">
                  </div>
                </div>
               
              </div><!-- /.box-body -->
              <div class="box-footer">
              	<div class="pull-right">
              		<button type="submit" class="btn btn-primary">Simpan</button>
              	</div>
                    
              </div>
            </div><!-- /.box -->
            </form>
          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="container">
          <div class="pull-right hidden-xs">
            <b>Version</b> 2.3.0
          </div>
          <strong>Copyright &copy; 2014-2015 <a href="#">Almsaeed Studio</a>.</strong> All rights reserved.
        </div><!-- /.container -->
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery validassi-->
    <script src="plugins/Validation/jquery.validationEngine.js"></script>
    <script src="plugins/Validation/jquery.validationEngine-en.js"></script>
    
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Select2 -->
    <script src="plugins/select2/select2.full.min.js"></script>
    <!-- InputMask -->
    <script src="plugins/input-mask/jquery.inputmask.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- date-range-picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
    <!-- bootstrap time picker -->
    <script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- iCheck 1.0.1 -->
    <script src="plugins/iCheck/icheck.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- Page script -->
    <script>
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("yyyy-mm-dd", {"placeholder": "yyyy-mm-dd"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
              ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
              },
              startDate: moment().subtract(29, 'days'),
              endDate: moment()
            },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        );

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });
      });
    </script>
  </body>
</html>
