<?php

$page = $_GET['page'];
if($page == ""){
    include "modul/main.php";      
    
}else if ($page == 'main') {
    include "modul/main.php";      
    // Lakukan sesuatu jika pengguna meminta halaman login>
}
elseif ($page == 'referal') {
    include "modul/tbreferal.php";
    // Lakukan sesuatu jika pengguna meminta halaman login>
}elseif ($page == 'pgrp-acc') {
    include "modul/user/accplayer.php";
    // Lakukan sesuatu jika pengguna meminta halaman login>
}elseif ($page == 'pgrp-createacc') {
    include "modul/user/createacc.php";
    // Lakukan sesuatu jika pengguna meminta halaman login>
}elseif ($page == 'pgrp-donation') {
    include "modul/user/donation.php";
    // Lakukan sesuatu jika pengguna meminta halaman login>
}elseif ($page == 'pgrp-setting') {
    include "modul/user/settings.php";
    // Lakukan sesuatu jika pengguna meminta halaman login>
}

else{
    
}

?>