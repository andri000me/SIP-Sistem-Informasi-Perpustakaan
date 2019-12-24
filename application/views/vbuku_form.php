<?php


if($act == 'add_save') {
    $buku_id = "";
    $kode_buku = "";
    $judul = "";
    $penerbit = "";
    $pengarang = "";
    $th_terbit = "";
    $jumlah = "";
    $rak = "";
    $ket = "";
    }elseif ($act == 'upd_save') {
    foreach ($qdetbuku as $rowdetbuku) {
        $buku_id = $rowdetbuku->buku_id;
        $kode_buku = $rowdetbuku->kode_buku;
        $judul = $rowdetbuku->judul;
        $penerbit = $rowdetbuku->penerbit;
        $pengarang = $rowdetbuku->pengarang;
        $th_terbit = $rowdetbuku->th_terbit;
        $rak = $rowdetbuku->rak_id;
        $jumlah = $rowdetbuku->jumlah;
        $ket = $rowdetbuku->ket;
        
        
    }
}

?>
<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title"><?=$title?></div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index-2.html">Home</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="<?=base_url()?>cbuku">Data Buku</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li class="active"><?=$title?></li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Informasi Data</header>
                        <button id="panel-button" class="mdl-button mdl-js-button mdl-button--icon pull-right"
                            data-upgraded=",MaterialButton">
                            <i class="material-icons">more_vert</i>
                        </button>
                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                            data-mdl-for="panel-button">
                            <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
                            <li class="mdl-menu__item"><i class="material-icons">print</i>Another action</li>
                            <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
                        </ul>
                    </div>
                    <div class="card-body" id="bar-parent">
                        <form action="<?=base_url()?>cbuku/form/<?=$act?>/<?=$buku_id?>" method="post" id="form_sample_1" class="form-horizontal">
                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Kode Buku
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="kode_buku" data-required="1" placeholder="Kode buku..."
                                            value="<?=$kode_buku?>" class="form-control input-height" /> </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Judul
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="judul" data-required="1" placeholder="Masukkan judul..."
                                            value="<?=$judul?>" class="form-control input-height" /> </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Penerbit
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="penerbit" data-required="1" placeholder="Penerbit..."
                                            value="<?=$penerbit?>" class="form-control input-height" /> </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Pengarang
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="pengarang" data-required="1" placeholder="Pengarang..."
                                            value="<?=$pengarang?>" class="form-control input-height" /> </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Tahun terbit
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="th_terbit" data-required="1" placeholder="Tahun terbit..."
                                            value="<?=$th_terbit?>" class="form-control input-height" /> </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Jumlah
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="jumlah" data-required="1" placeholder="Jumlah..."
                                            value="<?=$jumlah?>" class="form-control input-height" /> </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Rak
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <select class="form-control select2" name="rak_id" id="sel1">
                                            <?php 
                                            foreach($qrak as $qr) {
                                                if ($qr->rak_id == $rowdetbuku->rak_id) {
                                                    echo "<option value=".$qr->rak_id." selected>".$qr->nama_rak
                                                    ."</option>";
                                                }else {
                                                    echo "<option value=".$qr->rak_id.">".$qr->nama_rak
                                                    ."</option>";
                                                }
                                            } ?>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Keterangan
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="ket" data-required="1" placeholder="Keterangan..."
                                            value="<?=$ket?>" class="form-control input-height" /> </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="offset-md-3 col-md-9">
                                        <button name="submit" type="submit" class="btn btn-success m-r-20"><i
                                                class="fa fa-save"></i>
                                            Simpan</button><button
                                                class="btn btn-danger" type="reset" value="reset">
                                                Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

