<?php

/*---PHP Strucure---Beta-------
  ---by DarkSATAN--------------
  ---Page Annuaire pour chimboland---*/


if(!isset($_COOKIE[$p_cookie.'sid']))
{ include($include.'connect.php'); } else {
if(isset($_GET['mid'])) // Si, la personne veut acc�der au profil d'un membre
{
/*design : 1*/

include('style_view.php');
}
else 
//Revenons � nous moutons..A NOS PAPILLON *chante* ...Si il veut rechercher le membre ou comme un b�ta a cliqu� simplement sur le lien "Annuaire"....*chante encore...*
{
/*design 3 */

include('style_search.php');
} }


?>
