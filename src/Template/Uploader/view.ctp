<p>
  <h1><?php echo __('Unique ID'); ?>: <?= $file->unique_id; ?></h1>
</p>
<p><?php echo __('Created'); ?>: <strong><?= $file->created; ?></strong></p>
<p><?php echo __('Additional information'); ?>: 
  <p><strong><?= $file->comment; ?></strong></p>
</p>
<p><?php echo __('Alt'); ?>: <strong><?= $file->alt; ?></strong></p>
<p>
<?php echo __('URL'); ?>: <strong><span class="url"><?= "https://" . $_SERVER['SERVER_NAME'].$file->url; ?></span></strong>
  <span class="btn btn-secondary copy"><?php echo __('Copy to clipboard'); ?></span>
</p>
<p>
<?= $this->Html->image($file->url,[
          'height' => '500',
          'alt' => $file->alt
        ]); ?>
</p>
<div class="form actions">
  <?= $this->Html->link(
    __("Delete"), [
      'action' => 'delete',
      $file->id,
      'archive_all'
    ],["class" => "btn btn-danger float-right"]); ?>
</div>
<script>
  $(".copy").on("click", function (){
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(".url").text()).select();
    document.execCommand("copy");
    $temp.remove();
    $(this).removeClass("btn-secondary");
    $(this).addClass("btn-success");
    $(this).html("<?php echo __('Copied to clipboard'); ?>");
  });
</script>