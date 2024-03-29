<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'texxas.de',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-03-07',
  'rev_no' => 'R0',
  'timezone' => 'Europe/Berlin',
  'culture' => 'de',
  'max_day' => '15',
  'rating_system' => 'FSK',
  'url1' => 'https://www.texxas.de/tv/programm/##urldate1##/tagesansicht/##cclogo##/||#replace#(\\d+#\\#)||',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'content_type1' => 'text/html; charset=UTF-8',
  'host_header1' => 'www.texxas.de',
  'urldate_format1' => 'Y-m-d',
  'show' => 'lass="tvBroadcastItem">.*?(?:<table|\\&)(.*?)(?:<\\/table|;).*?<\\/td><td\\sc||#repeat###channel###5||#include#class=',
  'start' => '<tr><td>(\\d{2}[\\.:]\\d{2})',
  'start_format' => 'H#i',
  'title' => '<a.*?>(.*?)<\\/',
  'category' => '<h4>(.*?)(?:,\\s\\w+)+?(?:\\s\\d{4})?<\\/h4>|#|[|,|]alt="(Film)"||#split#(,|-\\/)',
  'channel_logo' => '||#add#https://imgtv.texxas.de/stations/pngTrans/##cclogo##.png||#replace#(\\#\\#\\d+)||',
  'production_date' => '<h4>.*?,\\s\\w+\\s(\\d{4})<\\/h4>',
  'country' => '<h4>.*?,\\s([A-Z]+(?:,\\s[A-Z]+)?)(?:\\s\\d{4})?<\\/h4>||#split#(,)',
  'pagekey1' => 'href="(.*?)"',
  'detail_url1' => 'https://www.texxas.de##pagekey1##',
  'detail_requestOption1' => '1',
  'detail_accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'detail_host_header1' => 'www.texxas.de',
  'detail_title' => '<h1>(.*?)<\\/h1>',
  'detail_subtitle' => '<div id="contentTitle">.*?<\\/h5><h6>(.*?)(?:,\\s\\w+,)+(?:,\\s[A-Z]+)?(?:\\s\\d{4})?\\s\\|',
  'detail_desc' => '"contentBoxLeftContentBox"><p>(.*?)<\\/p>',
  'detail_showicon' => '"contentBoxLeftContentBox"><img src="(.*?)"',
  'detail_actor' => 'Darsteller\\s*<\\/td>\\s*<td>(.*?)<\\/td>||#split#(,\\s)||#replace#(\\s\\(.*?\\))',
  'detail_role' => 'Darsteller\\s*<\\/td>\\s*<td>(.*?)<\\/td>||#split#(,\\s)||#replace#(.*?\\()(.*?)$##(^[^\\(]+)(\\))$||\\2##\\1',
  'detail_director' => 'Regie\\s*<\\/td>\\s*<td>(.*?)<\\/td>||#split#(,\\s)',
  'detail_presenter' => '(?:Moderation|Mit)\\s*<\\/td>\\s*<td>(.*?)<\\/td>||#split#(,\\s)',
  'detail_composer' => 'Musik\\s*<\\/td>\\s*<td>(.*?)<\\/td>||#split#(,\\s)',
  'detail_commentator' => 'Kommentar\\s*<\\/td>\\s*<td>(.*?)<\\/td>||#split#(,\\s)',
  'detail_writer' => 'Buch\\s*<\\/td>\\s*<td>(.*?)<\\/td>||#split#(,\\s)',
  'detail_videoaspect' => '<img src="\\/img\\/(icon16zu9)||#replace#(icon16zu9)||16:9',
  'detail_videoquality' => '<img src="\\/img\\/(iconHD)||#replace#(iconHD)||HD',
  'detail_audio' => '<img src="\\/img\\/(iconDolby)|>|<img src="\\/img\\/(iconStereo)||#replace#(iconDolby)##(iconStereo)||Dolby Digital##Stereo',
  'detail_pshown' => 'Wiederholung vom (\\d{2}\\.\\d{2}\\.\\d{4})||#convert#d.m.Y#Ymd',
  'detail_subtitles' => '<img src="\\/img\\/(iconVT150)||#type#d',
  'detail_rating' => 'FSK<\\/td><td>(.*?)<\\/td>',
  'detail_star_rating' => '<\\/p><h5>.+?<img\\ssrc=".*?alt="(\\d(?:\\.\\d)?)\\sSterne||#addend#/5',
  'detail_star_rating_icon' => '<\\/p><h5>.+?<img\\ssrc="(.*?)"||#addstart#https://www.texxas.de',
  'ccurl1' => 'https://www.texxas.de/tv/programm/heute/tagesansicht/##subpage1##/',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'cccontent_type1' => 'text/html; charset=UTF-8',
  'ccsubpage_format1' => '0|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23|24|25|26|27|28|29|30|31',
  'ccchannel_block' => '<table id="tvColView".*?(?:<tbody><tr><td>)(.+?)(?:<\\/td><\\/tr>).*?<\\/tbody><\\/table><\\/td><td class="tvBorderItem">||#ccsubpage#set(0|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23|24|25|26|27|28|29|30|31)',
  'ccchannel_id' => '#counter#0||#calc#%5',
  'ccchannel_name' => '<h2>(.*?)<\\/h2>',
  'ccchannel_logo' => 'pngTrans\\/(.*?)\\.|#|[|##|]#__#(.*?)\\|##\\|',
);
?>