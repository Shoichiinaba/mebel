<div class="body">
	<section class="content-header">
		<h1>Daftar Barang</h1>
	</section>
	<div class="panel-table">
		<table class="table">
        <thead>
          <tr>
            <th>NAMA</th>
            <th>NIP</th>
            <th>NAMA BARANG</th>
            <th>KODE BARANG</th>
            <th>UKURAN</th>
            <th>JUMLAH</th>
            <th>WARNA</th>
            <th>BUYER</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php
          	foreach ($data as $value) {
          		?>
          		<tr>
          			<td><?=$value['nama']; ?></td>
          			<td><?=$value['nip']; ?></td>
          			<td><?=$value['nama_barang']; ?></td>
          			<td><?=$value['kode_barang']; ?></td>
          			<td><?=$value['ukuran']; ?></td>
          			<td><?=$value['jumlah']; ?></td>
          			<td><?=$value['warna']; ?></td>
          			<td><?=$value['buyer']; ?></td>
          			<td>
            			<a href="<?=base_url(); ?>index.php/Ctrl_app/editable?id=<?=$value['id']; ?>"><button type="button" class="btn btn-xs btn-warning">Edit</button></a>
            			<a href="<?=base_url(); ?>index.php/C_proses/hapus?id=<?=$value['id']; ?>" onClick="return confirm('Apakah yakin ingin menghapus data ini')"><button type="button" class="btn btn-xs btn-danger">Hapus</button>
            		</td>
          		</tr>
          <?php
          	}
          ?>
        </tbody>
      </table>
	</div>
	<div class='clear'>
		<a href="<?=base_url().'index.php/Ctrl_app/cetak'?>" class='ft-left'>
			<button type="button" class="btn btn-primary">Cetak</button>
		</a>
		<a href="<?=base_url().'index.php/Ctrl_app/tambah'?>" class='ft-right'>
			<button type="button" class="btn btn-primary">Kembali</button>
		</a>
	</div>
</div>