<div class="modal hide fade" id="deleteItem">

  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h3>Delete <span class="item-name"></span></h3>
  </div>

  <div class="modal-body">
    <p>Are you sure you want to delete <span class="item-name"></span>?</p>
  </div>

  <div class="modal-footer">
    <?php echo anchor('/admin/users#', 'Cancel', 'data-dismiss="modal" class="btn"'); ?>
    <?php echo anchor('/admin/users#', 'Delete', 'class="btn btn-danger"'); ?>
  </div>

</div>