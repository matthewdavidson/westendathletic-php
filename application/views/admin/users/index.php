<?php $this->load->view('common/header'); ?>

<div class="page-header">
  <h1>User Management</h1>
</div>

<div class="row">

  <div class="span8">

    <div class="bordered">

      <div class="pull-right">
        <?php echo anchor('/admin/users/new_user', 'New User', 'class="btn btn-primary"'); ?>
      </div>

      <h2>Users</h2>

      <table class="table table-striped table-bordered">

        <thead>
          <tr>
            <th>Username</th>
            <th>Actions</th>
          </tr>
        </thead>

        <tbody>


          <?php foreach ($users as $user) { ?>
          <tr>
            <td><?php echo $user->username; ?></td>
            <td>
              <?php echo anchor('/admin/users/edit/' . $user->id, 'Edit User', 'class="btn"'); ?>
              <?php 
              echo anchor(
                '/admin/users#deleteItem', 
                'Delete User',
                'data-url="' . site_url('/admin/users/destroy/' . $user->id) . '"' .
                'data-name="' . $user->username . '"' .
                'class="btn btn-danger delete"'
              ); 
              ?>
            </td>
          </tr>
          <?php }?>

        </tbody>

      </table>

    </div>
    
  </div>

  <?php $this->load->view('common/sidebar'); ?>

</div>

<?php $this->load->view('common/footer'); ?>