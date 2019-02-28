<?= preload(); ?>


<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Kohort Ibu Hamil</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Kohort Ibu Hamil</li>
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


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Trimester Ke : </label>
                                    <select name="trimester_ke" class="form-control select2" id="">
                                        <option value="">Pilih </option>
                                        <option value="1">1 </option>
                                        <option value="2">2 </option>
                                        <option value="3">3 </option>
                                        <option value="4">4 </option>
                                        <option value="5">5 </option>
                                        <option value="6">6 </option>
                                    </select>
                                </div>
                            </div>




                            <div class="col-md-12">

                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">


                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Pemeriksaan Ibu </a>
                                            </h4>
                                        </div>
                                        <div id="collapse1" class="panel-collapse collapse ">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-4">

                                                        <div class="form-group">
                                                            <label for="">Anamnesis </label>
                                                            <input type="text" name="anamnesis" class="form-control">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Berat Badan </label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" name="bb" class="form-control" placeholder="">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">Kg</span>
                                                                </div>
                                                            </div>
                                                        </div>



                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Tinggi Badan </label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" name="tb" class="form-control" placeholder="">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">cm</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">LILA </label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" name="lila" class="form-control" placeholder="">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">cm</span>
                                                                </div>
                                                            </div>
                                                        </div>



                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Status Gizi </label>
                                                            <select name="status_gizi" class="form-control" id="">
                                                                <option value="">Pilih</option>
                                                                <option value="Kurang">Kurang </option>
                                                                <option value="Normal">Normal </option>
                                                                <option value="Obesitas">Obesitas </option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Refleks Patella </label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" name="refleks" class="form-control" placeholder="">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">(+|-)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>





                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Pemeriksaan Bayi </a>
                                            </h4>
                                        </div>
                                        <div id="collapse2" class="panel-collapse collapse ">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">DJJ  </label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" name="djj" class="form-control" placeholder="">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">x/menit</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Kepala thd PAP  </label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" name="pap" class="form-control" placeholder="">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">m/BM</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">TBJ  </label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" name="tbj" form-control" placeholder="">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">Gr</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Jumlah Janin  </label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" name="jumlah_janin" class="form-control" placeholder="">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">T/G</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">


                                                        <div class="form-group">
                                                            <label for="">Persentase  </label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" name="persentasi" class="form-control" placeholder="">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Layanan</a>
                                            </h4>
                                        </div>
                                        <div id="collapse3" class="panel-collapse collapse ">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <input type="checkbox" name="pelayanan_injeksi" class="form-control" value="1"> Injeksi TT
                                                    </div>

                                                    <div class="col-md-4">
                                                        <input type="checkbox" name="pelayanan_kia" class="form-control" value="1"> Catat Di Buku KIA
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="checkbox" name="pelayanan_fe" class="form-control" value="1"> Fe (tab/botol)
                                                    </div>
                                                </div>
                                                <br>
                                            </div>
                                        </div>

                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Laboratorium</a>
                                            </h4>
                                        </div>
                                        <div id="collapse4" class="panel-collapse collapse ">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <input type="checkbox" name="lab_hb" class="form-control" value="1"> HB (Gr/dl)
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="checkbox" name="pretein_urin" class="form-control" value="1"> Pretein Urin(+/-
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="checkbox" name="gula_darah" class="form-control" value="1"> Gula Darah(+/-)
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="checkbox" name="thalasemia" class="form-control" value="1"> Thalasemia(+/-)
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="checkbox" name="sifilis" class="form-control" value="1"> Sifilis(+/-)
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="checkbox" name="hbs" class="form-control" value="1"> HbsAG
                                                    </div>
                                                </div>
                                                <br>
                                            </div>
                                        </div>


                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Integrasi Program</a>
                                            </h4>
                                        </div>
                                        <div id="collapse5" class="panel-collapse collapse ">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for=""> VCT </label>
                                                            <input type="text" class="form-control" name="vct">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for=""> Serologi </label>
                                                            <input type="text" class="form-control" name="serologi">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for=""> ARV Profifalkis </label>
                                                            <input type="text" class="form-control" name="arv">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for=""> Malaria </label>
                                                            <input type="text" class="form-control" name="malaria">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for=""> Obat </label>
                                                            <input type="text" class="form-control" name="obat">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for=""> Kelambu Berintektisida</label>
                                                            <input type="text" class="form-control" name="kelambu">
                                                        </div>

                                                    </div>
                                                    <div class="col-md-4">

                                                        <div class="form-group">
                                                            <label for=""> TB </label>
                                                            <input type="text" class="form-control" name="tb2">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for=""> Resiko Terdeteksi Oleh </label> <br>
                                                            <input type="radio"  name="resiko" value="nakes"> Nakes
                                                            <input type="radio" name="resiko" value="non_nakes"> Non Nakes
                                                        </div>

                                                        <div class="form-group">
                                                            <label for=""> Komplikasi </label> <br>
                                                            <input type="checkbox" name="hdk" value="1"> H D K <br>
                                                            <input type="checkbox" name="abortus" value="1"> Abortus <br>
                                                            <input type="checkbox" name="pendarahan" value="1"> Pendarahan <br>
                                                            <input type="checkbox" name="infeksi" value="1"> Infeksi <br>
                                                            <input type="checkbox" name="kpd" value="1"> K P D <br>
                                                            <input type="checkbox" name="lainnya" value="1"> Lainnya <br>
                                                        </div>


                                                        <div class="form-group">
                                                            <label for=""> Kegiatan Rujukan </label> <br>
                                                            <input type="checkbox" name="puskesmas" value="1"> Puskesmas <br>
                                                            <input type="checkbox" name="rb" value="1"> R B <br>
                                                            <input type="checkbox" name="rsia" value="1"> RSIA / RSB <br>
                                                            <input type="checkbox" name="rs" value="1"> RS <br>
                                                            <input type="checkbox" name="lainnya" value="1">Lainnya <br>
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

    url = "<?php echo site_url('kohort/ibu_hamil/add_kohort')?>";
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
