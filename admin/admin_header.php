<?php
/****************************************
 *@Developer: Rijo Joy
 *@Version: 1.00
 *creation date:2012-06-22
 *@last Update Date:2012-06-22
 *@Package Name: Admin Header
 *@HomePage: http://www.AIOIC.com
 *@EMail: info@aioic.com 
 *@Developed For: www.aioic.com
 *@Copyright: www.selectsourceintl.com
 *@License: Paid For Personal & Commerical Username but Header and Copyright information must stay intact!
*****************************************/
// PHP Administrator functionality Using MySQL Smarty and Pdo
//*************************************
require("../configs/smartyconfiginner.php");
require("../configs/PDOFactory.phpm");
if(isset($_SESSION['msg_msg']))
	{ 
	$smarty->assign("msg_msg",$_SESSION['msg_msg']);
	unset($_SESSION['msg_msg']);
    }
if($_SESSION['user_role_id'] != 1)
	{
	header('Location:../index.php');
	} 
?>