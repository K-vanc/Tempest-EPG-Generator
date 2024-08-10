<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'itn.lk',
  'creator_name' => 'Kivanc',
  'creation_date' => '2024-08-10',
  'rev_no' => 'R0',
  'timezone' => 'UTC',
  'culture' => 'si',
  'max_day' => '7.1',
  'url1' => 'https://itn.lk/wp-admin/admin-ajax.php?action=wcs_get_events_json&content%5Bwcs_type%5D%5B%5D=##channel##&start=##urldate1##&end=##stopdate1##',
  'requestOption1' => '1',
  'accept_header1' => 'application/json, text/plain, */*',
  'XMLHttpRequest1' => 'on',
  'urldate_format1' => 'Y-m-d',
  'stopdate_format1' => 'Y-m-d',
  'show' => '({"title".*?"meta":.*?})',
  'start' => '"start":"(.*?)\\+',
  'start_format' => 'Y-m-d\\TH#i#s',
  'stop' => '"end":"(.*?)\\+',
  'stop_format' => 'Y-m-d\\TH#i#s',
  'title' => '"title":"(.*?)",',
  'channel_logo' => '||#add#https://itn.lk/wp-content/uploads/2022/03/ITN-Logo.svg',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#15|16',
  'ccchannel_name' => '||#set#ITN General|ITN Special',
);
?>