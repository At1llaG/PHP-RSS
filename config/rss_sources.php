<?php

    include(dirname( dirname(__FILE__) ) . '/publishers/ahaber.php');
    include(dirname( dirname(__FILE__) ) . '/publishers/cnnturk.php');
    include(dirname( dirname(__FILE__) ) . '/publishers/enSonHaber.php');
    include(dirname( dirname(__FILE__) ) . '/publishers/hastanePlus.php');
    include(dirname( dirname(__FILE__) ) . '/publishers/milliyet.php');
    include(dirname( dirname(__FILE__) ) . '/publishers/mynet.php');
    include(dirname( dirname(__FILE__) ) . '/publishers/ntv.php');
    include(dirname( dirname(__FILE__) ) . '/publishers/sabah.php');
    include(dirname( dirname(__FILE__) ) . '/publishers/saglikHaberAjansi.php');
    include(dirname( dirname(__FILE__) ) . '/publishers/sektorel.php');
    include(dirname( dirname(__FILE__) ) . '/publishers/sozcu.php');
    include(dirname( dirname(__FILE__) ) . '/publishers/trt.php');

    $websites = array(
        "ahaber" => "https://www.ahaber.com.tr/rss/saglik.xml",
        "cnnturk" => "https://www.cnnturk.com/feed/rss/saglik/news",
        "enSonHaber" => "http://www.ensonhaber.com/rss/saglik.xml",
        "hastanePlus" => "https://hastaneplus.com/rss.xml",
        "hastanePlusGoz" => "https://hastaneplus.com/rss/goz/249.xml",
        "milliyet" => "http://www.milliyet.com.tr/rss/rssnew/saglikrss.xml",
        "mynet" => "http://www.mynet.com/haber/rss/kategori/saglik/",
        "ntv" => "https://www.ntv.com.tr/saglik.rss",
        "sabah" => "https://www.sabah.com.tr/rss/saglik.xml",
        "saglikHaberAjansi" => "https://www.saglikhaberajansi.com/rss.xml",
        "sektorel" => "https://www.sektorel.com.tr/rss/saglik-6",
        "sozcu" => "https://www.sozcu.com.tr/rss/saglik.xml",
        "trt" => "http://www.trt.net.tr/rss/saglik.rss");

?>