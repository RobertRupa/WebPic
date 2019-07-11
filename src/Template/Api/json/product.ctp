<?php
  $files = [];
  if(is_array($uploader)){
    foreach($uploader as $key => $file_single){
      $files[$key][] = $file_single['id'];
      $files[$key][] = $file_single['unique_id'];
      $files[$key][] = $file_single['created'];
      $files[$key][] = $file_single['comment'];
      $files[$key][] = $file_single['alt'];
      $files[$key][] = "https://" . $_SERVER['SERVER_NAME'].$file_single['url'];
    }
    echo json_encode($files);
    return;
  }
  else {
    if(count($uploader)>1){
      foreach($uploader as $key => $file_single){
        $file = [];
        $file[] = $file_single->id;
        $file[] = $file_single->unique_id;
        $file[] = $file_single->created;
        $file[] = $file_single->comment;
        $file[] = $file_single->alt;
        $file[] = "https://" . $_SERVER['SERVER_NAME'].$file_single->url;
        $files[$key] = $file;
      }
      echo json_encode($files);
      return;
    }
    else{
      $files[] = $uploader->id;
      $files[] = $uploader->unique_id;
      $files[] = $uploader->created;
      $files[] = $uploader->comment;
      $files[] = $uploader->alt;
      $files[] = "https://" . $_SERVER['SERVER_NAME'].$uploader->url;
    }
    
    echo json_encode($files);
    return;
  }
  echo json_encode($files);
