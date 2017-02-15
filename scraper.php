//
//<?
//$content = file_get_contents('http://www.sozcu.com.tr/kategori/yazarlar/');
//echo $content;
//



<?php
require 'scraperwiki.php';
// A scraper for airline information from PHL.org
require 'scraperwiki/simple_html_dom.php'; 
$html_content = scraperwiki::scrape("http://www.sozcu.com.tr/kategori/yazarlar"); 
$html = str_get_html($html_content);
scraperwiki::sqliteexecute("drop table if exists swdata"); 
scraperwiki::save_var('html',  $html);
?>
