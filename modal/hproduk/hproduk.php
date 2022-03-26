<?php
	require_once('../../config/connection/connection.php');
	require_once('../../config/connection/security.php');
	require_once('../../config/function/data.php');
	$secu	= new Security;
	$base	= new DB;
	$data	= new Data;
	$conn	= $base->open();
	$modal	= $secu->injection(@$_GET['modal']);
	switch($modal){
		case "input":
		$kode	= $secu->injection($_GET['keycode']);
		$read	= $conn->prepare("SELECT kode_pro, nama_pro FROM produk WHERE id_pro=:kode");
		$read->bindParam(':kode', $kode, PDO::PARAM_STR);
		$read->execute();
		$view	= $read->fetch(PDO::FETCH_ASSOC);
?>
        <div class="modal-header">
            <h6 class="modal-title" id="exampleModalLabel">Input Data - Harga Produk</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="fa fa-times-circle"></i></span>
            </button>
        </div>
        <form id="formtransaksi" action="#" method="post" autocomplete="off">
        <input type="hidden" name="nmenu" id="nmenu" value="hproduk" readonly="readonly" />
        <input type="hidden" name="nact" id="nact" value="input" readonly="readonly" />
        <input type="hidden" name="keycode" id="keycode" value="<?php echo($kode); ?>" readonly="readonly" />
        <div class="modal-body">
            <div class="row">
                <div class="form-group col-md-12">
                    <label>Nama <span class="tx-danger">*</span></label>
                    <input type="text" name="nama" class="form-control" value="<?php echo("$view[nama_pro] - $view[kode_pro]"); ?>" readonly="readonly" />
                </div>
			</div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Harga <span class="tx-danger">*</span></label>
                    <input type="text" name="harga" id="harga" class="form-control" onkeyup="angka(this)" placeholder="0" required="required" />
                    <div id="imgloading"></div>
                </div>
                <div class="form-group col-md-6">
                    <label>Harga + PPN <span class="tx-danger">*</span></label>
                    <input type="text" name="hargappn" id="hargappn" class="form-control" onkeyup="angka(this)" placeholder="0" required="required" />
                </div>
			</div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-xs" data-dismiss="modal">Batal</button>
            <button type="submit" id="bsave" class="btn btn-dark btn-xs">Simpan</button>
        </div>
		</form>
<?php
		break;
	}
	$conn	= $base->close();
?>
	<script type="text/javascript" src="<?php echo($data->sistem('url_sis').'/config/js/fazlurr.js'); ?>"></script>