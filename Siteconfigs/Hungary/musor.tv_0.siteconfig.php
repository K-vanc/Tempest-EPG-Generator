<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'musor.tv',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-05-15',
  'rev_no' => 'R0',
  'timezone' => 'UTC',
  'culture' => 'hu',
  'max_day' => '28',
  'episodeOption' => '1',
  'url1' => 'https://musor.tv/napi/tvmusor/##channel##/##urldate1##',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'content_type1' => 'text/html; charset=utf-8',
  'urldate_format1' => 'Y.m.d',
  'show' => '<div class="multicolumn multicolumndayprogarea">.*?(?:<div class="smartpe_progentry (?:smartpe_progentry_old)?")(.*?)(?:<\\/span><\\/div>).*?<div class="fastnavigation"',
  'start' => 'itemprop="startDate" content="(.*?)"',
  'start_format' => 'Y-m-d\\G\\M\\TH#i#s',
  'title' => 'target="_blank">(.*?)<\\/a>||#replace#(\\s\\d+\\.)$##(\\s[XVILMDC]+\\.\\/\\d+\\.)$||##',
  'subtitle' => '<div class="smartpe_progentrylong">(.*?)<br\\/><br\\/>||#replace#(<p\\/>(?:Rendező|Rendezte).*?)$##(<p\\/>Főszereplők.*?)$##(<p\\/><p\\/>.*?)$##^(.*?<p\\/>)##^((?:\\d+\\/)?\\d+\\.(?:\\s)?(?:rész)?(?:\\:)?)||########',
  'desc' => '<div class="smartpe_progentrylong">(?:.*?<p\\/><p\\/>)?(.*?)<\\/div>||#replace#((?:<p\\/>)?(?:Rendező|Rendezte).*?)$##((?:<p\\/>)?Főszereplők.*?)$||##',
  'category' => '"smartpe_progshortdesc" itemprop="description">(?!\\d{4})(?:[a-z].*?\\s)?(.*?)(?:,(?:\\s)?\\d{4})?<\\/|#|<div class="smartpe_recommendation_live" title="(.*?)\\s||#word#',
  'showicon' => '"smartpe_progentrycell smartpe_screenshot">\\s*<img src="(.*?)"||#replace#(\\/small\\/)||/fb/||#addstart#https:',
  'season' => 'target="_blank">.*?\\s([XIVCMDL]+)\\.||#roman#',
  'episode' => '<div class="smartpe_progentrylong">(?:\\d+\\/)?(\\d+)\\.|>|target="_blank">.*?(\\d+)\\.<\\/a>',
  'episode_total' => '<div class="smartpe_progentrylong">(\\d+)\\/\\d+\\.',
  'channel_logo' => '<meta itemprop="image" content="(.*?)"',
  'production_date' => '"smartpe_progshortdesc" itemprop="description">.*?,(?:\\s)?(\\d{4})<\\/div',
  'country' => '"smartpe_progshortdesc" itemprop="description">([a-z].*?)(?:,|\\s)||#split#(-)||#word#',
  'videoquality' => '<span class="smartpe_(hd|sd)"||#upper#',
  'premiere' => '<div class="smartpe_recommendation_(premier)"||#replace#(premier)||true',
  'rating' => 'pg_(\\d+)(?:_old)?\\.svg"\\sclass="smartpe_rating"',
  'rating_icon' => '<img src="(\\S+)"\\sclass="smartpe_rating"||#replace#(_old)||||#addstart#https://musor.tv',
  'pagekey1' => '<a id="\\S+"\\shref="(.*?)"',
  'detail_url1' => 'https://musor.tv##pagekey1##',
  'detail_requestOption1' => '1',
  'detail_accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'detail_content_type1' => 'text/html; charset=utf-8',
  'detail_desc' => '<td class="eventinfolongdesc"\\s*colspan="2">(.*?)\\s*<div\\s*class||#replace#((?:<p\\/>)?(?:Rendező|Rendezte).*?)$##((?:<p\\/>)?Főszereplők.*?)$##^(.*?<p\\/><p\\/>)##^(.*?<p\\/><p\\/>)||######',
  'detail_category' => '<div class="eventinfocontenttype">(.*?)<\\/div>|#|<span class="smartpe_recommendation_text_common smartpe_recommendation_text" title="(Élő)||#split#(:|\\/)||#word#',
  'detail_showicon' => '<meta property="og:image" content="(.*?)"',
  'detail_actor' => '<p\\/>Főszereplők:(.*?)\\s*<||#split#(,)',
  'detail_director' => '<p\\/>(?:Rendező|Rendezte):(.*?)\\s*<||#split#(,)',
  'detail_subtitles' => '<div class="(txtflag)"',
  'detail_star_rating' => '<span class="rating_text_container">\\s*<span>(?!0)(\\d(?:\\.\\d+)?)||addend#/5',
  'ccurl1' => 'https://musor.tv',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'cccontent_type1' => 'text/html; charset=utf-8',
  'ccchannel_block' => '<td class="channellistcell".*?>.*?(?:<a href="\\/\\/)(.*?)(?:<\\/a>).*?<\\/td>',
  'ccchannel_id' => 'musor\\.tv\\/(?:mai\\/tvmusor\\/)?(.*?)"',
  'ccchannel_name' => '^.*?">(.*?)$',
);
?>