<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'digiturkburada.com',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-12-26',
  'rev_no' => 'R0',
  'timezone' => 'UTC',
  'culture' => 'tr',
  'max_day' => '8',
  'url1' => 'https://cdn.digiturkburada.com/api/yayin-akisi.asp?channelNo=##channel##&date=##urldate1##&tomorrow=false&primetime=false',
  'requestOption1' => '1',
  'accept_header1' => 'application/json, text/javascript, */*; q=0.01',
  'content_type1' => 'application/json; Charset=UTF-8',
  'origin_header1' => 'https://www.digiturkburada.com',
  'urldate_format1' => 'j.n.Y',
  'show' => '"CPrograms":\\s*\\[.*?(?:{)(.*?)(?:}).*?\\]',
  'start' => '"PStartTime":\\s*".*?\\((\\d+)',
  'start_format' => 'java',
  'stop' => '"PEndTime":\\s*".*?\\((\\d+)',
  'stop_format' => 'java',
  'title' => '"PName":\\s*"(.*?)",',
  'channel_logo' => '"PFilePath":\\s*"(.*?)"||#addstart#http://contentlibrary.digiturk.com.tr',
  'ccurl1' => 'https://www.digiturkburada.com/digiturk_yayin_akisi.html',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'cccontent_type1' => 'text/html',
  'ccchannel_block' => '<tr>.*?<\\/tr>',
  'ccchannel_id' => '<td>(\\d+)<\\/td>',
  'ccchannel_name' => '<a href=.*?>(.*?)<\\/',
);
?>