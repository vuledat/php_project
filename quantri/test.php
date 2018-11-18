<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form đăng ký</title>
	<script language="javascript">
		function checkform() {
			var name = document.forms['form1'].txtname.value;
			var age = document.forms['form1'].txtage.value;
			if(name == '') {
				alert('Bạn cần nhập tên !');
				document.forms['form1'].txtname.focus();
				return;
			}
			if(age == '') {
				alert('Bạn cần nhập tuổi !');
				document.forms['form1'].txtage.focus();
				return;
			}
			if(isNaN(age)) {
				alert('Tên phải là một chữ số !');
				document.forms['form1'].txtage.focus();
				return;
			}
			if(document.forms[0].rdgender[0].checked == false && document.forms[0].rdgender[1].checked == false) {
				alert('Bạn cần chọn một giới tính !'); 
				document.all.rdgender[0].focus();
				return;
			}
			document.forms['form1'].action = 'display.php';
			document.forms['form1'].submit();
		}
	</script>
</head>
<body>
	<form name="form1" method="post" action="">
		<table width="500" border="0">
			<tr>
				<td colspan="2" align="center"><strong>Form đăng ký</strong></td>
			</tr>
			<tr>
				<td width="111">Tên:</td>
				<td width="373"><input name="txtname" type="text" id="txtname" size="40"></td>
			</tr>
			<tr>
				<td>Tuổi:</td>
				<td><input name="txtage" type="text" size="40"></td>
			</tr>
			<tr>
				<td>Giới tính:</td>
				<td><input type="radio" name="rdgender" id="radio" value="male">
					Nam
					<input type="radio" name="rdgender" id="radio2" value="female">
				Nữ</td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="button" name="button" id="button" value="Đăng ký" onClick="checkform()"></td>
			</tr>
		</table>
	</form>
</body>
</html>