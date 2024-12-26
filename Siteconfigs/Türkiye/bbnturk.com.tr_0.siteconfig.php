<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'bbnturk.com.tr',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-04-09',
  'rev_no' => 'R0',
  'timezone' => '+03:00',
  'culture' => 'tr',
  'max_day' => '7.1',
  'first_day' => '0123456',
  'url1' => 'https://www.bbnturk.com.tr/yayin-akisi/',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'content_type1' => 'text/html; charset=UTF-8',
  'show' => '<tbody>.*?(?:<tr>)(.*?)(?:<\\/tr>).*?<\\/tbody>',
  'start' => '<td.*?>\\s*(?:<span.*?>)?\\s*(\\d{2}[\\.:]\\d{2})',
  'start_format' => 'H#i',
  'title' => '[\\.:]\\d{2}\\s*<\\/td>\\s*<td.*?>(?:<span.*?>)?(.*?)<\\/td>|>|[\\.:]\\d{2}\\s*<\\/span>\\s*<br>\\s*<\\/td><td.*?>(?:<span.*?>)?(.*?)<\\/',
  'category' => '<\\/td><td.*?>.*?<\\/td><td.*?>(?:<span.*?>)?(.*?)<\\/',
  'channel_logo' => '||#add#https://www.bbnturk.com.tr/wp-content/uploads/2021/09/logo-1.png?##channel##',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#bbnturk',
  'ccchannel_name' => '||#set#BBN Türk',
);
?>