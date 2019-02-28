<?= preload(); ?>


<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Pasien</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pasien</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-7 align-self-center">

        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div id="flash_message"></div>
                    <div class="header-card-custom">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">Daftar Pasien</h4>
                            </div>
                            <div class="col-md-6">
                                <div class="pull-right">
                                    <button class="btn btn-outline-info waves-effect waves-light" onclick="add_pasien()"><i class="fa fa-plus"></i> Tambah</button>
                                    <button class="btn btn-outline-secondary waves-effect waves-light" onclick="reload_table()"><i class="fa fa-refresh"></i> Refresh</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="table" class="table table-hover" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th width="5%">No.</th>
                                <th>Nama Pasien</th>
                                <th>Alamat</th>
                                <th>Tempat Tanggal Lahir</th>
                                <th>Jamkesnas</th>
                                <th>Detail</th>
                                <th width="15%">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->

</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->






<script type="text/javascript">

var save_method; //for save method string
var table;

$(document).ready(function() {

    //datatables
    table = $('#table').DataTable({

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('pasien/ajax_list')?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        {
            "targets": [ -1 ], //last column
            "orderable": false, //set not orderable
        },
        ],

    });

    //set input/textarea/select event when change value, remove class error and remove text help block
    $("input").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });


});



function add_pasien()
{
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Tambah Pasien'); // Set Title to Bootstrap modal title
}

function edit_pasien(id)
{
    save_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('pasien/ajax_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {

            $('[name="id"]').val(data.id_pasien);
            $('[name="nm_pasien"]').val(data.nm_pasien);
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Pasien'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax
}



function save()
{
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable
    var url;

    if(save_method == 'add') {
        url = "<?php echo site_url('pasien/ajax_add')?>";
        flash =  flash_message_add();
    } else {
        url = "<?php echo site_url('pasien/ajax_update')?>";
        flash =  flash_message_update();
    }

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
                $('#modal_form').modal('hide');
                reload_table();
               
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

function delete_pasien(id)
{
    if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('pasien/ajax_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                //if success reload ajax table
                $('#modal_form').modal('hide');
                reload_table();
                flash_message_deleted();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

    }
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
