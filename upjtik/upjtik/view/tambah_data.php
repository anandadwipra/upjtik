<form action="simpan.php?act=tambah_data_upjtik" method="POST">
	<label>Nama Access Point</label> <br>
<!-- 	<input class="form-control" type="text" name="NamaAP"> -->
	<select name="NamaAP" class="form-control">
		<option value="AP SMK Barat">AP SMK Barat</option>
		<option value="AP SMK Barat Tengah">AP SMK Barat Tengah</option>
		<option value="AP SMK Timur">AP SMK Timur</option>
	</select>

	<label>Identity Router</label>
	<input class="form-control" type="text" name="Identity"><br>

	<label>SSID Router</label>
	<input class="form-control" type="text" name="SSID"><br>

	<label>Signal yang didapatkan</label><br>
	
	tx<input class="form-control" type="number" name="Stx">
	rx<input class="form-control" type="number" name="Srx"><br>

	<label>Nama Petugas</label>
	<input class="form-control" type="text" name="Petugas"><br>

	<label>Tanggal Cek</label>
	<input class="form-control" type="date" name="Tanggal"><br>

	<label>Biaya Sewa Perbulan</label>
	<select name="Sewa" class="form-control">
		<option value="100000">Rp. 100.000 / Bulan</option>
		<option value="125000">Rp. 125.000 / Bulan</option>
		<option value="150000">Rp. 150.000 / Bulan</option>
	</select>

<br><br>
	<button type="submit">Simpan</button>
</form>