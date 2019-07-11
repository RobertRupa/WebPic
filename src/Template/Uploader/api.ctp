<pre>
method get
header Accept application/json

Endpoint: https://pict.olimp-labs.com/api

Methods:
  list
  unique_id

Examples:
  - get all data
    https://pict.olimp-labs.com/api/list
  - get data by id
    https://pict.olimp-labs.com/api/product/1
  - get vaild data by unique_id
    https://pict.olimp-labs.com/api/product/?unique_id=sku
    - additional parameters
      - to get specific file extension
        filename=.png
      - to limit resoults
        limit=10
      - to show archived files
        all=1

  https://pict.olimp-labs.com/api/product/?unique_id=OLS-KOLTA-US-0080-CT-001-T01-BL3-PE3-W-O&filename=.png&limit=10&all=1
<pre>
<hr>
<?= $this->Html->css('lightgallery.css') ?>
<?= $this->Html->script('konatsu/webpics.js') ?>
<?= $this->Html->script('lightgallery/lightgallery.min.js') ?>
<?= $this->Html->script('lightgallery/lg-fullscreen.min.js') ?>
<?= $this->Html->script('lightgallery/lg-thumbnail.min.js') ?>
<style>
.image-container{
  display: flex;
}

.image-container a img{
  width: 100%;
}
</style>
<p>
  js library for loadning images onto web pages - <a href="https://pict.olimp-labs.com/js/konatsu/webpics.js">Download</a>
  For this example lightgallery is used - <a href="https://github.com/sachinchoolur/lightgallery.js" target="_blank">Link to Github</a>
</p>
<pre>
Usage
  getImagesByUniqueId('squ', all, limit, 'filename', 'target');
Example:
  getImagesByUniqueId('OLS-KOLTA-US-0080-CT-001-T01-BL3-PE3-W-O', 1, 2, '.png', '.target');

  If param target is defined, images will be appended to provided valid selector.
</pre>
<div class="image-container" id="image-container"></div>
<script>
  getImagesByUniqueId('OLS-KOLTA-US-0080-CT-001-T01-BL3-PE3-W-O', 0, 99, '', '.image-container').then(function(){
    lightGallery(document.getElementById('image-container'));
  });
</script>