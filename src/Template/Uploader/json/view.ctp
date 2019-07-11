<?php
if(is_array($file)){
  foreach($file as $key => $file_single){
    $file[$key]['url'] = "https://" . $_SERVER['SERVER_NAME'].$file_single['url'];
  }
}
else {
  foreach($file as $key => $file_single){
    $file_single->url = "https://" . $_SERVER['SERVER_NAME'].$file_single->url;
    $files[] = $file_single;
  }
  echo json_encode($file);
  return;
}
echo json_encode($file);
