<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'peotv.com',
  'creator_name' => 'Kivanc',
  'creation_date' => '2022-12-25',
  'rev_no' => 'R0',
  'timezone' => 'Asia/Colombo',
  'culture' => 'si',
  'max_day' => '6.1',
  'episodeOption' => '1',
  'url1' => 'https://www.peotv.com/tvguide/channel/##channel##',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'content_type1' => 'text/html; charset=UTF-8',
  'host_header1' => 'www.peotv.com',
  'show' => '(<a href="(?:|#)" data-toggle="modal".*?<\\/div>\\s*<\\/div>\\s*<\\/div>\\s*<\\/div>)',
  'start' => 'model-\\d+">\\s*(\\d{2}[\\.:]\\d{2})',
  'start_format' => 'H#i',
  'stop' => '<span style="margin-left:.*?>.*?to\\s(\\d{2}[\\.:]\\d{2})',
  'stop_format' => 'H#i',
  'title' => '<h4 class="modal-title".*?>(.*?)<\\/h4>',
  'desc' => '<p class="prog-desc">(.*?)<(?:\\/)?span',
  'category' => '<p style="margin-left.*?>(.*?)<\\/p>',
  'showicon' => '<div class="model-image".*?<img src="(.*?)"',
  'channel_logo' => '||#add#https://www.peotv.com/images/channel-logos/square/##cclogo##',
  'pagekey1' => '>\\[<a href="(.*?)"',
  'detail_url1' => 'https://www.peotv.com##pagekey1##',
  'detail_requestOption1' => '1',
  'detail_accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'detail_content_type1' => 'text/html; charset=UTF-8',
  'detail_host_header1' => 'www.peotv.com',
  'detail_desc' => '<meta name="description" content="(.*?)"\\/>',
  'detail_category' => 'Genre :<\\/span>(.*?)<|#|Sub Genre :<\\/span>(.*?)<',
  'detail_season' => 'Series :<\\/span>(.*?)<',
  'detail_episode' => 'Episode :<\\/span>(.*?)<',
  'detail_actor' => 'Cast :<\\/span>(.*?)<\\/||#split#(,)',
  'ccurl1' => 'https://www.peotv.com/tvguide',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'cccontent_type1' => 'text/html; charset=UTF-8',
  'cchost_header1' => 'www.peotv.com',
  'ccchannel_block' => '<div ><a href=".*?<\\/a>',
  'ccchannel_id' => '<a href="\\/tvguide\\/channel\\/(.*?)"',
  'ccchannel_name' => '<a href="\\/tvguide\\/channel\\/(.*?)\\/||#replace#(-)|| ||#word#',
  'ccchannel_logo' => '<img src="\\/images\\/channel-logos\\/square\\/(.*?)"',
);
?>