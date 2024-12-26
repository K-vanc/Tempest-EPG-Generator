<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'mako.co.il',
  'creator_name' => 'Kivanc',
  'creation_date' => '2023-04-01',
  'rev_no' => 'R0',
  'timezone' => 'UTC',
  'culture' => 'he',
  'max_day' => '9.1',
  'episodeOption' => '1',
  'url1' => 'https://www.mako.co.il/AjaxPage?jspName=EPGResponse.jsp',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'host_header1' => 'www.mako.co.il',
  'show' => '({"DisplayEndTime".*?})',
  'start' => '"StartTimeUTC":(\\d+)',
  'start_format' => 'java',
  'title' => '"ProgramName":"(.*?)",',
  'desc' => '"EventDescription":"(.*?)",',
  'category' => '"(Live)Broadcast":true',
  'showicon' => '"Picture":"(.*?)"',
  'season' => '"Season":"(.*?)"',
  'episode' => 'EP (\\d+)"',
  'channel_logo' => '||#add#https://img.mako.co.il/2023/03/08/LOGOBIGMAKONEW.png',
  'ccrequestOption1' => '1',
  'ccchannel_id' => '||#set#mako',
  'ccchannel_name' => '||#set#Mako',
);
?>