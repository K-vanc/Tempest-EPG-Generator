<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'snt.com.py',
  'creator_name' => 'Kivanc',
  'creation_date' => '2023-04-05',
  'rev_no' => 'R0',
  'timezone' => 'America/Asuncion',
  'culture' => 'es',
  'max_day' => '7.1',
  'first_day' => '0123456',
  'url1' => 'https://www.snt.com.py/programacion/',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'host_header1' => 'www.snt.com.py',
  'show' => '"(?:monday|tuesday|wednesday|thursday|friday|saturday|sunday)":\\s*\\[.*?(?:"show")(.*?"customBlock".*?)(?:}).*?}\\s*\\]',
  'start' => '"startsAt":\\s*"(.*?)"',
  'start_format' => 'g#i#s a',
  'stop' => '"endsAt":\\s*"(.*?)"',
  'stop_format' => 'g#i#s a',
  'title' => '"name":\\s*"(.*?)"',
  'desc' => '"description":\\s*"(.*?)"',
  'showicon' => '"811":\\s*"(.*?)"|>|"700":\\s*"(.*?)"|>|"300":\\s*"(.*?)"||#addstart#https://www.snt.com.py/wp-content/uploads',
  'channel_logo' => '||#add#https://www.snt.com.py/wp-content/uploads/2023/07/logo-1-150x68.png',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#snt',
  'ccchannel_name' => '||#set#SNT',
);
?>