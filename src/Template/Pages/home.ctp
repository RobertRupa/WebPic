<?= $this->Html->css('bootstrap/extensions/filter-control/bootstrap-table-filter-control.css') ?>
<?= $this->Html->css('bootstrap/dataTables.bootstrap4.min.css') ?>
<?= $this->Html->script('bootstrap/extensions/filter-control/bootstrap-table-filter-control.js') ?>
<?= $this->Html->script('jquery/jquery.dataTables.min.js') ?>
<?= $this->Html->script('bootstrap/dataTables.bootstrap4.min.js') ?>
<script>
  var tableHTML = `<table class="table search">
    <thead>
      <tr>
        <th><?php echo __('ID') ?></th>
        <th><?php echo __('Unique ID') ?></th>
        <th><?php echo __('Creation Date') ?></th>
        <th><?php echo __('Additional information') ?></th>
        <th><?php echo __('Img Alt') ?></th>
        <th><?php echo __('Preview') ?></th>
      </tr>
      </thead>
      <tfoot>
        <tr>
        <th><?php echo __('ID') ?></th>
        <th><?php echo __('Unique ID') ?></th>
        <th><?php echo __('Creation Date') ?></th>
        <th><?php echo __('Additional information') ?></th>
        <th><?php echo __('Img Alt') ?></th>
        <th><?php echo __('Preview') ?></th>
        </tr>
      </tfoot>
    </table>`;
</script>
<p></p>
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#uniqueIDContent"><?php echo __('Search by Unique ID') ?></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#listContent"><?php echo __('List') ?></a>
  </li>
  <div id="tabContent" class="tab-content">
    <div class="tab-pane fade active show" id="uniqueIDContent">
      <form class="searchByUniqueID">
        <div class="form-group">
          <label for="uniqueID"><?= __("Unique ID") ?></label>
          <input type="text" class="form-control" id="uniqueID" aria-describedby="uniqueIDHelp" >
          <small id="uniqueIDHelp" class="form-text text-muted"><?php echo __('Enter a valid unique ID.') ?></small>
        </div>
        <div class="form-group">
          <label for="limit"><?php echo __("Limit filest to show") ?></label>
          <input type="number" class="form-control" id="number" value="2">
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="all">
          <label class="form-check-label" for="all"><?php echo __('Show additionally old files') ?></label>
        </div>
        <button type="submit" class="btn btn-primary float-right"><?php echo __('Submit') ?></button>
      </form>
      <div class="search-results"></div>
      <script>
      $('.searchByUniqueID').on('submit', function(event){
        event.preventDefault();
        ($('#all').is(':checked') ? isAll = 1 : isAll = 0);
        var searchResults = $('.search-results');
        searchResults.html('');
        searchResults.append(tableHTML);
        $('.table.search').DataTable({
        "ajax": {
          url: "https://pict.olimp-labs.com/api/product/?unique_id="+$('#uniqueID').val()+"&limit="+$('#number').val()+"&all="+isAll,
          "dataSrc": function ( json ) {
            for ( var i=0, ien=json.length ; i<ien ; i++ ) {
              json[i][5] = '<a href="'+json[i][5]+'" target="_blank"><img src="'+json[i][5]+'"/></a>';
            }
            return json;
          }
        }
      });
      });
      </script>
    </div>
    <div class="tab-pane fade" id="listContent">
    <script>
    $(document).ready(function() {
      $('#listContent').append(tableHTML);
      $('#listContent .table').removeClass('search');
      $('.table').DataTable({
        "language": {
          "url": "/js/bootstrap/dataTables.Polish.json"
        },
        "ajax": {
          url: "https://pict.olimp-labs.com/api/list",
          "dataSrc": function ( json ) {
            for ( var i=0, ien=json.length ; i<ien ; i++ ) {
              json[i][5] = '<a href="'+json[i][5]+'" target="_blank"><img src="'+json[i][5]+'"/></a>';
            }
            return json;
          }
        }
      });
    });
    </script>
    </div>
  </div>
</div>