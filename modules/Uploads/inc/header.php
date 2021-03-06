<?php
/*=======================================================================
            PHP-Nuke Titanium (CMS) Enhanced And Advanced
 ========================================================================
 PHP-Nuke Titanium                     :   v1.0.1z
 PHP-Nuke Titanium Build               :   6205
 PHP-Nuke Titanium Filename            :   modules/Uploads/inc/header.php
 PHP-Nuke Titanium Module              :   Uploads
 PHP-Nuke Titanium File Release Date   :   September 4th, 2017  
 PHP-Nuke Tianium File Author          :   Ernest Allen Buffington

 PHP-Nuke Titanium web address         :   https://titanium.86it.network
 
 PHP-Nuke Titanium is licensed under GNU General Public License v3.0

 PHP-Nuke Titanium is Copyright(c) 2002 to 2017 by Ernest Allen Buffington
 of Sebastian Enterprises. 
 
 ernest.buffington@gmail.com
 Att: Sebastian Enterprises
 1071 Emerald Dr,
 Brandon, Florida 33511
 ========================================================================
 GNU GENERAL PUBLIC LICENSE Version 3, 29 June 2007
 Copyright (C) 2007 Free Software Foundation, Inc. <http://fsf.org/>
 Everyone is permitted to copy and distribute verbatim copies
 of this license document, but changing it is not allowed.       
 ========================================================================
 
 /*****[CHANGES]**********************************************************
  The Nuke-Evo Base Engine : v2.1.0 RC3 dated May 4th, 2009 is what we
  used to build our new content management system. To find out more
  about the starting core engine before we modified it please refer to 
  the Nuke Evolution website. http://www.nuke-evolution.com
   
  This file was re-written for PHP-Nuke Titanium and all modifications
  were done by Ernest Allen Buffington of Sebastian Enterprises.
  
  PHP-Nuke Titanium is written for Social Networking and uses a centralized 
  database that is chained to The Scorpion Network & The 86it Social Network

  It is not intended for single user platforms and has the requirement of
  remote database access to https://the.scorpion.network and 
  https://www.86it.us which is a new Social Networking System designed by 
  Ernest Buffington that requires a FEDERATED MySQL engine in order to 
  function at all.
  
  The federated database concept was created in the 1980's and has been
  available a very long time. In fact it was a part of MySQL before they
  ever started to document it. There is not much information available
  about using a FEDERATED engine and a lot of the documention is not very
  complete with regard to every detail; it is superficial and partial to
  say thge least. 
  
  The core engine from Nuke Evolution was used to create 
  PHP-Nuke Titanium. Almost all versions of PHP-Nuke were unstable and not 
  very secure. We have made it so that it is enhanced and advanced!
  
  PHP-Nuke Titanium is now a secure custom FORK of the ORIGINAL PHP-Nuke
  that was purchased by Ernest Buffington of Sebastian Enterprises.
  
  PHP-Nuke Titanium is not backward compatible to any of the prior versions of
  PHP-Nuke, Nuke-Evoltion or Nuke-Evo.
  
  The module framework of PHP-Nuke is the only thing that still functions 
  in the same way that Francis Burzi had intended and even that had to be
  safer and more secure to be a reliable form of internet communications.
  
 ************************************************************************
 * PHP-NUKE: Advanced Content Management System                         *
 * ============================================                         *
 * Copyright (c) 2002 by Francisco Burzi                                *
 * http://phpnuke.org                                                   *
 *                                                                      *
 * This program is free software. You can redistribute it and/or modify *
 * it under the terms of the GNU General Public License as published by *
 * the Free Software Foundation; either version 2 of the License.       *
 ************************************************************************/

if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    exit('Access Denied');
}
// ***************************************
// ** FILE:    HEADER.PHP               **
// ** PURPOSE: PHFTP                    **
// ** DATE:    12.02.2011               **
// ** AUTHOR:  ANDREAS MEHRRATH         **
// ***************************************
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<title><?php echo _APP_SHORT; ?></title>

<META HTTP-EQUIV="Content-Type" content="text/html; charset=utf-8">
<META HTTP-EQUIV="EXPIRES" CONTENT="0">
<META HTTP-EQUIV="PRAGMA"  CONTENT="NO-CACHE">
<META NAME="AUTHOR"        CONTENT="<?php echo _APP_AUTHOR; ?>">
<META NAME="GENERATOR"     CONTENT="vi">

<LINK REL="STYLESHEET" HREF="modules/Uploads/css/<?php if (isset($conf_css)) echo $conf_css; else echo "modules/Uploads/css/default.css"; ?>" TYPE="text/css">

<SCRIPT LANGUAGE="JavaScript" src="modules/Uploads/js/tools.js"></SCRIPT>
<SCRIPT LANGUAGE="JavaScript" src="modules/Uploads/js/ftp_tools.js"></SCRIPT>

<STYLE type="text/css">

.clipper {
   overflow:hidden;
   float:left;
}

.clipper select {
   font-size:1em;
   border:none;
}
</STYLE>
<!--[if IE]>
<style type="text/css">
.clipper select {
   margin:-2px;
   width: 259px;
}
</style>
<![endif]-->
</HEAD>
<BODY TOPMARGIN='1' LEFTMARGIN='1' BGCOLOR='WHITE' TEXT='BLACK'>

<?php

if ((isset($phpftp_centered))&&($phpftp_centered))
echo "<table border=\"1\" style=\"background-color: transparent ! important; border: none ! important;\" cellpadding=\"0\" cellspacing=\"0\" width=\"99%\" height=\"90%\"><tr><td valign=\"middle\" align=\"center\" style=\"border: none ! important;\">\n";

?>
