<div class="content-header">
    <div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Menu</a></li>
                <li class="breadcrumb-item"><a href="#">Report</a></li>
                <li class="breadcrumb-item active" aria-current="page">Jatuh Tempo Outlet</li>
            </ol>
        </nav>
        <h4 class="content-title">Jatuh Tempo Outlet</h4>
    </div>
</div>
<?php
	$cari	= $secu->injection(@$_GET['cari']);
	$pecah	= explode('_', $cari);
?>
<input type="hidden" name="caridata" id="caridata" value="<?php echo($cari); ?>" readonly="readonly" />
<input type="hidden" name="halaman" id="halaman" value="1" readonly="readonly" />
<input type="hidden" name="maximal" id="maximal" value="15" readonly="readonly" />
<div class="content-body">
	<div class="row mg-b-10">
        <div class="col-sm-6">
			<a href="#modal1" onclick="<?php echo("caridata('caritanggal', 'rjtoutlet', '$cari')"); ?>" data-toggle="modal"><button class="btn btn-warning btn-pill btn-xs"><i class="fa fa-search"></i> Cari Data</button></a>
			<a href="<?php echo("$sistem/rjtoutlet"); ?>" title="Refresh"><button class="btn btn-info btn-pill btn-xs"><i class="fa fa-spinner"></i> Refresh</button></a>
        	<?php echo(($data->akses($admin, $menu, 'A.read_status')==='Active') ? '<a target="_blank" href="'.$sistem.'/laporan/xps/rjtoutlet/rjtoutlet.php?key='.$cari.'" title="XPS"><button class="btn btn-danger btn-pill btn-xs"><i class="fa fa-print"></i> XPS</button></a>' : ''); ?>
        	<?php echo(($data->akses($admin, $menu, 'A.read_status')==='Active') ? '<a target="_blank" href="'.$sistem.'/laporan/xls/rjtoutlet/rjtoutlet.php?key='.$cari.'" title="XLS"><button class="btn btn-success btn-pill btn-xs"><i class="fa fa-print"></i> XLS</button></a>' : ''); ?>
        </div>
        <div class="col-sm-6">
			<span class="badge badge-pill badge-danger"><i class="fa fa-search"></i> <?php echo("Kata Kunci : ".@$pecah[0]." | Periode I : ".@$pecah[1]." | Periode II : ".@$pecah[2]); ?></span>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-hover mg-b-0">
            <thead>
                <tr>
                    <th><center>#</center></th>
                    <th>No. Faktur</th>
                    <th>Outlet</th>
                    <th>Tgl. Faktur</th>
                    <th>No. PO</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Jatuh Tempo</th>
                </tr>
            </thead>
            <tbody id="isitabel"></tbody>
        </table>
        <div class="mg-t-10">
            <nav aria-label="Page navigation example">
                <ul class="pagination pagination-circle mg-b-0" id="paginasi"></ul>
            </nav>
		</div>
    </div>
</div>