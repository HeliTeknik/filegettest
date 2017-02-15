<?php
require 'scraperwiki.php';
    require 'scraperwiki/simple_html_dom.php';
?>


<?php
$url="http://www.sozcu.com.tr/kategori/yazarlar";
$html = scraperWiki::scrape( $url );
$dom = new simple_html_dom();
$dom->load($html);

$record = array(
            'html' => $tds[0]->plaintext 
        );
 scraperwiki::save( array('html'), $record )

?>
