<?php
// PRINCIPAIS CLASSES CORE
require_once('../../dashboard/core/modules/utils/autoload.php');
session_start();
// ############# INICIO SELECT DADOS #############	
$P_BO = new mod_tra_BO();
if(isset($_GET) && !empty($_GET))
{
	$_id = $_GET['id'];
	$_sql = "SELECT id_mod_tra_mot_cai_sus_rel_ent_tan_pne, pneu
				FROM mod_tra_mot_cai_sus_rel_ent_tan_pne JOIN pneu ON mod_tra_mot_cai_sus_rel_ent_tan_pne.id_pneu=pneu.id_pneu
				WHERE id_mod_tra_mot_cai_sus_rel_ent_tan=".$_id;
	$M_newMatrix = $P_BO->execQueryMy($_sql);
}else{
	$M_newMatrix = $P_BO->search("pneu", NULL, "*", "pneu");
}
$M_newMatrix = json_encode($M_newMatrix);
print_r($M_newMatrix);
// ############# FIM SELECT DADOS #############