<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'adsports.ae',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-09-08',
  'rev_no' => 'R0',
  'timezone' => 'Asia/Dubai',
  'culture' => 'ar',
  'max_day' => '7.1',
  'episodeOption' => '1',
  'keepindexpage' => 'on',
  'url1' => 'https://adsports.ae/schedule/144/%D9%82%D9%86%D8%A7%D8%A9-%D8%A3%D8%A8%D9%88-%D8%B8%D8%A8%D9%8A-%D8%A7%D9%84%D8%B1%D9%8A%D8%A7%D8%B6%D9%8A%D8%A9-1',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'content_type1' => 'text/html; charset=UTF-8',
  'urldate_format1' => '#range#Y-m-d',
  'grabber_1' => 'on',
  'gpattern_1' => '(.)||#replace#(.+)##(,)||##urldate1####|',
  'show' => '<div id="id_##channel##_(?:##grabber_1##).*?(?:<tr )(.*?)(?:<\\/tr>).*?<\\/table>',
  'start' => '<td>(\\d{2}[\\.:]\\d{2}\\s[ap]m)',
  'start_format' => 'h#i a',
  'title' => '<h1.*?>(.*?)<\\/h1>',
  'episode' => '<span>الحلقة  (\\d+)',
  'channel_logo' => '||#add#https://admango.cdn.mangomolo.com/analytics/uploads/164/##cclogo##.png',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#144|145',
  'ccchannel_name' => '||#set#Abu Dhabi Sports 1| Abu Dhabi Sports 2',
  'ccchannel_logo' => '||#set#5e3434b7b3|5e3434c247',
);
?>