<?php

header("Cache-Control: no-cache, must-revalidate");

header("Pragma: no-cache");

header("Content-type: application/x-msexcel");

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=Nama_File.xls");

?>





<br />

<table class="table-data" border="1">

	<thead>

		<tr>
			<h3>
				<center>Laporan Data Barang Tata Usaha</center>
			</h3>

			<th>No</th>

			<th>Nama Kategori</th>

			<th>Pemilik Toko</th>

			<th>Nama Toko</th>

			<th>Tahun Pembelian</th>

			<th>Nomor WA</th>

			<th>Jumlah Beli</th>

		</tr>

	</thead>

	<tbody>

		<?php

		$no = 1;

		foreach ($buku as $b) {

		?>

			<tr>

				<th scope="row"><?= $no++; ?></th>

				<td><?= $b['nama']; ?></td>

				<td><?= $b['pengarang']; ?></td>

				<td><?= $b['penerbit']; ?></td>

				<td><?= $b['tahun_terbit']; ?></td>

				<td><?= $b['isbn']; ?></td>

				<td><?= $b['dibooking']; ?></td>

			</tr>

		<?php

		}

		?>

	</tbody>

</table>