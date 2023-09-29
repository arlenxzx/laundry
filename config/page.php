<?php
if (isset($_GET)) {
    @$p = $_GET['page'];
    switch ($p) {
        //transaksi
        case 'tr':
            include "../../crud/transaksi/index.php";
            break;
        
            case 'dtr';
            include "../../crud/transaksi/detail.php";
            break;
        
        case 'inptr':
            include "../../crud/transaksi/tambah.php";
            break;
        
        case 'edtr':
            include "../../crud/transaksi/edit.php";
            break;
        
        //member
        case 'mem':
            include "../../crud/member/index.php";
            break;
        
        case 'inpmem':
            include "../../crud/member/tambah.php";
            break;
        
        case 'edmem':
            include "../../crud/member/edit.php";
            break;
        
        //paket
        case 'pa':
            include "../../crud/paket/index.php";
            break;
        
        case 'inppa':
            include "../../crud/paket/tambah.php";
            break;
        
        case 'edpa':
            include "../../crud/paket/edit.php";
            break;
        
        //outlet
        case 'ot':
            include "../../crud/outlet/index.php";
            break;
        
        case 'inpot':
            include "../../crud/outlet/tambah.php";
            break;
        
        case 'edot':
            include "../../crud/outlet/edit.php";
            break;
        
        //user
        case 'us':
            include "../../crud/user/index.php";
            break;
        
        case 'inpus':
            include "../../crud/user/tambah.php";
            break;
        
        case 'edus':
            include "../../crud/user/edit.php";
            break;

        default:
        include "default.php";
        break;
    }
}else {
    include "default.php";
}
?>