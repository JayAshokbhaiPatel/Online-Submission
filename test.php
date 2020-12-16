







<form name="form1" method="post" action="Registration.php" enctype="multipart/form-data">
	<table width="100%">
		<tr>
			<td width="100%" height="15%" align="center"></td>
		</tr>
		<tr>
			<td width="100%" height="80%" align="center"><table width="80%"
				border="1" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC">
				<tr bgcolor="#EEEEEE">
					<td colspan="4" align="center">Student
					Information</td>
				</tr>
				<tr>
					<td>First Name <span >*</span> </td>
					<td><input name="first_name" type="text" id="first_name"
						maxlength="50"></td>
						<td>Last Name <span class="stylered">*</span> </td>
						<td><input name="last_name" type="text" id="last_name"
							maxlength="30"></td>
						</tr>
						<tr>
							<td>Gender</td>
							<td><input name="gender" type="radio" value="Male" checked>
								Male
								<input name="gender" type="radio" value="Female">
							Female</td>
							<td>Date Of Birth <span>*</span> </td>
							<td><input name="dob" type="text" id="dob" size="10"
								maxlength="10">
							DD-MM-YYYY</td>
						</tr>
						

						<tr>
							<td> City</td>
							<td><input name="city" type="text" id="city" maxlength="30"></td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr >
							<td>Primary Email <span >*</span> </td>
							<td><input name="email1" type="text" id="email1"
								maxlength="100"></td>
								<td>Secondary Email</td>
								<td><input name="email2" type="text" id="email2"
									maxlength="100"></td>
								</tr>
								<tr >
									<td>Address</td>
									<td colspan="3"><textarea name="address" cols="45" rows="2"
										id="address"></textarea></td>
									</tr>
									<tr >
										<td> Description</td>
										<td colspan="3"><textarea name="description" cols="45" rows="3"
											id="description"></textarea></td>
										</tr>
										<tr bgcolor="#EEEEEE">
											<td colspan="4" align="center">Login
											Information</td>
										</tr>
										<tr>
											<td colspan="4">&nbsp;</td>
										</tr>
										<tr class="stylesmall">
											<td>PRN <span >*</span> </td>
											<td><input name="PRN" type="text" id="PRN" maxlength="20"></td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
										</tr>
										<tr >
											<td>Password <span >*</span> </td>
											<td><input name="password" type="password" id="password"
												maxlength="20"></td>
												<td align="right">Retype Password<span> *</span>
												</td>
												<td><input name="retype" type="password" id="retype"
													maxlength="20"></td>
												</tr>

											</table>
										</form>
									</body>
									</html>