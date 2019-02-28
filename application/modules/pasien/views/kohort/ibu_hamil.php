<?php
/**
 * Created by PhpStorm.
 * User: robikurniawan
 * Date: 2019-02-24
 * Time: 04:27
 */
?>

<style>
    .table-bordered, .table-bordered td, .table-bordered th{
        text-align: center;
        color: #0c1312;
    }




</style>
<div class="row">
    <div class="col-md-12">
        <a href="" class="btn btn-danger"><i class="fa fa-file-pdf"></i> Export PDF </a>
    </div>
<!--    <div class="col-md-4">-->
<!--        <table class="table">-->
<!--            <tr>-->
<!--                <td>PUSKESMAS</td>-->
<!--                <td>:</td>-->
<!--                <td>BONTOBAHARI</td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td>ALAMAT</td>-->
<!--                <td>:</td>-->
<!--                <td>DESA ARA, KECAMATAN BONTOBAHARI</td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td>TELP / FAX</td>-->
<!--                <td>:</td>-->
<!--                <td>0413 - 2586322</td>-->
<!--            </tr>-->
<!---->
<!---->
<!--        </table>-->
<!--    </div>-->
    <div class="col-md-4"></div>
    <div class="col-md-4"></div>
    <div class="col-md-12">
        <div class="table-responsive">
        <table class="table table-bordered">
            <tr style="background-color: #1e72f74f;">
                <td colspan="8" rowspan="2">Register</td>
                <td colspan="13">Pemeriksaan</td>
                <td rowspan="3">Konseling <br><br></div></td>
                <td rowspan="3">Status Imunisasi <br><br> </div></td>
                <td colspan="3" rowspan="2">Pelayanan</td>
                <td colspan="6" rowspan="2">Laboratorium</td>
                <td colspan="8">Integrasi Program</td>
                <td rowspan="2" colspan="2">Resiko Terdeteksi Oleh</td>
                <td rowspan="2" colspan="6">Komplikasi</td>
                <td colspan="7">Kegiatan Rujukan</td>
            </tr>
            <tr style="background-color: #1e72f74f;">
                <td colspan="8">Ibu</td>
                <td colspan="5">Bayi</td>
                <td colspan="6">PMTCT</td>
                <td colspan="2">TB</td>
                <td colspan="5" >Fasilitas Kesehatan</td>
                <td rowspan="2">Keadaan Tiba</td>
                <td rowspan="2">Keadaan Pulang</td>
            </tr>
            <tr style="background-color: #1e72f74f;">
                <td>Tanggal</td>
                <td>No.Ibu</td>
                <td>Nama Ibu</td>
                <td>Alamat</td>
                <td> Usia </td>
                <td>Jamkesnas </td>
                <td>Usia Kehamilan </td>
                <td>Trimester ke </td>
                <td>Anamnesis</td>
                <td>BB (Kg) </td>
                <td>Tinggi Badan (cm)</td>
                <td>TD (mmHG)</td>
                <td>TFU (cm)</td>
                <td>LILA (cm)</td>
                <td>Status Gizi (M/N)</td>
                <td>Refleks Patella</td>

                <td>DJJ </td>
                <td>Kepala THD PAP</td>
                <td>TBJ (Gr)</td>
                <td>Jumlah Janin</td>
                <td>Persentasi</td>


                <td> Injeksi TT </td>
                <td> Catat di buku KIA </td>
                <td> Fe (Tab/botol) </td>

                <td> HB (gr/dl) </td>
                <td> Pretein Urin</td>
                <td> Gula Darah</td>
                <td> Thalasemia </td>
                <td> Sifilis </td>
                <td> HBsAG </td>

                <td> VCT </td>
                <td> Serologi </td>
                <td> ARV Profifalksis </td>
                <td> Malaria </td>
                <td> Obat </td>
                <td> Kelambu </td>
                <td> TB </td>
                <td> Obat </td>

                <td>Nakes</td>
                <td>Non Nakes</td>

                <td>HDK</td>
                <td>Abortus</td>
                <td>Pendarahan</td>
                <td>Infeksi</td>
                <td>KPD</td>
                <td>Lain-Lain</td>

                <td>Puskesmas</td>
                <td>R B</td>
                <td>RSIA / RSB</td>
                <td>RS</td>
                <td>Lain - Lain</td>
            </tr>

            <tr style="font-style: italic;">
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
                <td>8</td>
                <td>9</td>
                <td>10</td>
                <td>11</td>
                <td>12</td>
                <td>13</td>
                <td>14</td>
                <td>15</td>
                <td>16</td>
                <td>17</td>
                <td>18</td>
                <td>19</td>
                <td>20</td>
                <td>21</td>
                <td>22</td>
                <td>23</td>
                <td>24</td>
                <td>25</td>
                <td>26</td>
                <td>27</td>
                <td>28</td>
                <td>29</td>
                <td>30</td>
                <td>31</td>
                <td>32</td>
                <td>33</td>
                <td>34</td>
                <td>35</td>
                <td>36</td>
                <td>37</td>
                <td>38</td>
                <td>39</td>
                <td>40</td>
                <td>41</td>
                <td>42</td>
                <td>43</td>
                <td>44</td>
                <td>45</td>
                <td>46</td>
                <td>47</td>
                <td>48</td>
                <td>49</td>
                <td>50</td>
                <td>51</td>
                <td>52</td>
                <td>53</td>
                <td>54</td>
                <td>55</td>
            </tr>
            <?php
            function cek ($nilai){
                if ($nilai == 1)
                {
                    $cek = "<i class='fa fa-check'></i>";
                }else{
                    $cek = "-";
                }

                return $cek;
            }
                foreach ($ibu_hamil AS $value):

            ?>
            <tr>
                <td><?= tgl_indo($value->tgl_periksa) ?></td>
                <td><?= $value->nik ?></td>
                <td><?= $value->nm_pasien ?></td>
                <td><?= $value->alamat ?></td>
                <td><?= get_age($value->tgl_lahir) ?> Tahun </td>
                <td><?= $value->jamkesnas ?></td>
                <td><?= $value->usia_kehamilan ?> Bulan</td>
                <td><?= $value->trimester_ke ?></td>
                <td><?= $value->anamnesis ?> </td>
                <td><?= $value->bb ?> </td>
                <td><?= $value->tb ?>  </td>
                <td><?= $value->td ?>  </td>
                <td><?= $value->tfu ?>  </td>
                <td><?= $value->lila ?>  </td>
                <td><?= $value->status_gizi ?>  </td>
                <td><?= $value->refleks ?>  </td>
                <td><?= $value->djj ?>  </td>
                <td><?= $value->pap ?>  </td>
                <td><?= $value->tbj ?>  </td>
                <td><?= $value->persentasi ?>  </td>
                <td><?= $value->jumlah_janin ?>  </td>
                <td></td>
                <td></td>
                <td><?= cek($value->pelayanan_injeksi) ?>  </td>

                <td><?= cek($value->pelayanan_kia ) ?> </td>
                <td><?= cek($value->pelayanan_fe ) ?>  </td>
                <td><?= cek($value->lab_hb ) ?>  </td>
                <td><?= cek($value->pretein_urin ) ?>  </td>
                <td><?= cek($value->gula_darah ) ?>  </td>
                <td><?= cek($value->thalasemia ) ?>  </td>
                <td><?= cek($value->sifilis ) ?>  </td>
                <td><?= cek($value->hbs ) ?>  </td>
                <td><?= $value->vct ?>  </td>
                <td><?= $value->serologi ?>  </td>
                <td><?= $value->arv  ?>  </td>
                <td><?= $value->malaria  ?>  </td>
                <td><?= $value->obat  ?>  </td>
                <td><?= $value->kelambu  ?>  </td>
                <td><?= $value->tb2  ?>  </td>
                <td><?= $value->obat2  ?>  </td>
                <td><?= $value->resiko  ?>  </td>
                <td><?= $value->resiko  ?>  </td>
                <td><?= cek($value->hdk ) ?>  </td>
                <td><?= cek($value->abortus ) ?>  </td>
                <td><?= cek($value->pendarahan ) ?>  </td>
                <td><?= cek($value->infeksi ) ?> </td>
                <td><?= cek($value->kpd ) ?>  </td>
                <td><?= cek($value->lainnya ) ?> </td>
                <td><?= cek($value->puskesmas ) ?></td>
                <td><?= $value->rb  ?>  </td>
                <td><?= $value->rsia  ?>  </td>
                <td><?= $value->rs  ?> </td>
                <td><?= $value->lainnya_rujukan  ?>  </td>
                <td><?= $value->keadaan_tiba  ?>  </td>
                <td><?= $value->keadaan_pulang  ?>  </td>
                <td><?= $value->konseling  ?>  </td>
                <td><?= $value->status_imunisasi  ?>  </td>

            </tr>
            <?php endforeach; ?>
        </table>
        </div>

    </div>
</div>
