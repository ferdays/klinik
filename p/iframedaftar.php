<link rel="stylesheet" type="text/css" href="../styledaftar.css">

<form action='insertpasien.php' method='post'>
		<font class='k'> Username </font><br>
		<input type='text' name='username' id='username'><br>	
		<font class='k'> Password </font><br>
		<input type='password' name='password' id='password'><br>
		<font class='k'> Nama </font><br>
		<input type='text' name='nama' id='lainlain'><br>
		<font class='k'>Umur</font>
		<br><input name='umur' type='text' id='lainlain' required><br>
		<font class='k'>Jenis Kelamin *</font>
		<br><input name='jeniskelamin' type='radio' class='radio' value='Laki Laki' style='margin-left:20px;background:white;' required>Laki Laki
		<input name='jeniskelamin' type='radio' class='radio' value='Perempuan' style='margin-left:20px;' required>Perempuan<br><br>
		<font class='k'>Gejala Yang Dirasakan</font>
		<br><input name='gejala' type='text' id='lainlain'><br>
		<font class='sk'>Penyakit Yang Pernah Diderita</font>
		<br><input name='penyakitsebelum' type='text' id='lainlain' required><br>
		<font class='k'>Golongan Darah</font>
		<br><input name='golongandarah' type='radio' class='radio' value='A' style='margin-left:20px;background:white;' required>A
		<input name='golongandarah' type='radio' class='radio' value='B' style='margin-left:20px;' required>B
		<input name='golongandarah' type='radio' class='radio' value='AB' style='margin-left:20px;' required>AB
		<input name='golongandarah' type='radio' class='radio' value='O' style='margin-left:20px;' required>O
		<input type='submit' id='submit' value=''>
</form>