
    <link rel="stylesheet" href="../bootstrap.min.css">


 <form action="proses-tambah.php" method="POST">
	
<br>
	<label>Nama Petugas :
	<input class="form-control" type="text" name="pe_name"></label><br>

	<label>Tanggal Maintenance :
	<input class="form-control" type="date" name="mt_tgl"></label><br>

	<label>Identity : 
	<input class="form-control" type="text" name="identity"></label><br>

	<label>SSID : 
	<input class="form-control" type="text" name="ssid"></label><br>

	<label>Nama Access Point : 
	<select class="form-control" name="mt_name_ap">
		<option value="AP SMK Barat">AP SMK Barat</option>
		<option value="AP SMK Barat Tengah">AP SMK Barat Tengah</option>
		<option value="AP SMK Timur">AP SMK Timur</option>
	</select></label><br>

	<label>Signal : </label>
	
	<label>tx<input class="form-control" type="number" name="stx"></label>
	<label>rx<input class="form-control" type="number" name="srx"></label><br>

	<label>CCQ : <input class="form-control" type="text" name="ccq"></label><br>

	<label>IP Address Client : <input class="form-control" type="text" name="ip"></label><br>

	<label>Wireless Protocol :
	<select class="form-control" name="protocol" >
		<option value="NV2">NV2</option>
		<option value="NSTREME">NSTREME</option>
		<option value="NV2 NSTREME">NV2 NSTREME</option>
		<option value="NV2 NSTREME 802.11">NV2 NSTREME 802.11</option>
		<option value="ANY">ANY</option>
	</select></label><br>

	<label>Band : </label>

	<label><input type="radio" name="band" value="2GHz" checked>2GHz</label>
	<label><input type="radio" name="band" value="5GHz">5GHz</label><br>

	<label><input type="checkbox" name="band">Only B</label>
	<label><input type="checkbox" name="band">Only G</label>
	<label><input type="checkbox" name="band">Only N</label>
	<label><input type="checkbox" name="band">AC</label>
	<label><input type="checkbox" name="band">B/G</label>
	<label><input type="checkbox" name="band">B/G/N</label>
	<label><input type="checkbox" name="band">G/N</label>
	<br>

	<label>Frequency : <input class="form-control" type="number" name="frequency"></label><br>

	<label>Comment : <textarea cols="40" rows="5" name="mt_comment" placeholder="Ada yang ingin di sampaikan?"></textarea></label><br>




<br><br>
	<button type="submit" name="submit">Simpan</button><br>
	<button type="reset">Reset</button>
</form>