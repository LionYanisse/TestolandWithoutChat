
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
$title='Popularit�';
$css='../css/style2.css';
$include='../bbs/includes/';
include($include.'config.php');//infos SQL, version, error etc...
mysql_connect($serveur, $name, $password);
mysql_select_db($db);

include($include.'haut.php'); //<DOCTYPE...
include($include.'left.php'); // Header + menu
?>
<!-- main content -->

<td valign="top">
<table width="630" border="0" cellspacing="0" cellpadding="5">
        <tr>
          <td valign="top">
            <table width="435" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td align="left">

                </td>
              </tr>
              <tr>
                
           

              <tr><td><img src="/img/spacer.gif" width="435" height="10"></td></tr>
              <tr>
                <td align="left"><img src="/img/bg_top_petitbleu.gif" width="435" height="11"></td>

              </tr>
              <tr>
                <td bgcolor="#DCEAF5">
                  <table width="100%"  border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td>
					<center>
						
						<a href="/lapino/">Lapino's Race</a>&nbsp;&nbsp;�&nbsp;&nbsp;<a href="/capture/">Capture The Flag</a>&nbsp;&nbsp;�&nbsp;&nbsp;<a href="/speedmaze/">SpeedMaze</a><br />&nbsp;&nbsp;�&nbsp;&nbsp;<a href="/bombkick/">Bomb Bomb Kick</a>
					
                          </center>
                      </td>
                    </tr>
                  </table>
                </td>

              </tr>
              <tr>
                <td><img src="/img/bg_bottom_petitbleu.gif" width="435" height="11"></td>
              </tr>




              
              
              







            </table>
       
        </tr>
</table>
<?php
include('../bbs/includes/bas.php'); 
?>