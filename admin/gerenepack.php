
<?php

define('IN_PHPBB', true);
$phpbb_root_path = '../bbs/';
include($phpbb_root_path . 'extension.inc');
include($phpbb_root_path . 'common.'.$phpEx);

//
// Start session management
//
$userdata = session_pagestart($user_ip, PAGE_PROFILE);
init_userprefs($userdata);
$title='Administration';
$css='../css/style2.css';
$include='../bbs/includes/';
include($include.'config.php');//infos SQL, version, error etc...
mysql_connect($serveur, $name, $password);
mysql_select_db($db);

include($include.'haut.php'); //<DOCTYPE...
include($include.'left.php'); // Header + menu
?>

  <!-- main content -->
<td valign="top"><table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">

</table>

<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="435" height="30" align="middle">
  <param name="allowScriptAccess" value="sameDomain" />
  <param name="movie" value="http://www.chapatiz.com/img/subtop2.swf" />
  <param name="wmode" value="transparent" />

  <param name="menu" value="false" />
  <param name="quality" value="high" />
  <param name="FlashVars" value="title=Administration" />
  <embed src="http://www.chapatiz.com/img/subtop2.swf"
            flashvars="title=Administration"
            menu="false" wmode="transparent" quality="high" width="435" height="30" align="middle" allowscriptaccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object>
<table width="504" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="11" height="11"><img src="/img/beige_hg.gif" width="11" height="11" /></td>
    <td height="11" bgcolor="#FFF4D5"></td>
    <td width="11" height="11"><img src="/img/beige_hd.gif" width="11" height="11" /></td>

  </tr>
  <tr>
    <td width="11" bgcolor="#FFF4D5"></td>
    <td bgcolor="#FFF4D5"><table border="0" cellpadding="3" cellspacing="1" width="100%">
      <tr>
        <td colspan="2" align="center">&nbsp;</td>
      </tr>
      <tr>
        <td width="45%" align="left"><span class="gen"><?php
if (!isset($userdata['session_logged_in'])) {
	echo 'Il faut se connecter et �tre cr�ateur pour avoir acces a l\'administration !';
}
else if($userdata['username'] == "Anonymous"){
	echo 'Il faut se connecter et �tre cr�ateur pour avoir acces a l\'administration !';
}
else if($userdata['user_level'] == "1")
{
	$quete5 = mysql_query('DELETE FROM shopping');
	$quete5 = mysql_query('ALTER TABLE `shopping` AUTO_INCREMENT = 0');
	$result = mysql_query("SELECT * FROM random_packs ORDER BY id");
	while($row = mysql_fetch_array($result))
	{
		$tableau_pack = array(
			'id' => $row['id'],
			'name' => $row['name'],
			'items' => $row['items'],
			'type' => $row['type'],
			'name_bd' => $row['name_bd'],
			'description' => $row['description'],
			'price' => $row['price']
		);
	}
	$rand_keys = array_rand($tableau_pack, 8);
	$i = 0;
	while($i <= 8)
	{
			$name = $tableau_pack[$rand_keys[$i]['name']];
			$items = $tableau_pack[$rand_keys[$i]['items']];
			$type = $tableau_pack[$rand_keys[$i]['type']];
			$name_bd = $tableau_pack[$rand_keys[$i]['name_bd']];
			$description = $tableau_pack[$rand_keys[$i]['description']];
			$price = $tableau_pack[$rand_keys[$i]['price']];
			$req = "INSERT INTO shopping (id,name,name_bd,prix,description,items,type) VALUES('','$name','$name_bd','$price','$description','$items','$type')"; 
  			mysql_query($req);
			$i++;
	}
	echo 'Les nouveaux packs ont �t� g�n�r�s !';
}
else
{
	echo 'Il faut se connecter et �tre cr�ateur pour avoir acces a l\'administration !';
}
?></span></td>
      </tr>
	  
    </table></td>
    <br />
    <br />
    <div align="center"></div>
    <td width="11" bgcolor="#FFF4D5"></td>

  </tr>
  <tr>
    <td width="11" height="11"><img src="/img/beige_bg.gif" width="11" height="11" /></td>
    <td height="11" bgcolor="#FFF4D5"></td>
    <td width="11" height="11"><img src="/img/beige_bd.gif" width="11" height="11" /></td>
  </tr>
</table>
</form>

<head>
<style type="text/css">
.style1 {
	color: #FF3399;
}
.style2 {
	color: #FFFFFF;
}

</style>
</head>
</style>
</head>
<?php
include('../bbs/includes/bas.php'); 
?>