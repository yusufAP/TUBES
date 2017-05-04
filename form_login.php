<div align="right">
	<form  align="center" class id="form1" method="post" action="<?php echo base_url('index.php/login/Aksilogin')?>">
		<table>
			<br>
			<br>
			<br>
			<br>
			<tr>
				<td><input type="text" name="username" placeholder="Masukan username" class="form-control"></td>
			</tr>
			<tr>
				<td><input type="password" name="password" placeholder="Masukan password" class="form-control"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Log in" class="btn btn-success btn-small"></td> 
			</tr>
			<tr>
				<td><a  href="<?php echo base_url();?>index.php/buatakun"><u>Buat Akun?</u></a></td>
			</tr>
		</table>
	</form>
</div>