<?php


if($act == 'add_save') {
    $member_id = "";
    $kode_member = "";
    $nama = "";
    $alamat = "";
    $no_identitas = "";
    }elseif ($act == 'upd_save') {
    foreach ($qdetmember as $rowdetmember) {
        $member_id = $rowdetmember->member_id;
        $kode_member = $rowdetmember->kode_member;
        $nama = $rowdetmember->nama;
        $alamat = $rowdetmember->alamat;
        $no_identitas = $rowdetmember->no_identitas;
        
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
                    <li><a class="parent-item" href="<?=base_url()?>cmember">Data Member</a>&nbsp;<i
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
                        <form action="<?=base_url()?>cmember/form/<?=$act?>/<?=$member_id?>" method="post" id="form_sample_1" class="form-horizontal">
                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Kode Member
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="kode_member" data-required="1" placeholder="Kode member..."
                                            value="<?=$kode_member?>" class="form-control input-height" /> </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Nama
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="nama" data-required="1" placeholder="Masukkan nama..."
                                            value="<?=$nama?>" class="form-control input-height" /> </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Alamat
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <textarea name="alamat" placeholder="Alamat" class="form-control-textarea"
                                            rows="5"><?=$alamat?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">No Identitas
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="no_identitas" data-required="1" placeholder="No hp"
                                            value="<?=$no_identitas?>" class="form-control input-height" /> </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="offset-md-3 col-md-9">
                                        <button name="submit" type="submit" class="btn btn-success m-r-20"><i
                                                class="fa fa-save"></i>
                                            Simpan</button><button
                                                class="btn btn-danger">
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
