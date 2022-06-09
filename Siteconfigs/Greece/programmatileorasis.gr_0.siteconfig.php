<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'programmatileorasis.gr',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-06-09',
  'rev_no' => 'R0',
  'timezone' => 'Europe/Athens',
  'culture' => 'el',
  'max_day' => '7',
  'url1' => 'https://programmatileorasis.gr##channel##?date=##urldate1##',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'content_type1' => 'text/html; charset=UTF-8',
  'urldate_format1' => 'Y-m-d',
  'show' => '<tr class="hidshow" style=".*?">(.*?)<\\/tr>',
  'start' => '<td valign="top" style=".*?" class="categ">(\\d{2}[\\.:]\\d{2})',
  'start_format' => 'H#i',
  'title' => '<td style=".*?" class="categ">(.*?)<\\/',
  'desc' => '<\\/span>(.+?)<\\/span>',
  'channel_logo' => '<div class="program_list".*?<img src="(.*?)"||#addstart#https://programmatileorasis.gr',
  'ccurl1' => 'https://programmatileorasis.gr##subpage1##',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'cccontent_type1' => 'text/html; charset=UTF-8',
  'ccsubpage_format1' => '/|/nova.php|/otetv.php',
  'ccchannel_block' => '<div class="channels_list">.*?(?:<td valign="middle" align="center">)(.*?)(?:<\\/td>).*?<\\/div>||#cctag#set([Free]|[Nova]|[Cosmote])',
  'ccchannel_id' => '<a href="(.*?)"',
  'ccchannel_name' => '^(.*?)#__#|#|[| |]alt="(.*?)"',
);
?>