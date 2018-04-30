<?php
class Lang{ 
	function Lang() { 
		$this->methodTable = array(
			"getLangArray" => array(
				"description" => "No description given.",
				"arguments" => array(),
				"access" => "remote"
			)
		);
	}

	public function getLangArray(){ 
		$lang =
  array (
    'SERVER_CONNECTION_FAILURE' => 'Impossible de se connecter !!!
Nous allons r�essayer d\'ici quelques secondes !',
    'SERVER_DISCONNECTION' => 'Tu as �t� d�connect�(e) !!!
Le chat va se relancer d\'ici quelques secondes !',
    'DISPATCHER_NAMESPACE_BLUEFOREST' => 'Zone for�t bleue : %c',
    'DISPATCHER_NAMESPACE_KOPABEACH' => 'Zone plages : %c',
    'MEMBERSHIP_E_LOGIN_MISSING_NAME' => 'Tu n\'a pas de pseudo ? :P',
    'MEMBERSHIP_E_LOGIN_MISSING_PASSWORD' => 'Tu n\'a pas de mot de passe ? :P',
    'DISPATCHER_NAMESPACE_BACTERIA' => 'Zone bacteria : %c',
    'DISPATCHER_NAMESPACE_SWAMPS' => 'Zone mar�cages : %c',
    'DISPATCHER_NAMESPACE_WEDDING' => 'Zone mariage : %c',
    'GENERAL_E_ALREADY_CONNECTED' => 'Quelqu\'un est d�j� connect� avec ce membre !!! Nous allons relancer le chat !',
    'GENERAL_E_ALREADY_OPEN' => 'Une fenetre de chat est d�j� ouverte !',
    'GENERAL_E_ROOM_ALREADY_IN' => 'Erreur: d�j� dans la salle !!!',
    'GENERAL_E_ROOM_NO_MORE' => 'Erreur: cette salle n\'existe plus !!!',
    'GENERAL_E_ROOM_NO_AUTHORIZED' => 'Tu ne peux pas aller dans cette salle !',
    'GENERAL_E_ROOM_FULL' => 'Cette salle est pleine, merci de revenir plus tard !',
    'GENERAL_E_DISPATCHER_FULL' => 'Erreur: Impossible de t\'accueillir pour le moment, il y a trop de monde !!! :((
Le chat va se relancer d\'ici quelques secondes !',
    'GENERAL_E_CANT_SAVE' => 'Impossible d\'enregistrer ton score !!! :(( ',
    'GENERAL_E_2CONNECTIONS' => 'Une seule fen�tre de chat � la fois !!! Ferme l\'autre !!!',
    'GENERAL_N_RELAUNCHING' => 'Attention !!! Le serveur va �tre relanc� dans quelques secondes !!!',
    'GENERAL_E_GET_KICKED' => 'Et voila ! Tu as �t� kick� par %b .',
    'MODERATION_X_FERMLA' => '%s arr�te de parler, tu saoules ( %b ) !',
    'MODERATION_X_BOUJPU' => '%s bouge plus pendant %d secondes ( %b ) !',
    'MODERATION_ME_BOUJPU' => '%s bouge plus pendant %d secondes ( %b ) !',
    'MODERATION_X_VATAN' => '%s d�gage de la salle ( %b ) !',
    'MODERATION_X_BYBY' => '%s est parti se toucher pendant %bh !',
    'MODERATION_X_HARDBY' => 'OWNED %s pendant %d, mouahaha.',
    'MODERATION_X_BOMB' => '%s a �t� d�truit !',
    'GROUP_MEMBRE_CONNECT' => 'Tu as vol� le drapeau de %s !',
    'GROUP_MEMBRE_DISCONNECT' => '%s a vol� ton drapeau !',
    'MODERATION_X_UPTIME' => 'Uptime: %s seconde(s)',
    'MODERATION_X_LOCATE' => '%s est dans la salle %s (%s, %s)',
    'MODERATION_X_LOCATE_DISCONNECT' => '%s n\'est pas connect�(e) ou n\'existe pas...',
    'MODERATION_X_PM_DISCONNECT' => '%s n\'est pas connect�(e) ou n\'existe pas...',
    'MODERATION_X_COUNT' => '%s connect�(s)',
    'MODERATION_X_USERIP' => 'IP de %s : %s',
    'MODERATION_ME_LACHNOU' => '%b, tu as �t� expuls� pendant %d minutes.',
    'GENERAL_X_HAS_BEEN_KICKED' => '<font color=\'#CC0000\'><strong>%s d�gage de la salle !</strong></font><br>',
    'GENERAL_X_FERMLA' => '<font color=\'#CC0000\'><strong>%s arr�te de parler, tu saoules !</strong></font><br>',
    'GENERAL_LABEL_LOADING' => 'Chargement:',
    'GENERAL_LOADER_TITLE' => 'chargement',
    'GENERAL_E_MAZO_DISABLE' => 'Pas de MaZo pour le moment !',
    'GENERAL_E_MAZO_LOOSE' => '* MaZo: Perdu :D *',
    'GENERAL_E_MAZO_WIN' => '* MaZo: %s Pt%s  Classement: %s *',
    'GENERAL_E_WAKUP_DISCONNECT' => 'Erreur : personne en ligne avec ce nom !',
    'GENERAL_E_WAKUP_TOOMANY' => 'Du calme sur les wakups !',
    'GENERAL_E_WAKUP_FAILED' => 'Impossible d\'envoyer ton wakup!',
    'GENERAL_E_WAKUP' => '%s viens de t\'envoyer un wakup!',
    'GENERAL_E_PING' => '* Ping: %s ms *',
    'BAN_MESSAGE' => 'Tu ne peux plus te connecter au chat parceque tu as eu un comportement abusif.
Il ne te reste plus qu\'� attendre que �a passe...

encore %s heure(s) %s minute(s) %s seconde(s).',
    'FIRST_TIME_WINDOW' => 'Utilise les fl�ches du clavier pour d�placer ton personnage !',
    'ROOMTITLE_CHIMBO_GATE' => 'Accueil',
    'ROOMTITLE_TO_KOPAKABANA' => 'En route vers Kopakabana',
    'ROOM_GATE_0' => 'mariage',
    'ROOM_GATE_1' => 'divorce',
    'ROOM_GATE_2' => 'Patojdur',
    'ROOM_GATE_BIENVENU' => 'Bienvenue 
 sur',
    'ROOM_GATE_CHAPATIZ' => 'Testoland',
    'ROOM_GATE_EXTENSION' => '.com',
    'ROOM_GATE_WELCOME' => 'Hello !',
    'ROOMTITLE_PATOJDUR_BURNINFLAK' => 'Les mar�cages : Patojdur : Burnin\'Flak !',
    'ROOMTITLE_PATOJDUR_RAZLOTUS' => 'Les mar�cages : Patojdur : RazLotus !',
    'ROOM_PATOJDUR_KRAP_0' => '<b>%s</b> pr�pare toi !!!',
    'ROOM_PATOJDUR_KRAP_1' => '<b>%s</b> apr�s, c\'est toi !!!',
    'ROOM_PATOJDUR_KRAP_2' => '<b>%s</b> tu es le suivant !!!',
    'ROOM_PATOJDUR_KRAP_3' => '<b>%s</b> tu rigoleras moins dans 10 secondes !',
    'ROOM_PATOJDUR_KRAP_4' => 'On va bien voir comment tu t\'en sors <b>%s</b>...',
    'ROOM_PATOJDUR_KRAP_5' => 'Il est encore temps de faire demi tour <b>%s</b>...',
    'ROOM_PATOJDUR_KRAP_6' => 'Allez, on encourage tous <b>%s</b> !',
    'ROOM_PATOJDUR_KRAP_7' => '<b>%s</b>�me on a vu pire pour une premi�re fois <b>%s</b> !',
    'ROOM_PATOJDUR_KRAP_8' => '<b>%s</b>�me pas mal pour une premi�re  <b>%s</b> !',
    'ROOM_PATOJDUR_KRAP_b' => '<b>%s</b>�me ... <b>%s</b> tu t\'es endormi en route ou quoi ???',
    'ROOM_PATOJDUR_KRAP_c' => 'Wow, ok, respekt la, 1er <b>%s</b> !',
    'ROOM_PATOJDUR_KRAP_d' => 'Mais tu es 1er, pourquoi tu cours encore <b>%s</b> ?',
    'ROOM_PATOJDUR_KRAP_e' => '<b>%s</b>, moi qui croyais que les 1ers faisaient mieux � chaque fois',
    'ROOM_PATOJDUR_KRAP_g' => 'Pas mal <b>%s</b>, on va voir si tu restes 1er jusqu\'� demain',
    'ROOM_PATOJDUR_KRAP_w' => 'Bravo <b>%s</b> ! Tu es dans le top10... des derniers !',
    'ROOM_PATOJDUR_KRAP_9' => 'Bon, c\'est la premi�re on te pardonne  <b>%s</b>, <b>%s</b>�me !',
    'ROOM_PATOJDUR_KRAP_x' => 'Va falloir t\'entrainer sec <b>%s</b> ! <b>%s</b>�me !',
    'ROOM_PATOJDUR_KRAP_a' => 'Comme c\'est ta premi�re on t\'en veux pas <b>%s</b>, <b>%s</b>�me !',
    'ROOM_PATOJDUR_KRAP_f' => 'Tu progresses pas mais tu restes pas mal <b>%s</b>, <b>%s</b>�me !',
    'ROOM_PATOJDUR_KRAP_h' => 'Yo <b>%s</b> !!! <b>%s</b>�me hop dans le top10 !',
    'ROOM_PATOJDUR_KRAP_i' => 'T\'as de la chance de finir dans le top10 <b>%s</b> ! <b>%s</b>�me !',
    'ROOM_PATOJDUR_KRAP_j' => 'Ohla, attention, <b>%s</b> c\'est pas n\'importe qui, <b>%s</b>�me !',
    'ROOM_PATOJDUR_KRAP_k' => '<b>%s</b>, <b>%s</b>�me je suis trop d��u !',
    'ROOM_PATOJDUR_KRAP_l' => '<b>%s</b>, <b>%s</b>�me, j\'en attendais pas moins de toi !',
    'ROOM_PATOJDUR_KRAP_m' => 'Allez, on dit tous bravo � <b>%s</b> : <b>%s</b>�me !',
    'ROOM_PATOJDUR_KRAP_n' => '<b>%s</b> tu touches le fond l� ! <b>%s</b>�me !',
    'ROOM_PATOJDUR_KRAP_o' => 'Au moins c\'est bien, tu auras du mal �faire pire <b>%s</b> ! <b>%s</b>�me ! ',
    'ROOM_PATOJDUR_KRAP_p' => 'Ahahah, t\'es un rigolo toi <b>%s</b> ! <b>%s</b>�me !',
    'ROOM_PATOJDUR_KRAP_q' => 'C\'est ta premiere course la j\'esp�re <b>%s</b> ? Non ? <b>%s</b>�me !',
    'ROOM_PATOJDUR_KRAP_r' => 'Reviens dans un si�cle <b>%s</b> ! <b>%s</b>�me !',
    'ROOM_PATOJDUR_KRAP_s' => 'Mais <b>%s</b>, t\'as dit � personne que tu savais nager ! <b>%s</b>�me !',
    'ROOM_PATOJDUR_KRAP_t' => 'Ahahah, <b>%s</b>, ma grand-m�re fais mieux en dormant ! <b>%s</b>�me !',
    'ROOM_PATOJDUR_KRAP_u' => 'C\'est mal barr� pour les J.O. <b>%s</b>, 100eme !',
    'ROOM_PATOJDUR_KRAP_v' => '<b>%s</b> bravo ! continues et tu atteinds la derni�re place ! <b>%s</b>�me !',
    'ROOM_PATOJDUR_KRAPAL_0' => 'c klr',
    'ROOM_PATOJDUR_KRAPAL_1' => 'pas mieux',
    'ROOM_PATOJDUR_KRAPAL_2' => 'trop cool',
    'ROOM_PATOJDUR_KRAPAL_3' => '',
    'ROOM_PATOJDUR_KRAPAL_4' => 'chanm�',
    'ROOM_PATOJDUR_KRAPAL_5' => 'yeah maaaan',
    'ROOM_PATOJDUR_KRAPAL_6' => 'ahahah',
    'ROOM_PATOJDUR_KRAPAL_7' => 'trop trop...',
    'ROOM_PATOJDUR_KRAPAL_8' => 'pfff',
    'ROOM_PATOJDUR_KRAP_SPEEDACK' => '<b>%s</b> tu rigoleras moins dans 10 secondes !',
    'ROOM_PATOJDUR_KRAPAL_SPEEDACK' => 'w�, t\'es un noob ...',
    'ROOMTITLE_BACTERIA_DEB' => 'Bacteria pour les Nuls !',
    'ROOMTITLE_BACTERIA_PRO' => 'Bacteria pour les Pros ... !',
    'ROOMTITLE_BACTERIA_VS' => 'Bacteria: %s VS %s !',
    'ROOMTITLE_BLUEFOREST_PV' => 'Coin tranquille dans la for�t bleu',
    'ROOM_BACTERIA_GAMERESULT_DRAW' => 'WOW, match nul !!!',
    'ROOM_BACTERIA_GAMERESULT_LOST' => 'A�e, <b>%s</b> t\'a eu...',
    'ROOM_BACTERIA_GAMERESULT_WON' => 'Tu viens de battre <b>%s</b> !!!',
    'ROOM_BACTERIA_GAMERESULT_INFOS' => 'Classement: <b>%s</b> (niveau:<b>%s</b>)<br />Score: <b>%s</b> (progression:<b>%s</b>)<br />Parties: <b>%s</b> (gagn�es:<b>%s</b>, perdues:<b>%s</b>, nulles:<b>%s</b>)',
    'ROOMTITLE_GATE_TO_DIVORCE' => 'Un lieu bien sombre...',
    'ROOMTITLE_DIVORCE' => 'La Salle de la Honte et du Divorce',
    'ROOM_DIVORCE_E_CANT_DIVORCE' => 'Impossible de divorcer pour le moment !!!',
    'ROOM_DIVORCE_MEDISANCE_0' => 'Ohlala',
    'ROOM_DIVORCE_MEDISANCE_1' => 'je vous jure si c\'est pas terrible tout �a',
    'ROOM_DIVORCE_MEDISANCE_2' => 'De toute fa�on �a se voyait que leur couple battait de l\'aile',
    'ROOM_DIVORCE_MEDISANCE_3' => 'Quand meme, %d jours de mariages...',
    'ROOM_DIVORCE_MEDISANCE_4' => 'c\'est %w qui va �tre triste...',
    'ROOM_DIVORCE_MEDISANCE_5' => 'De notre temps, les mariages �a durait !!!',
    'ROOM_DIVORCE_MEDISANCE_6' => 'Nan mais je vous jure...',
    'ROOM_DIVORCE_MEDISANCE_7' => '� quoi �a sert de se marier si c\'est pour en arriver l� ???',
    'ROOM_DIVORCE_MEDISANCE_8' => 'Pauvre %w ! �a ne sera pas facile de trouver quelqu\'un d\'autre',
    'ROOM_DIVORCE_MEDISANCE_9' => 'Quand ils vont savoir, pour le divorce, ils vont bien rire !',
    'ROOM_DIVORCE_MEDISANCE_10' => 'C\'est pour la vie... ah ah... c\'est pour la vie que ce sera un chapato sans coeur !',
    'ROOM_DIVORCE_MEDISANCE_11' => 'C\'est si facile de briser un coeur, mais tellement l�che...',
    'ROOM_DIVORCE_MEDISANCE_12' => 'Tu es fier de toi ?',
    'ROOM_DIVORCE_MEDISANCE_13' => 'Tu as commenc� par le dessert !!!',
    'ROOM_DIVORCE_MEDISANCE_14' => 'Pffffff',
    'ROOM_DIVORCE_MEDISANCE_15' => 'Sans coeur !',
    'ROOM_DIVORCE_MEDISANCE_16' => '%w doit �tre en train de pleurer...',
    'ROOM_DIVORCE_MEDISANCE_17' => 'C\'�tait bien la peine de l\'�pouser !',
    'ROOM_DIVORCE_MEDISANCE_18' => 'Et devant Guruji en plus !',
    'ROOM_DIVORCE_MEDISANCE_19' => 'Ah les mariages, �a on aime hein, mais pas pour longtemps !',
    'ROOM_DIVORCE_MEDISANCE_20' => 'Au moins, %w ne perdra plus son temps avec toi !',
    'ROOM_DIVORCE_MEDISANCE_21' => 'C\'est malin !',
    'ROOM_DIVORCE_MEDISANCE_22' => 'Je croyais que tu avais dit oui, sur la colline sacr�e...',
    'ROOM_DIVORCE_MEDISANCE_23' => 'Tu ne connais pas ta chance d\'avoir �pous� %w !',
    'ROOM_DIVORCE_MEDISANCE_24' => '%w t\'aime pourtant !',
    'ROOMTITLE_WEDDING_PV' => 'Un petit coin tranquille',
    'ROOMTITLE_WEDDING' => 'La Colline Sacr�e',
    'ROOM_WEDDING_CEREMONY_A0' => 'Je suis fatigu�, revenez plus tard...',
    'ROOM_WEDDING_CEREMONY_B000' => 'Rooooooh, %un, %wn, quelle joie de vous revoir ! D�j� %d jours de mariage !!!',
    'ROOM_WEDDING_CEREMONY_B001' => '%un, %wn, mes chers chapatiz... �a fait plaisir de voir un mariage qui dure ! %d d�j� !',
    'ROOM_WEDDING_CEREMONY_B002' => '%un, %wn, mes chers chapatiz... D�j� %d jours que je vous ai mari�s...',
    'ROOM_WEDDING_CEREMONY_B010' => 'Quelle chance vous avez %un, %wn mes amis, d\'�tre mari�s...',
    'ROOM_WEDDING_CEREMONY_B011' => '%un, %wn, mes amis ! hi hi, �a fait plaisir de voir de jeunes mari�s !!!',
    'ROOM_WEDDING_CEREMONY_B012' => 'Ahhh %un, %wn, comment allez vous ? J\'esp�re que votre mariage d�bute bien...',
    'ROOM_WEDDING_CEREMONY_B020' => 'Bonjour %un, alors, comment se passe ce mariage avec %uc ?',
    'ROOM_WEDDING_CEREMONY_B021' => 'Mais c\'est %un !!! Et comment va %uc ?',
    'ROOM_WEDDING_CEREMONY_B022' => '%un comment vas-tu ??? Tu es venu sans ta moiti� ??? Mais o� est donc %uc ???',
    'ROOM_WEDDING_CEREMONY_B100' => 'Et toi, %wn, ton mariage avec %wc ?',
    'ROOM_WEDDING_CEREMONY_B101' => '%wn, �a fait plaisir ! hi hi, tu salueras %wc de ma part !',
    'ROOM_WEDDING_CEREMONY_B102' => 'Et toi, %wn, tu as laiss� %wc � la maison ? hi hi !',
    'ROOM_WEDDING_CEREMONY_C000' => 'Ahhh, mes chers %un et %wn...',
    'ROOM_WEDDING_CEREMONY_C100' => '...vous voici r�unis devant l\'autel de ce lieu sacr�...',
    'ROOM_WEDDING_CEREMONY_C200' => '...car vous avez d�cid� de vous unir pour la vie...',
    'ROOM_WEDDING_CEREMONY_C300' => '...en prenant pour t�moins %t1 et %t2.',
    'ROOM_WEDDING_CEREMONY_C400' => '%un voulez-vous �pouser %wn ?',
    'ROOM_WEDDING_CEREMONY_C500' => '%wn voulez-vous �pouser %un ?',
    'ROOM_WEDDING_CEREMONY_C600' => 'En vertu des pouvoirs qui me sont conf�r�s par le Chapaking...',
    'ROOM_WEDDING_CEREMONY_C700' => '...et au nom du Chapaland flamboyant et �ternel...',
    'ROOM_WEDDING_CEREMONY_C800' => '...je vous d�clare mari�s !!!',
    'ROOM_WEDDING_CEREMONY_C001' => 'Ahhh, mes chers %un et %wn...',
    'ROOM_WEDDING_CEREMONY_C101' => '...vous voici r�unis devant l\'autel de ce lieu sacr�...',
    'ROOM_WEDDING_CEREMONY_C201' => '...car vous avez d�cid� de vous unir pour la vie...',
    'ROOM_WEDDING_CEREMONY_C301' => '...en prenant pour t�moins %t1 et %t2.',
    'ROOM_WEDDING_CEREMONY_C401' => '%un voulez-vous �pouser %wn ?',
    'ROOM_WEDDING_CEREMONY_C501' => '%wn voulez-vous �pouser %un ?',
    'ROOM_WEDDING_CEREMONY_C601' => 'En vertu des pouvoirs qui me sont conf�r�s par le Chapaking...',
    'ROOM_WEDDING_CEREMONY_C701' => '...et au nom du Chapaland flamboyant et �ternel...',
    'ROOM_WEDDING_CEREMONY_C801' => '...je vous d�clare mari�s !!!',
    'ROOM_WEDDING_CEREMONY_C002' => 'Ahhh, mes chers %un et %wn...',
    'ROOM_WEDDING_CEREMONY_C102' => '...vous voici r�unis devant l\'autel de ce lieu sacr�...',
    'ROOM_WEDDING_CEREMONY_C202' => '...car vous avez d�cid� de vous unir pour la vie...',
    'ROOM_WEDDING_CEREMONY_C302' => '...en prenant pour t�moins %t1 et %t2.',
    'ROOM_WEDDING_CEREMONY_C402' => '%un voulez-vous �pouser %wn ?',
    'ROOM_WEDDING_CEREMONY_C502' => '%wn voulez-vous �pouser %un ?',
    'ROOM_WEDDING_CEREMONY_C602' => 'En vertu des pouvoirs qui me sont conf�r�s par le Chapaking...',
    'ROOM_WEDDING_CEREMONY_C702' => '...et au nom du Chapaland flamboyant et �ternel...',
    'ROOM_WEDDING_CEREMONY_C802' => '...je vous d�clare mari�s !!!',
    'ROOMTITLE_GATE_TO_SWAMPS' => 'L\'entr�e des mar�cages',
    'DISPATCHER_LABEL_DISPATCHER' => 'L\'archipel',
    'DISPATCHER_LABEL_NO_USER' => 'Personne dans cette salle.',
    'DISPATCHER_LABEL_1_USER' => '1 seul connect� .',
    'DISPATCHER_LABEL_X_USERS' => '<b>%c</b> connect�s.',
    'DISPATCHER_LABEL_TOTAL_CONNECTED' => '<p align=\'center\'><b>%c</b> connect�s.</p>',
    'DISPATCHER_ROOMTITLE_DISPATCHER' => 'Trou noir',
    'DISPATCHER_ROOMDESC_DISPATCHER' => 'C\'est o� tu es en ce moment !!!',
    'DISPATCHER_ROOMTITLE_CHIMBO_GATE' => 'Accueil',
    'DISPATCHER_ROOMDESC_CHIMBO_GATE' => 'Retrouve toutes les infos dont tu as besoin sur ce lieu:<br>Les news officielles<br>Le classement des meilleurs joueurs<br>Les membres pass�s r�cemment',
    'DISPATCHER_ROOMTITLE_NEWBEACH' => 'Une nouvelle plage ...',
    'DISPATCHER_ROOMDESC_NEWBEACH' => 'C\'est un nouvel endroit de l\'�le ... Ce n\'est pas encore accessible ...<br> Mais je me demande ce qui se passe l�-bas ...',
    'DISPATCHER_ROOMTITLE_BACTERIA' => 'Bacteria',
    'DISPATCHER_ROOMDESC_BACTERIA' => 'Bacteria, c\'est un jeu de strat�gie ou l\'on peut s\'affronter entre joueurs.<br>Le but est de phagocyter toutes les bact�ries de l\'adversaire.<br>Tu peux aller dans la salle <strong>d�butant</strong> si tu n\'a jamais jou� ou dans la salle <strong>pro</strong> pour trouver un adversaire � ta taille.',
    'DISPATCHER_ROOMTITLE_BACTERIA_DEBUTANTS' => 'Bacteria pour les nuls !',
    'DISPATCHER_ROOMDESC_BACTERIA_DEBUTANTS' => 'Si tu es un jeune membre inexp�riment�, c\'est l\'endroit r�v� pour forger tes premi�res armes.<br>Tu pourras t\'entra�ner � <strong>Bacteria</strong>, un jeu de strat�gie captivant !',
    'DISPATCHER_ROOMTITLE_BACTERIA_PROS' => 'Bacteria pour les pros !',
    'DISPATCHER_ROOMDESC_BACTERIA_PROS' => 'Si tu es un <strong>killer</strong> � <strong>Bacteria</strong>, que tu phagocytes des milliers de bact�ries tous les jours pour ton petit-dejeuner, tu trouveras dans cette salle des adversaires � ta taille !',
    'DISPATCHER_ROOMTITLE_CHIMBO_WEDDING' => 'La Colline Sacr�e',
    'DISPATCHER_ROOMDESC_CHIMBO_WEDDING' => 'D\' �tranges c�r�monies ont lieu r�guli�rement sur la colline sacr�e...<br>Va donc y jeter un oeil, c\'est un endroit tr�s utile pour ton statut social.',
    'DISPATCHER_ROOMTITLE_GATE_TO_SWAMPS' => 'L\'entr�e des Mar�cages',
    'DISPATCHER_ROOMDESC_GATE_TO_SWAMPS' => 'Un petit coin de verdure entre pieds mouill�s et fin d\'histoires...<br>',
    'DISPATCHER_ROOMTITLE_PATOJDUR' => 'Mar�cages: Patojdur',
    'DISPATCHER_ROOMDESC_PATOJDUR' => 'Tu n\'as pas peur de te mouiller ? Viens d�fier les autres...<br>',
    'DISPATCHER_ROOMTITLE_KOPAKABANA' => 'Kopakabana Beach',
    'DISPATCHER_ROOMDESC_KOPAKABANA' => 'Aaaaah, les pieds dans l\'eau au soleil...<br>',
    'NAMESPACE_BLUEFOREST' => 'For�t Bleue : %s',
    'SIDEMODULE_CHAT_TITLE' => 'Conversations',
    'SIDEMODULE_ROOMLIST_TITLE' => 'Les connect�s',
    'SIDEMODULE_BOULETS_TITLE' => 'Mes actions',
    'E_CC_TO_ME' => 'Tu ne peux pas envoyer cette commande sur toi !',
    'E_CC_UNKNOWN_TARGET' => 'Commande rat�e: pas trouv� la cible !',
    'CC_IGNORE_PUSHED' => 'Tu n\'entends plus %s !',
    'CC_IGNORE_REMOVED' => 'Tu entends de nouveau %s !',
    'CC_AUTOKICK_SET' => 'Ton autokick est r�gl� � %s minutes !',
    'CC_HISTOLENGTH_SET' => 'Ton panneau conversation affiche %s ligne(s) de chat !',
    'CC_LOCATE_GET' => 'Position: %s, %s ',
    'ERROR_NIY' => 'Pas encore disponible !',
    'CC_NOWAKUP_ON' => 'Tu ne recevras plus les wakups !',
    'CC_NOWAKUP_OFF' => 'Tu recevras de nouveau les wakups !',
    'CC_WAKUP_ALONE' => 'Tu aimes bien t\'envoyer des wakups tout seul ? ,)',
    'CC_WAKUP_TO' => 'Tu viens d\'envoyer un wakup � %s !',
    'CC_WAKUP_NOWAY' => 'Tu n\'as pas indiqu� de nom pour le wakup !',
    'CC_TRAK_HIMSELF' => 'Tu ne sais pas o� tu es ??? ,)',
    'CC_TRAK_NOBODY' => 'Personne � traquer ici avec ce nom !',
    'CC_MAZO_WAIT' => '* 2 secondes entre chaque !mazo *',
    'CC_LACHNOU_NONAME' => 'Lachnou Rat� !!! Pas de nom sp�cifi�...',
    'CC_BYBY_NONAME' => 'Byby Rat� !!! Pas de nom sp�cifi�...',
    'CC_VATAN_NONAME' => 'Vatan Rat� !!! Pas de nom sp�cifi�...',
    'CC_FERMLA_NONAME' => 'Fermla Rat� !!! Pas de nom sp�cifi�...',
    'CC_TROUV_WAIT' => 'Trouv Rat� !!! D�j� une demande en cours...',
    'CC_TROUV_NONAME' => 'Trouv Rat� !!! Pas de nom sp�cifi�...',
    'CC_PRIV_NOMESS' => 'Priv Rat� !!! Pas de message...',
    'CC_PRIV_NONAME' => 'Priv Rat� !!! Pas de nom sp�cifi�...',
    'ERROR_PING_2_FAST' => 'Attends la r�ponse du !ping pr�c�dent !',
    'HIGH_QUALITY' => 'Qualit� Haute !',
    'MEDIUM_QUALITY' => 'Qualit� Moyenne !',
    'LOW_QUALITY' => 'Qualit� Basse !',
    'SHAME_MOOD' => 'la honte',
    'dispatcher' => 'Le Trou Noir',
    'wedding_private' => 'Coin tranquille dans la Colline sacr�e',
    'bacteria' => 'Bacteria',
    'bacteria_desc' => 'Bacteria, c\'est un jeu de strat�gie ou l\'on peut s\'affronter entre joueurs.<br>Le but est de phagocyter toutes les bact�ries de l\'adversaire.<br>Tu peux aller dans la salle <b>d�butant</b> si tu n\'a jamais jou� ou dans la salle <b>pro</b> pour trouver un adversaire � ta taille.',
    'bacteria_debutants' => 'Bacteria pour les nuls !',
    'bacteria_debutants_desc' => 'Si tu es un jeune membre inexp�riment�, c\'est l\'endroit r�v� pour forger tes premi�res armes � <b>Bacteria</b>, un jeu de strat�gie captivant !',
    'bacteria_pros' => 'Bacteria pros !',
    'bacteria_pros_desc' => 'Si tu es un <b>killer</b> � <b>Bacteria</b>, que tu phagocytes des milliers de bact�ries tous les jours pour ton petit-dejeuner, tu trouveras dans cette salle des adversaires � ta taille !',
    'blueforest.pv' => 'Coin tranquille dans la For�t Bleue',
    'lv' => 'Coin tranquille dans la Colline sacr�e',
    'gate_to_pro' => 'Vers bact�ria pros',
    'gate_to_deb' => 'Vers bact�ria d�butant',
    'gate_to_swamps' => 'Entr�e des mar�cages',
    'gate_to_divorce' => 'Un lieu bien sombre...',
    'blueforest.acc_balade' => 'Entr�e de la For�t Bleue',
    'blueforest.to_ballades' => 'Dans la For�t Bleue',
    'blueforest.maisonOfficiels' => 'Maison des Officiels',
    'blueforest.race' => 'Lapino\'s race',
    'submarine' => 'Salle sous-marine',
    'chapaport' => 'Le chapaport.',
    'ile_abandonned' => 'Une �le abandonn�e ...',
    'to_expo' => 'Grotte Mushlight',
    'kopa2' => 'Sur une plage � Kopakabana...',
    'underground.divorce' => 'La grotte de la Honte et du Divorce',
    'ROOMTITLE_KOPAKABANA' => 'Kopakabana Beach',
    'ROOMTITLE_BLUEFOREST_BALLADE_2' => 'Balade de la For�t Bleue 2',
    'ROOMTITLE_BLUEFOREST_BALLADE_1' => 'Balade de la For�t Bleue 1',
    'ROOMTITLE_KOPAKABANA' => 'Kopakabana Beach',
    'blueforest.kopakabana_desc' => 'Aaaaah, les pieds dans l\'eau au soleil...<br>',
    'blueforest.kopakibini' => 'Kopakibini Beach',
    'blueforest.kopakibini_desc' => 'La plage secr�te de l\'archipel',
	'SpeedMaze' => 'SpeedMaze',
	'gate_to_wedding' => 'En route vers la colline sacr�e',
    'flash_badwords' => 
    array (
      1 => 'blablaland',
    ),
    'moods' => 
    array (
      'lol' => 
      array (
        'm' => 'LOL',
        's' => 'LOL',
      ),
      ':d' => 
      array (
        'm' => 'LOL',
        's' => 'LOL',
      ),
      ':))' => 
      array (
        'm' => 'LOL',
        's' => 'LOL',
      ),
      ' lol' => 
      array (
        'm' => 'LOL',
        's' => 'LOL',
      ),
      'mdr' => 
      array (
        'm' => 'LOL',
        's' => 'LOL',
      ),
      'ptdr' => 
      array (
        'm' => 'LOL',
        's' => 'LOL',
      ),
      'xpdr' => 
      array (
        'm' => 'LOL',
        's' => 'LOL',
      ),
      ':)' => 
      array (
        'm' => 'happy',
        's' => 'yo',
      ),
      '^^' => 
      array (
        'm' => 'happy',
        's' => 'yo',
      ),
      'chimbo' => 
      array (
        'm' => 'happy',
        's' => 'chimbooo',
      ),
      ':((' => 
      array (
        'm' => 'crying',
        's' => 'pleure',
      ),
      ':\'(' => 
      array (
        'm' => 'crying',
        's' => 'pleure',
      ),
      'ouin' => 
      array (
        'm' => 'crying',
        's' => 'pleure',
      ),
      ':(' => 
      array (
        'm' => 'unhappy',
        's' => 'bouh',
      ),
      ':@' => 
      array (
        'm' => 'vener',
        's' => 'raaah',
      ),
      'grr' => 
      array (
        'm' => 'vener',
        's' => 'raaah',
      ),
      ';)' => 
      array (
        'm' => 'blink',
        's' => 'ah-ahh',
      ),
      'c plate' => 
      array (
        'm' => 'degoute',
      ),
      ':[' => 
      array (
        'm' => 'degoute',
      ),
      ':|' => 
      array (
        'm' => 'degoute',
      ),
      '|(' => 
      array (
        'm' => 'degoute',
      ),
      ':p' => 
      array (
        'm' => 'langue',
        's' => 'gnagnagna',
      ),
      'gnagna' => 
      array (
        'm' => 'langue',
        's' => 'gnagnagna',
      ),
      '<<\'' => 
      array (
        'm' => 'embarasse',
        's' => 'fatig',
      ),
      'a+' => 
      array (
        's' => 'aplus',
      ),
      '�+' => 
      array (
        's' => 'aplus',
      ),
      '@+' => 
      array (
        's' => 'aplus',
      ),
      'a plus' => 
      array (
        's' => 'aplus',
      ),
      'bye' => 
      array (
        's' => 'byebye',
      ),
      'ciao' => 
      array (
        's' => 'ciao',
      ),
      'tcho' => 
      array (
        's' => 'ciao',
      ),
      'tchao' => 
      array (
        's' => 'ciao',
      ),
      'yo' => 
      array (
        'm' => 'happy',
        's' => 'yo',
      ),
      'hello' => 
      array (
        's' => 'hello',
      ),
      'salut' => 
      array (
        's' => 'hello',
      ),
      'slt' => 
      array (
        's' => 'hello',
      ),
      'allo' => 
      array (
        's' => 'allo',
      ),
      'prout' => 
      array (
        's' => 'prout',
      ),
      'prt' => 
      array (
        's' => 'prout',
      ),
      'yeah' => 
      array (
        's' => 'yeah',
      ),
      'y�' => 
      array (
        's' => 'yeah',
      ),
      't ki toi' => 
      array (
        's' => 't ki toi',
      ),
      't\'es qui toi' => 
      array (
        's' => 't ki toi',
      ),
      't qui toi' => 
      array (
        's' => 't ki toi',
      ),
      't\'es ki toi' => 
      array (
        's' => 't ki toi',
      ),
      'cool' => 
      array (
        's' => 'cool',
      ),
      'kool' => 
      array (
        's' => 'cool',
      ),
      'bisou' => 
      array (
        's' => 'bisou',
      ),
      'kiss' => 
      array (
        's' => 'bisou',
      ),
      'embrasse' => 
      array (
        's' => 'bisou',
      ),
      'smack' => 
      array (
        's' => 'bisou',
      ),
      'ah' => 
      array (
        's' => 'ah',
      ),
      'klr' => 
      array (
        's' => 'klr',
      ),
      'kler' => 
      array (
        's' => 'klr',
      ),
      'clair' => 
      array (
        's' => 'klr',
      ),
      'vazy' => 
      array (
        's' => 'vazy',
      ),
      'zyva' => 
      array (
        's' => 'vazy',
      ),
      'vas y' => 
      array (
        's' => 'vazy',
      ),
      'viens' => 
      array (
        's' => 'viens',
      ),
      'vi1' => 
      array (
        's' => 'viens',
      ),
      'ok' => 
      array (
        's' => 'ok',
      ),
      'oooh' => 
      array (
        's' => 'oooh',
        'm' => 'toned',
      ),
      ':o' => 
      array (
        's' => 'oooh',
        'm' => 'toned',
      ),
      'pourquoi' => 
      array (
        's' => 'pkoi',
      ),
      'pkoi' => 
      array (
        's' => 'pkoi',
      ),
      'pourkoi' => 
      array (
        's' => 'pkoi',
      ),
      'ta m�re' => 
      array (
        's' => 'tamere',
      ),
      'ta mere' => 
      array (
        's' => 'tamere',
      ),
      'tamere' => 
      array (
        's' => 'tamere',
      ),
      'asv' => 
      array (
        's' => 'asv',
      ),
      'arf' => 
      array (
        's' => 'arf',
      ),
      'bravo' => 
      array (
        's' => 'bravo',
      ),
      'super' => 
      array (
        's' => 'super',
      ),
      'fresh' => 
      array (
        's' => 'fresh',
      ),
      'gagn���' => 
      array (
        's' => 'gagnee',
      ),
      'perdu' => 
      array (
        's' => 'perdu',
      ),
      'non' => 
      array (
        's' => 'non',
      ),
      'nan' => 
      array (
        's' => 'non',
      ),
      'oui' => 
      array (
        's' => 'oui',
      ),
      'hein' => 
      array (
        's' => 'hein',
      ),
      '1 ?' => 
      array (
        's' => 'hein',
      ),
      'hain' => 
      array (
        's' => 'hain',
      ),
      '1 !' => 
      array (
        's' => 'hain',
      ),
      'pfff' => 
      array (
        's' => 'pfff',
      ),
      'portnawak' => 
      array (
        's' => 'nawak',
      ),
      'nimportkoi' => 
      array (
        's' => 'nawak',
      ),
      'n1portkoi' => 
      array (
        's' => 'nawak',
      ),
      'n\'importe quoi' => 
      array (
        's' => 'nawak',
      ),
      'nawak' => 
      array (
        's' => 'nawak',
      ),
      'wow' => 
      array (
        's' => 'wow',
      ),
      'w�' => 
      array (
        's' => 'wee',
      ),
      '?' => 
      array (
        's' => 'oho',
      ),
      'zzz' => 
      array (
        'm' => 'away',
      ),
      'mici' => 
      array (
        's' => 'thxs',
      ),
      'thanks' => 
      array (
        's' => 'thxs',
      ),
      'merci' => 
      array (
        's' => 'thxs',
      ),
      'thx' => 
      array (
        's' => 'thxs',
      ),
      'thxs' => 
      array (
        's' => 'thxs',
      ),
      'stp' => 
      array (
        's' => 'stp',
      ),
      'zatch' => 
      array (
        's' => 'stp',
      ),
      'love' => 
      array (
        'm' => 'amoureux',
        's' => 'coeur',
      ),
      'luv' => 
      array (
        'm' => 'amoureux',
        's' => 'coeur',
      ),
      'aime' => 
      array (
        'm' => 'amoureux',
        's' => 'coeur',
      ),
      'amour' => 
      array (
        'm' => 'amoureux',
        's' => 'coeur',
      ),
      'je t\'m' => 
      array (
        'm' => 'amoureux',
        's' => 'coeur',
      ),
      '*d' => 
      array (
        'm' => 'kawai',
        's' => 'kawai',
      ),
      'cute' => 
      array (
        'm' => 'kawai',
        's' => 'kawai',
      ),
      'kawai' => 
      array (
        'm' => 'kawai',
        's' => 'kawai',
      ),
      ':$' => 
      array (
        'm' => 'embarrasse',
        's' => 'LOL',
      ),
      '8@' => 
      array (
        'm' => 'killer',
      ),
      '>)' => 
      array (
        'm' => 'mijot',
      ),
      '>>' => 
      array (
        'm' => 'ayeur2',
      ),
      '<<' => 
      array (
        'm' => 'ayeur',
      ),
      'humhum' => 
      array (
        'm' => 'ayeur',
      ),
      'flagg' => 
      array (
        'm' => 'nekoflag',
      ),
      ':/' => 
      array (
        'm' => 'slash',
      ),
      '(*)' => 
      array (
        'm' => 'star',
      ),
      'croon' => 
      array (
        'm' => 'star',
      ),
      '!' => 
      array (
        's' => 'blabla!',
      ),
      'o_o' => 
      array (
        'm' => 'o_o',
      ),
      '<d' => 
      array (
        'm' => 'jteplin',
      ),
      '--' => 
      array (
        'm' => 'fatig',
        's' => 'fatig',
      ),
      '>(' => 
      array (
        'm' => 'menace',
      ),
      'fou!' => 
      array (
        'm' => 'ouf',
        's' => 'ouf',
      ),
      '<:d' => 
      array (
        'm' => 'ouf',
        's' => 'ouf',
      ),
      'vv' => 
      array (
        'm' => 'shark',
        's' => 'shark',
      ),
      ':oo' => 
      array (
        's' => 'oooh',
        'm' => 'toned2',
      ),
      '^^\'' => 
      array (
        'm' => 'goot',
      ),
      '@@' => 
      array (
        'm' => 'afraid',
        's' => 'afraid',
      ),
      'g peur' => 
      array (
        'm' => 'afraid',
        's' => 'afraid',
      ),
      'neko' => 
      array (
        'm' => 'neko',
        's' => 'neko',
      ),
      '(@)' => 
      array (
        'm' => 'neko',
        's' => 'neko',
      ),
      'flag' => 
      array (
        'm' => 'flag',
      ),
      'la honte' => 
      array (
        'm' => 'shame',
        's' => 'shame',
      ),
      'XD' => 
      array (
        'm' => 'XD',
        's' => 'narkoi',
      ),
      'xD' => 
      array (
        'm' => 'XD',
        's' => 'narkoi',
      ),
      'xd' => 
      array (
        'm' => 'XD',
        's' => 'narkoi',
      ),
	  ':hap:' => 
      array (
        'm' => 'hap',
      ),
      'outch' => 
      array (
        's' => 'ouch',
      ),
      'omg' => 
      array (
        's' => 'omg',
      ),
      'oh my god' => 
      array (
        's' => 'omg',
      ),
      'eww' => 
      array (
        's' => 'eww',
      ),
      'y' => 
      array (
        's' => 'yeah',
      ),
      'onche' => 
      array (
        's' => 'onche',
      ),
    )
);
		return $lang;
	} 
} 
?>