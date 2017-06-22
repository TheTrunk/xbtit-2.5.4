<?php

if(!isset($_GET["smf_type"]))
    $_GET["smf_type"]="";

// smf_import.php language file

$lang[0]='Ano';
$lang[1]='Ne';
$lang[2]='<center><u><strong><font size="4" face="Arial">Fáze 1: Prvotní požadavky</font></strong></u></center><br />';
$lang[3]='<center><strong><font size="2" face="Arial">Jsou SMF soubory přítomny v "smf" adresáři?<font color="';
$lang[4]='">&nbsp;&nbsp;&nbsp; ';
$lang[5]='</font></center></strong>';
$lang[6]='<br /><center>Prosím <a target="_new" href="http://www.simplemachines.org/download/">stáhněte SMF</a> a nahrajte obsah archivu do "smf" adresáře.<br />Jestliže nemáte "smf" adresář, vytvořte jej v rootu vašeho trackeru a nahrajte<br /> do něj obsah archivu.<br /><br />Jakmile nahráno p'; // p at end is a lowercase p for use with $lang[8]
$lang[7]='<br /><center>P'; // P at end is an uppercase p for use with $lang[8]
$lang[8]='rosím nainstalujte SMF <a target="_new" href="smf/install.php">kliknutím zde</a>*<br /><br /><strong>* Prosím použijte stejné přihlašovací údaje databáze jako používáte na trackeru.<br />Můžete použít jakýkoliv databázový prefix. (kromě toho, který používá tracker)<br /><br />';
$lang[9]='<font color="#0000FF" size="3">Jakmile je úloha dokončena, můžete obnovit tuto stránku!</font></strong></center>';
$lang[10]='<center><strong>SMF nainstalováno?<font color="';
$lang[11]='Soubor nenalezen!';
$lang[12]='Soubor nalezen, ale není zapisovatelný!';
$lang[13]='<center><strong>Základní SMF chyba. Je soubor dostupný a zapisovatelný?<font color="';
$lang[14]='<center><strong>Je smf.sql soubor přítomen v "sql" adresáři?<font color="';
$lang[15]='<br /><center><strong>Jazykový soubor (';
$lang[16]=')<br />chybí, prosím ujistěte se, <font color="#FF0000"><u>že všechny SMF soubory</u></font> byly nahrány!<br /><br />';
$lang[17]=')<br />není zapisovatelný, <font color="#FF0000"><u>prosím CHMOD tento soubor na 777</u></font><br /><br />';
$lang[18]='<br /><center><strong>smf.sql chybí, <font color="#FF0000"><u>prosím ujistěte se, že je tento soubor přítomen v "sql" adresáři.</u></font><br />(Bývá zahrnut společně s XBTIT distribucí!)<br /><br />';
$lang[19]='<br /><center>Všechny požadavky splněny, prosím <a href="';
$lang[20]='">klikněte zde pro pokračování</a></center>';
$lang[21]='<center><u><strong><font size="4" face="Arial">Fáze 2: Prvotní nastavení</font></strong></u></center><br />';
$lang[22]='<center>Nyní, když jsme oveřili, že je vše na svém místě, nastal čas upravit databázi,<br />aby vše bylo v souladu s trackerem.</center><br />';
$lang[23]='<center><form name="db_pwd" action="smf_import.php" method="GET">Enter Database password:&nbsp;<input name="pwd" size="20" /><br />'."\n".'<br />'."\n".'<strong>please click <input type="submit" name="confirm" value="yes" size="20" /> to proceed</strong><input type="hidden" name="act" value="init_setup" /><input type="hidden" name="smf_type" value="'.$_GET["smf_type"].'" /></form></center>';
$lang[24]='<center><u><strong><font size="4" face="Arial">Stage 3: Importing the tracker members</font></strong></u></center><br />';
$lang[25]='<center>Now the database has been setup correctly it&rsquo;s time to start importing the tracker members,<br />This can take some time if you have a large memberbase so please be patient and allow<br />the script to do it&rsquo;s work!<br /><br /><strong>please <a href="'.$_SERVER['PHP_SELF'].'?act=member_import&amp;confirm=yes&smf_type='.$_GET["smf_type"].'">click here</a> to proceed</center>';
$lang[26]='<center><u><strong><font size="4" face="Arial">Sorry</font></strong></u></center><br />';
$lang[27]='<center>Sorry, this is meant to be a use once and discard script and since you&rsquo;ve already used it this file has been locked!</center>';
$lang[28]='<center><br /><strong><font color="#FF0000"><br />';
$lang[29]='</strong></font> Forum accounts were successfully created, please <a href="'.$_SERVER['PHP_SELF'].'?act=import_forum&amp;confirm=no&smf_type='.$_GET["smf_type"].'">click here</a> to proceed</center>';
$lang[30]='<center><u><strong><font size="4" face="Arial">Stage 4: Importing the forum layout & posts</font></strong></u></center><br />';
$lang[31]='<center>This is the final stage of the forum import, this will import your current BTI Forums into SMF,<br />they will be imported into a new category called "My BTI import",<br />please <a href="'.$_SERVER['PHP_SELF'].'?act=import_forum&amp;confirm=yes&smf_type='.$_GET["smf_type"].'">click here</a> to proceed</center>';
$lang[32]='<center><u><strong><font size="4" face="Arial">Import Complete</font></strong></u></center><br />';
$lang[33]='<center><font face="Arial" size="2">Please <a target="_new" href="smf/index.php?action=login">login to your new SMF forum</a> using your Tracker details<strong>*</strong> and goto<br />the <strong>Administration Center</strong> then select <strong>Forum Maintenance</strong> and run<br /><strong>Find and repair any errors.</strong> followed by <strong>Recount all forum totals<br />and statistics.</strong> to tidy up the import and fix the post count etc.<br /><br /><strong><font color="#0000FF">Your integrated SMF Forum should then be ready to use!</font></strong><br /><br /><strong>* If you are using any method other than the xbtit Classic password hashing method in the Security Suite you (and your members) will need to login from the tracker in order to reset your SMF Password. (Alternatively you can use the password recovery feature on SMF but it\'s much better to do it via tracker login so that the same password is set for both accounts.)</strong></font></center>';
$lang[34]='<center><u><strong><font size="4" face="Arial" color="#FF0000">ERROR!</font></strong></u></center><br />'."\n".'<br />'."\n".'<center><font face="Arial" size="3">You typed the wrong password or you&rsquo;re not the owner of this tracker!<br />'."\n".'Please note that your IP has been logged.</font></center>';
$lang[35]='</body>'."\n".'</html>'."\n";
$lang[36]='<center>Unable to write to:<br /><br /><b>';
$lang[37]='</b><br /><br />Please ensure this file is writable then run this script again.</center>';
$lang[38]='<center><br /><font color="red" size="4"><b>Access Denied</b></font></center>';
?>
