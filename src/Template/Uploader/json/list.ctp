<?php
if(is_array($uploader)){
  foreach($uploader as $key => $file_single){
    $file[$key]['url'] = "https://" . $_SERVER['SERVER_NAME'].$file_single['url'];
  }
}
else {
  foreach($uploader as $key => $file_single){
    $file_single->url = "https://" . $_SERVER['SERVER_NAME'].$file_single->url;
    $files[] = $file_single;
  }
  echo json_encode($files);
  return;
}
echo json_encode($uploader);
