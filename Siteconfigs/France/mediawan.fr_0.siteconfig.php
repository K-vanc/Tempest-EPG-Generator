<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'mediawan.fr',
  'creator_name' => 'Kivanc',
  'creation_date' => '2023-03-06',
  'rev_no' => 'R0',
  'timezone' => 'Europe/Paris',
  'culture' => 'fr',
  'max_day' => '21.1',
  'episodeOption' => '1',
  'url1' => 'https://www.##channel##',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'host_header1' => 'www.##channel##',
  'show' => '(<div class="one".*?)<\\/div>\\s*<\\/div>',
  'start' => 'data-startdate="(.*?)"',
  'start_format' => 'Y-m-d\\TH#i#s',
  'title' => 'data-title="(.*?)"',
  'desc' => 'data-synopsis=.*?"(.*?)"',
  'showicon' => 'src="(.*?)"',
  'channel_logo' => '<img alt="logo" src="(.*?)"||#addstart#https://www.##channel##',
  'ccurl1' => 'https://www.chasseetpechetv.fr/',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'cchost_header1' => 'www.chasseetpechetv.fr',
  'ccchannel_block' => '(?:<li><a target="_blank".*?<\\/li>|<div class="logo">\\s*<a title="logo" href=\'\\/\'>.*?<\\/a>)||#replace#(<a title=")logo(" href=\')\\/(\'>)||\\1Chasse & Pêche\\2https://www.chasseetpechetv.fr\\3',
  'ccchannel_id' => 'href=(?:"|\').*?www\\.(.*?)(?:"|\')||#replace#(\\/)||',
  'ccchannel_name' => 'title="(.*?)"||#replace#(\\s*)##(-)##(\\&)||## ## \\1 ||#word#',
);
?>