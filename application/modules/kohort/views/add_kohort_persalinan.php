<?= preload(); ?>


<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Kohort Persalinan Ibu</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Kohort  Persalinan Ibu</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-7 align-self-center">

        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <form id="form">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">NIK : </label>
                                    <select name="nik" class="form-control select2" id="">
                                        <option value="">Cari NIK </option>
                                        <?php
                                        foreach ($pasien AS $value):
                                        ?>
                                        <option value="<?= $value->nik?>"><?= $value->nik?> - <?= $value->nm_pasien ?></option>
                                        <?php
                                        endforeach;
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Usia Kehamilan : </label>
                                    <select name="usia_kehamilan" class="form-control select2" id="">
                                        <option value="">Pilih </option>
                                        <option value="1">1 Bulan</option>
                                        <option value="2">2 Bulan</option>
                                        <option value="3">3 Bulan</option>
                                        <option value="4">4 Bulan</option>
                                        <option value="5">5 Bulan</option>
                                        <option value="6">6 Bulan</option>
                                        <option value="7">7 Bulan</option>
                                        <option value="8">8 Bulan</option>
                                        <option value="9">9 Bulan</option>
                                        <option value="10">10 Bulan</option>
                                        <option value="11">11 Bulan</option>
                                        <option value="12">12 Bulan</option>
                                    </select>
                                </div>
                            </div>



                            <div class="col-md-12">

                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">


                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Waktu Persalinan </a>
                                            </h4>
                                        </div>
                                        <div id="collapse1" class="panel-collapse collapse ">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-12">

                                                        <div class="form-group">
                                                            <label for=""> Kala 1 Aktif </label>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <b>Tanggal : </b>
                                                                    <input type="date" name="kala1_tgl" class="form-control" placeholder="Tanggal" >
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <b>Waktu : </b>
                                                                    <input type="time" name="kala1_waktu"  class="form-control" placeholder="Waktu" >
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for=""> Kala II </label>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <b>Tanggal : </b>
                                                                    <input type="date" name="kala2_tgl" class="form-control" placeholder="Tanggal" >
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <b>Waktu : </b>
                                                                    <input type="time" name="kala2_waktu"  class="form-control" placeholder="Waktu" >
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for=""> Bayi Lahir </label>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <b>Tanggal : </b>
                                                                    <input type="date" name="bayilahir_tgl" class="form-control" placeholder="Tanggal" >
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <b>Waktu : </b>
                                                                    <input type="time" name="bayilahir_waktu"  class="form-control" placeholder="Waktu" >
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="form-group">
                                                            <label for="">  Plasenta Lahir </label>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <b>Tanggal : </b>
                                                                    <input type="date" name="plasenta_tgl" class="form-control" placeholder="Tanggal" >
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <b>Waktu : </b>
                                                                    <input type="time" name="plasenta_waktu"  class="form-control" placeholder="Waktu" >
                                                                </div>
                                                            </div>
                                                        </div>



                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Persalinan </a>
                                            </h4>
                                        </div>
                                        <div id="collapse2" class="panel-collapse collapse ">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for=""> Usia HPHT </label>
                                                            <input type="text" class="form-control" name="usia_phpt">
                                                        </div>


                                                        <div class="form-group">
                                                            <label for=""> Persentasi </label>
                                                            <input type="text" class="form-control" name="presentasi">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for=""> Berat Bayi </label>
                                                            <input type="text" class="form-control" name="berat_bayi">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for=""> Cara Persalinan </label>
                                                            <input type="text" class="form-control" name="cara_persalinan">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for=""> Tempat  </label>
                                                            <input type="text" class="form-control" name="tempat">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for=""> Alamat </label>
                                                            <input type="text" class="form-control" name="alamat">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for=""> Penolong </label>
                                                            <input type="text" class="form-control" name="penolong">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for=""> Injeksi </label>
                                                            <input type="text" class="form-control" name="injeksi">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for=""> Tali Pusat </label>
                                                            <input type="text" class="form-control" name="tali_pusat">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for=""> Masase </label>
                                                            <input type="text" class="form-control" name="masase">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for=""> Keadaan Ibu </label>
                                                            <input type="text" class="form-control" name="keadaan_ibu">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for=""> Keadaan Bayi </label>
                                                            <input type="text" class="form-control" name="keadaan_bayi">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">A R V </label>
                                                            <input type="text" class="form-control" name="arv">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Obat Anti Malaria </label>
                                                            <input type="text" class="form-control" name="obat_anti_malaria">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Obat Anti T B </label>
                                                            <input type="text" class="form-control" name="obat_anti_tb">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Distosia </label>
                                                            <input type="text" class="form-control" name="distosia">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">HDK </label>
                                                            <input type="text" class="form-control" name="hdk">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">PPP</label>
                                                            <input type="text" class="form-control" name="ppp">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Infeksi </label>
                                                            <input type="text" class="form-control" name="infeksi">
                                                        </div>
                                                        <br>
                                                        <b>Kegiatan Rujukan</b>
                                                        <div class="form-group">
                                                            <label for="">Puskesmas</label>
                                                            <input type="text" class="form-control" name="puskesmas">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">RS Bersalin</label>
                                                            <input type="text" class="form-control" name="rs_bersalin">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">RS</label>
                                                            <input type="text" class="form-control" name="rs">
                                                        </div>




                                                    </div>
                                                </div>
                                            </div>
                                        </div>






                                    </div>
                                </div>

                            </div>
                            <div class="col-md-3">

                            </div>
                            <div class="col-md-3">

                            </div>
                            <div class="col-md-3">

                            </div>
                        </div>

                        <button type="submit" id="btnSave" onclick="save()"  class="btn btn-info"> Simpan </button>
                    </form>



                </div>
            </div>
        </div>
    </div>
</div>





<script type="text/javascript">

var save_method; //for save method string
var table;




function save()
{
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable
    var url;

    url = "<?php echo site_url('kohort/persalinan/add_kohort')?>";
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
                alert('berhasil');
               
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



<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">  </h4>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/>
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-8">
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
                            </div>
                            <div class="col-md-4">
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

                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->
