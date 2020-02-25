	<?php
		if(isset($_GET['id'])){
			$link_url = base_url().'index.php/C_proses/update?id='.$_GET['id'];
			$btn = '<button type="submit" class="btn btn-primary">Simpan Perubahan</button>';
		}else{
			$link_url = base_url().'index.php/C_proses/insert';
			$btn = '<button type="submit" class="btn btn-primary">Kirim</button>';
			$data = false;
		}
	?>
	<?php
		function getValue($data = false, $key){
			if($data){
				$r = $data[0][$key];
			}else{
				$r = '';
			}
			return $r;
		}
	?>

	<div class="body">
		<section class="content-header">
			<h1>Tambahkan Barang</h1>
		</section>
		<form method="post" action="<?php echo $link_url;?>">
			<div class="form">
				<div class="segmen1">
					<div class="form-group">
						<label>NAMA</label>
						<div class="form-input">
							<input type="text" name="nama" value="<?php echo getValue($data, 'nama');?>"/>
						</div>
					</div>
					<div class="form-group">
						<label>NIP</label>
						<div class="form-input">
							<input type="text" name="nip" value="<?php echo getValue($data, 'nip');?>" />
						</div>
					</div>
					<div class="form-group">
						<label>NAMA BARANG</label>
						<div class="form-input">
							<input type="text" name="nama_barang" value="<?php echo getValue($data, 'nama_barang');?>"/>
						</div>
					</div>
					<div class="form-group">
						<label>KODE BARANG</label>
						<div class="form-input">
							<input type="text" name="kode_barang" value="<?php echo getValue($data, 'kode_barang');?>"/>
						</div>
					</div>
				</div>
				<div class="segmen2">
					<div class="form-group">
						<label>UKURAN</label>
						<div class="form-input">
							<input type="text" name="ukuran" value="<?php echo getValue($data, 'ukuran');?>"/>
						</div>
					</div>
					<div class="form-group">
						<label>JUMLAH</label>
						<div class="form-input">
							<input type="text" name="jumlah" value="<?php echo getValue($data, 'jumlah');?>"/>
						</div>
					</div>
					<div class="form-group">
						<label>WARNA</label>
						<div class="form-input">
							<input type="text" name="warna" value="<?php echo getValue($data, 'warna');?>"/>
						</div>
					</div>
					<div class="form-group">
						<label>BUYER</label>
						<div class="form-input">
							<input type="text" name="buyer" value="<?php echo getValue($data, 'buyer');?>"/>
						</div>
					</div>
				</div>
			</div>
			<div class="panel-btn">
				<?php echo $btn; ?>
			</div>
		</form>
	</div>