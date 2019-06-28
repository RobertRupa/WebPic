<!-- File: src/Template/Uploader/archive_unique_id.ctp -->

<?= $this->Html->css('bootstrap/extensions/filter-control/bootstrap-table-filter-control.css') ?>
<?= $this->Html->css('bootstrap/dataTables.bootstrap4.min.css') ?>
<?= $this->Html->script('bootstrap/extensions/filter-control/bootstrap-table-filter-control.js') ?>
<?= $this->Html->script('jquery/jquery.dataTables.min.js') ?>
<?= $this->Html->script('bootstrap/dataTables.bootstrap4.min.js') ?>

<h1>list of files with unique ID: <b><?= $this->request->getQuery('unique_id'); ?></b></h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Unique ID</th>
      <th scope="col">Created</th>
      <th scope="col">Additional information</th>
      <th scope="col">Preview</th>
    </tr>
  </thead>
  <?php foreach ($files as $file): ?>
  <tr>
    <td>
      <?= $this->Html->link($file->unique_id, ['action' => 'view', $file->id]) ?>
    </td>
    <td>
      <?= $file->created->format(DATE_RFC850) ?>
    </td>
    <td>
      <?= $file->comment ?>
    </td>
    <td>
    <?= $this->Html->link(
      $this->Html->image($file->url,[
          'height' => '100',
          'width' => '100',
          'alt' => $file->alt
        ]),
        [
          'action' => 'view', $file->id
        ],
        ['escape' => false]
    ); ?>
    </td>
  </tr>
  <?php endforeach; ?>
</table>
<script>
$(document).ready(function() {
    $('.table').DataTable();
} );
</script>