<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'dichvu.vtvcab.vn',
  'creator_name' => 'Kivanc',
  'creation_date' => '2023-09-13',
  'rev_no' => 'R0',
  'timezone' => 'Asia/Ho_Chi_Minh',
  'culture' => 'vi',
  'max_day' => '5',
  'rating_system' => 'MCST',
  'episodeOption' => '1',
  'url1' => 'http://dichvu.vtvcab.vn/programs/television-guide?day=##urldate1_1##&month=##urldate1_2##&year=##urldate1_3##&channel=##channel##',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'host_header1' => 'dichvu.vtvcab.vn',
  'urldate_format1' => 'd-m-Y||#split#(-)',
  'show' => '<tbody>.*?(?:<tr>)(.*?)(?:<\\/tr>).*?<\\/tbody>||#exclude#">Chưa',
  'start' => '<td>\\s*(\\d+:\\d+)',
  'start_format' => 'H#i',
  'title' => '<\\/td>\\s*<td>(.*?)<\\/td>\\s*<td>',
  'episode' => 'Tập (\\d+)',
  'episode_total' => '\\((\\d+)\\s*(?:T(?:ập)?)?\\)',
  'rating' => '.*<\\/td>\\s*<td>(.*?)<\\/td>',
  'ccurl1' => 'http://dichvu.vtvcab.vn/programs/television-guide',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'cchost_header1' => 'dichvu.vtvcab.vn',
  'ccchannel_block' => '<select class="chanel-list".*?(?:<option)(.*?)(?:<\\/option>).*?<\\/select>',
  'ccchannel_id' => 'value="(\\d+)',
  'ccchannel_name' => '">(.*?)$',
);
?>