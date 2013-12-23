<?php
session_start();

function load_main_html($section) {

    require "include/query_collection.php";
    
    $main = new Skin("BeClothing");
    
    /*
     * PLACEHOLDER -> HEADER
     */

    $main->setContent("section", $section);
    $main->setContent("ShoppingCart");
    $main->setContent("TotalPrice");
    # MENU
    $res_menu = getResult($query_menu);
    $main->setContent("HeaderMenu", $res_menu);

    /*
     * PLACEHOLDER -> FOOTER
     */

    # MENU
    $main->setContent("FooterMenu", $res_menu);
    # SITE ADDRESS
    $res_siteaddress = getResult($query_siteaddress);
    $main->setContent("SiteAddress", $res_siteaddress);
    # SITE PHONE
    $res_sitephone = getResult($query_sitephone);
    $main->setContent("SitePhone", $res_sitephone);
    # SITE EMAIL
    $res_siteemail = getResult($query_siteemail);
    $main->setContent("SiteEmail", $res_siteemail);

    return $main;
}

?>