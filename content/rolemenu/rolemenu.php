<div class="content-header">
    <div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Menu</a></li>
                <li class="breadcrumb-item"><a href="#">Role</a></li>
                <li class="breadcrumb-item active" aria-current="page">Role Menu</li>
            </ol>
        </nav>
        <h4 class="content-title">Role Menu</h4>
    </div>
</div>
<?php $cari	= $secu->injection(@$_GET['cari']); ?>
<input type="hidden" name="caridata" id="caridata" value="<?php echo($cari); ?>" readonly="readonly" />
<input type="hidden" name="halaman" id="halaman" value="1" readonly="readonly" />
<input type="hidden" name="maximal" id="maximal" value="15" readonly="readonly" />
<div class="content-body">
	<div class="row mg-b-10">
        <div class="col-sm-6">
			<a href="#modal1" onclick="crud('rolemenu', 'input', '')" data-toggle="modal"><button class="btn btn-primary btn-pill btn-xs"><i class="fa fa-plus-circle"></i> Tambah Data</button></a>
			<a href="#modal1" onclick="<?php echo("caridata('caridata', 'rolemenu', '$cari')"); ?>" data-toggle="modal"><button class="btn btn-warning btn-pill btn-xs"><i class="fa fa-search"></i> Cari Data</button></a>
			<a href="<?php echo("$sistem/rolemenu"); ?>"><button class="btn btn-info btn-pill btn-xs"><i class="fa fa-spinner"></i> Refresh</button></a>
        </div>
        <div class="col-sm-6">
			<span class="badge badge-pill badge-danger"><i class="fa fa-search"></i> Search : <?php echo($cari); ?></span>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-hover mg-b-0">
            <thead>
                <tr>
                    <th><center>#</center></th>
                    <th>Admin</th>
                    <th>Sub Menu</th>
                    <th><center>Action</center></th>
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