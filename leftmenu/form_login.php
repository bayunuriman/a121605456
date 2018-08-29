<head>
<script>
function validasix() { //input check

	if (document.login_form.login_name.value.length<1) {
		alert("Login name harus diisi");
		return false;
	};
	if (document.login_form.login_passwd.value.length<1) {
		alert("Password tidak boleh kosong");
		return false;
	};
	return true;
}

</script>
</head>

<table border="0" cellspacing="0" cellpadding="0" width="100%">
	<TBODY>
    <TR>
       <TD vAlign=top width=26 height=30><IMG src="./images_tampilan/box_left_top.gif"></TD>
       <TD align=middle width="100%" background="./images_tampilan/box_top_bg.gif" height=30>
	   <FONT class=option>&nbsp;&nbsp;<B>Login</B></FONT></TD>
       <TD width=6 height=30><IMG src="./images_tampilan/box_right_top.gif"></TD>
	 </TR>
	 </TBODY>
	</table>
<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
    <TBODY>
    <TR>
    	<TD vAlign=top align=left width=4 background="./images_tampilan/box_left_bg.gif">
		<IMG src="./images_tampilan/box_left_bg.gif">
		</TD>
   		<TD>
    	<TABLE cellSpacing=0 cellPadding=2 border=0>
    	<FORM id=login_form name=login_form action="./index.php?id=konfirmasi" method="post" onSubmit="return validasix(this)">
  		<TBODY>
    		<TR>
    			<TD class=sideboxtext>Login:<BR>
					<INPUT class=field_textbox maxLength=20 size=15 name=login_id><BR>
					Password:<BR>
					<INPUT class=field_textbox type=password maxLength=20 size=15 name=password>
				</TD>
			</TR>
			<TR>
    			<TD class=sideboxtext align=middle>
					<INPUT class=button type=submit value=Login name=submit_login>
				</TD>
			</TR>
		</TBODY>
		</FORM>
		</TABLE><BR>
		<A href="./index.php?id=member"><b>Registrasi ! FREE !</b></A><BR>
		</TD>   				
		<TD vAlign=top align=left width=13 background="./images_tampilan/box_right_bg.gif">
			<IMG src="./images_tampilan/box_right_bg.gif">
   		</TD>
   	</TR>
   	</TBODY>
   	</TABLE>
    
	<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
    	<TBODY>
    		<TR vAlign=top>
    			<TD vAlign=top align=left width=9 height=18>
					<IMG src="./images_tampilan/box_left_bot.gif">
				</TD>
    			<TD align=right width="100%" background="./images_tampilan/box_bot_bg.gif" Height=18>
					<IMG src="./images_tampilan/box_bot.gif">
				</TD>
    			<TD vAlign=top align=left width=18 height=18>
					<IMG src="./images_tampilan/box_right_bot.gif">
				</TD>
			</TR>
		</TBODY>
	</TABLE><BR>
