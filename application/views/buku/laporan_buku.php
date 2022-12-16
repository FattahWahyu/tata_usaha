<!-- Begin Page Content -->

<div class="container-fluid">

	<?= $this->session->flashdata('pesan'); ?>

	<div class="row" style="overflow: auto;">

		<div class="col-lg-12">

			<?php if (validation_errors()) { ?>

				<div class="alert alert-danger" role="alert">

					<?= validation_errors(); ?>

				</div>

			<?php } ?>

			<?= $this->session->flashdata('pesan'); ?>

			<a href="<?= base_url('laporan/cetak_laporan_buku'); ?>" class="btn btn-danger mb-3"><i class="fas fa-print"></i> Print</a>

			<a href="<?= base_url('laporan/export_excel'); ?>" class="btn btn-success mb-3"><i class="far fa-file-excel"></i> Export ke Excel</a>

			<table class="table table-hover">

				<thead>

					<tr>

						<th scope="col">#</th>

						<th scope="col">Nama Barang</th>

						<th scope="col">Pemilik Toko</th>

						<th scope="col">Nama Toko</th>

						<th scope="col">Tahun Pembelian</th>

						<th scope="col">Nomor WA</th>

						<!-- <th scope="col">Stok</th> -->

						<th scope="col">Dibeli</th>

					</tr>

				</thead>

				<tbody>

					<?php

					$a = 1;

					foreach ($buku as $b) { ?>

						<tr>

							<th scope="row"><?= $a++; ?></th>

							<td><?= $b['nama']; ?></td>

							<td><?= $b['pengarang']; ?></td>

							<td><?= $b['penerbit']; ?></td>

							<td><?= $b['tahun_terbit']; ?></td>

							<td><?= $b['isbn']; ?></td>

							<td><?= $b['dibooking']; ?></td>

						</tr>

					<?php } ?>

				</tbody>

			</table>

		</div>

	</div>

</div>

<!-- /.container-fluid -->

</div>

<!-- End of Main Content -->