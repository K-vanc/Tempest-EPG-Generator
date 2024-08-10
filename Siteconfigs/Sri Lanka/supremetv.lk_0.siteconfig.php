<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'supremetv.lk',
  'creator_name' => 'Kivanc',
  'creation_date' => '2024-08-10',
  'rev_no' => 'R0',
  'timezone' => 'Asia/Colombo',
  'culture' => 'si',
  'max_day' => '7.1',
  'first_day' => '0123456',
  'url1' => 'https://supremetv.lk/time-schedule-new/',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'show' => '<div id="(?:monday|tuesday|wednesday|thursday|friday|saturday|sunday|F)-tab.*?(?:<p>)(\\s*\\d.*?)(?:<\\/p>).*?<\\/div>||#replace#(-12)(\\.00\\sAM)##(<p>12)(\\.00-\\d{2}\\.\\d{2}\\sAM)##(-12\\.\\d{2}\\sPM)##(-00\\.\\d{2}\\sAM)||-00\\2##<p>00\\2## AM\\1## PM\\1',
  'start' => '^\\s*(\\d{2}\\.\\d{2})|#|[| |]\\d\\s([AP]M)(?:\\s|-)',
  'start_format' => 'h#i A',
  'stop' => '-(\\d{2}\\.\\d{2}\\s*[AP]M)',
  'stop_format' => 'h#i A',
  'title' => '\\s[AP]M\\s(.*?)$',
  'channel_logo' => '||#add#https://supremetv.lk/wp-content/uploads/2022/10/SUPREME-LOGO-ENGLISH-VERSION-201x300.png',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#supremetv',
  'ccchannel_name' => '||#set#SupremeTV',
);
?>