<?php
/**
 * Created by PhpStorm.
 * User: robikurniawan
 * Date: 2019-02-24
 * Time: 02:34
 */
?>

<?= preload(); ?>


<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-6 align-self-center">
            <h1 class="page-title"><?= $profil->nm_pasien ?></h1>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pasien</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-6">
            <button class="btn btn-outline-secondary waves-effect waves-light  pull-right" onclick="loadContent('pasien/detail/<?= $profil->nik ?>') "><i class="fa fa-refresh"></i> Refresh</button>

        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <center>
                            <img src="<?= base_url()?>assets/img/icon/xavatar.png" class="img-responsive" width="70%" alt="">
                            </center>
                        </div>
                        <div class="col-md-8">
                            <table class="table table-hover ">
                                <tr>
                                    <td width="25%">NIK</td>
                                    <td width="2%">:</td>
                                    <td><?= $profil->nik ?></td>
                                </tr>
                                <tr>
                                    <td width="15%">Nama Pasien</td>
                                    <td width="2%">:</td>
                                    <td><?= $profil->nm_pasien ?></td>
                                </tr>

                                <tr>
                                    <td width="15%">Alamat</td>
                                    <td width="2%">:</td>
                                    <td><?= $profil->alamat ?></td>
                                </tr>
                                <tr>
                                    <td width="15%">Tempat / Tanggal Lahir</td>
                                    <td width="2%">:</td>
                                    <td><?= $profil->tempat_lahir ?>, <?= tgl_indo($profil->tgl_lahir)?></td>
                                </tr>

                                <tr>
                                    <td width="15%">Jamkesnas</td>
                                    <td width="2%">:</td>
                                    <td><?= $profil->jamkesnas ?></td>
                                </tr>

                                <tr>
                                    <td width="15%">Pemeriksaan Terakhir</td>
                                    <td width="2%">:</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td width="15%">Pemeriksaan Selanjutnya</td>
                                    <td width="2%">:</td>
                                    <td><b></b> </td>
                                </tr>








                            </table>
                        </div>
                    </div>
                    <div class="col-md-12">

                        <ul class="nav nav-pills mt-4 mb-4">
                            <li class="nav-item nav-tab-custom" style="width: 25%; text-transform: uppercase; text-align: center; font-weight: bold;"> <a href="#navpills-top1" class="nav-link active show" data-toggle="tab" aria-expanded="false">Kohort Ibu Hamil</a> </li>
                            <li class="nav-item nav-tab-custom" style="width: 25%; text-transform: uppercase; text-align: center; font-weight: bold;"> <a href="#navpills-top2" class="nav-link" data-toggle="tab" aria-expanded="false">Kohort Persalinan Ibu</a> </li>
                            <li class="nav-item nav-tab-custom" style="width: 25%; text-transform: uppercase; text-align: center; font-weight: bold;"> <a href="#navpills-top3" class="nav-link" data-toggle="tab" aria-expanded="false">Kohort Ibu Nifas</a> </li>
                            <li class="nav-item nav-tab-custom" style="width: 25%; text-transform: uppercase; text-align: center; font-weight: bold;"> <a href="#navpills-top4" class="nav-link" data-toggle="tab" aria-expanded="false">Kohort Bayi</a> </li>
                        </ul>
                        <div class="tab-content br-n pn">
                            <div id="navpills-top1" class="tab-pane active show">
                                <?php require ('kohort/ibu_hamil.php');?>
                            </div>

                            <div id="navpills-top2" class="tab-pane">
2
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
