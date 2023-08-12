<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'jadwaltv.net',
  'creator_name' => 'Kivanc',
  'creation_date' => '2023-08-12',
  'rev_no' => 'R0',
  'timezone' => 'Asia/Jakarta',
  'culture' => 'id',
  'max_day' => '1',
  'url1' => 'https://www.jadwaltv.net/jadwal-pay-tv/##channel##',
  'requestOption1' => '1',
  'show' => '(<tr>.*?<\\/tr>)||#exclude#<td>Acara</td>',
  'start' => '<td>(\\d+:\\d+)WIB',
  'start_format' => 'H#i',
  'title' => '<\\/td>\\s*<td>(.*?)<\\/td>',
  'ccurl1' => 'https://www.jadwaltv.net/jadwal-pay-tv',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'ccchannel_block' => '<option value=".*?<\\/option>',
  'ccchannel_id' => 'value="(.*?)"',
  'ccchannel_name' => '">(.*?)<\\/option>',
);
?>