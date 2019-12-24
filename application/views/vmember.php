<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Data Member</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="index.php?page=penghuni">Data Member</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Member</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tab-content">
                    <div class="tab-pane active fontawesome-demo" id="tab1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-topline-red">
                                    <div class="card-head">
                                        <header></header>
                                        <div class="tools">
                                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                        </div>
                                    </div>
                                    <div class="card-body ">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <div class="btn-group">
                                                    <a href="<?=base_url()?>cmember/form/add" id="addRow"
                                                        class="btn btn-info">
                                                        Tambah <i class="fa fa-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <div class="btn-group pull-right">
                                                    <!-- <a class="btn deepPink-bgcolor  btn-outline dropdown-toggle"
                                                        data-toggle="dropdown">Tools
                                                        <i class="fa fa-angle-down"></i>
                                                    </a> -->
                                                    <ul class="dropdown-menu pull-right">
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-print"></i> Print </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-scrollable">
                                            <table class="table table-hover table-checkable order-column full-width"
                                                id="example4" style="width:100%;">
                                                <thead>
            <tr>
                <th>No.</th>
                <!-- <th>Id Member</th> -->
                <th>Kode Member</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Identitas</th>
                <th>Aksi</th>
                </tr>
        </thead>
        <tbody>
            <?php if(empty($qmember)) { ?>
            <tr>
                <td>John</td>
                <td colspan="6">-</td>
            </tr>
            <?php }else {
                $num = 0;
                foreach ($qmember as $rowmember) {
                $num++; ?>
            <tr>
                <td>
                    <?=$num?>
                </td>
                <td>
                    <?=$rowmember->kode_member?>
                </td>
                <td>
                    <?=$rowmember->nama?>
                </td>
                <td>
                    <?=$rowmember->alamat?>
                </td>
                <td>
                    <?=$rowmember->no_identitas?>
                </td>
               <td>
                    <div class="btn-group">
                        <a href="<?=base_url()?>cmember/form/upd/<?=$rowmember->member_id?>" class="btn btn-primary" role="button">
                        <span class="fa fa-pencil"></span></a>
                        <a href="<?=base_url()?>cmember/del/<?=$rowmember->member_id?>" class="btn btn-danger ml-2" onclick="return confirm('Delete all about <?=$rowmember->nama?>')" role="button">
                        <span class="fa fa-trash"></span></a>
                    </div>
                </td>
                                                    </tr>
                                                    <?php }} ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</div>
