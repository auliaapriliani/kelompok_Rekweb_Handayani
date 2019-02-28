
<!DOCTYPE html>
<html dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Inspektorat Provinsi Sulawesi Selatan">
    <meta name="author" content="Inspektorat Provinsi Sulawesi Selatan">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url()?>assets/img/logo/sulsel.png">
    <title>Inspektorat Provinsi Sulawesi Selatan </title>
    <!-- Custom CSS -->
    <link href="<?= base_url()?>assets/public/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css'>
    <style>
        .form-control-lg{
            font-size: 15px;
        }
    </style>


</head>

<body>
<?php
$role = $this->input->get('role');

if ( $role == "admin"){
    $title = "Super Administrator";
}elseif ($role == "kepala"){
    $title = "Kepala Puskesmas";
}elseif ($role == "bidan"){
    $title = "Bidan";
}elseif ($role == "pasien" ){
    $title = "Pasien";
}
else {
    $title = "Role Not Found";
}
?>
<div class="main-wrapper">
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(<?= base_url('assets/img/bg/bg-login.png')?>) no-repeat center center;">
        <div class="auth-box on-sidebar">
            <div id="loginform" style="margin-top: 20px;">
                <div class="logo">
                    <span class="db"><img src="<?= base_url()?>assets/img/logo/sulsel.png " width="70%" alt="logo" /></span>
                    <p class="mb-3 mt-2"> <b>SIPADU  </b><br> Silahkan Masukkan Username dan Password</p>

                    <div class="alert alert-success">
                        <strong>Silahkan Registrasi Disini</strong>
                    </div>

                </div>
                <!-- Form -->
                <div class="row">
                    <div class="col-12">

                        <form class="form-horizontal mt-3"  action="#" id="form" class="form-horizontal" >
                            <input type="hidden" name="level" id="level" value="<?= $this->input->get('role') ?>">
                            <div id="flash_message"></div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label ">NIK : </label>
                                    <input name="nik"  class="form-control" type="text" autocomplete="off">
                                    <span class="help-block"></span>
                                </div>


                                <div class="form-group">
                                    <label class="control-label ">Nama Pasien  : </label>
                                    <input name="nm_pasien"  class="form-control" type="text" autocomplete="off">
                                    <span class="help-block"></span>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Alamat: </label>
                                    <textarea name="alamat" class="form-control"></textarea>
                                    <span class="help-block"></span>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Tempat Lahir: </label>
                                    <input name="tempat_lahir"  class="form-control" type="text" autocomplete="off">
                                    <span class="help-block"></span>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Tanggal Lahir : </label>
                                    <input name="tgl_lahir"  class="form-control" type="date" autocomplete="off">
                                    <span class="help-block"></span>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Jamkesnas: </label>
                                    <input name="jamkesnas"  class="form-control" type="text" autocomplete="off">
                                    <span class="help-block"></span>
                                </div>


                                <div class="form-group">
                                    <label class="control-label ">Username : </label>
                                    <input name="username"  class="form-control" type="text" autocomplete="off">
                                    <span class="help-block"></span>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Password : </label>
                                    <input name="password"  class="form-control" type="password" autocomplete="off">
                                    <span class="help-block"></span>
                                </div>


                            <div class="form-group text-center">
                                <div class="col-xs-12 pb-3">
                                    <button class="btn btn-block btn-lg btn-info submit" id="btnSave" onclick="save()" type="button" id="login" >Registrasi  <i class="ti-arrow-circle-right"></i> </button>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 text-center">
                                    Sudah punya akun ? <a href="<?= base_url()?>login?role=pasien"  class="text-dark float-right"> Login Disini </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>






        </div>


    </div>

</div>
<!-- ============================================================== -->
<!-- All Required js -->
<!-- ============================================================== -->
<script src="<?= base_url()?>assets/public/js/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?= base_url()?>assets/public/js/popper.min.js"></script>
<script src="<?= base_url()?>assets/public/js/bootstrap.min.js"></script>
<script src="<?= base_url()?>assets/js/notify.js"></script>
<!-- ============================================================== -->
<!-- This page plugin js -->
<!-- ============================================================== -->
<script>
    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    // ==============================================================
    // Login and Recover Password
    // ==============================================================

    function save()
    {
        $('#btnSave').text('saving...'); //change button text
        $('#btnSave').attr('disabled',true); //set button disable
        var url;

        url = "<?php echo site_url('pasien/ajax_add')?>";
        flash =  flash_message_add();

        // ajax adding data to database
        $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data)
            {

                if(data.status) //if success close modal and reload ajax table
                {
                    window.alert('Registrasi Berhasil, Silahkan Login');
                    window.location.href='<?= base_url()?>login?role=pasien';

                }
                else
                {
                    for (var i = 0; i < data.inputerror.length; i++)
                    {
                        $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                        $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                    }
                }
                $('#btnSave').text('save'); //change button text
                $('#btnSave').attr('disabled',false); //set button enable


            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
                $('#btnSave').text('save'); //change button text
                $('#btnSave').attr('disabled',false); //set button enable

            }
        });
    }





</script>
</body>

</html>