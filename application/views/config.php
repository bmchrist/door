<?php $this->load->view('layout/header'); ?>
<?php $this->load->helper('form'); ?>

<?php
$options = array(
  0 => 'Red',
  1 => 'Orange',
  2 => 'Yellow',
  3 => 'Green',
  4 => 'Blue',
  5 => 'White',
);
?>
<h3>Configure Users</h3>
<?php echo form_open('app/edit_users'); ?>
<table class="users table">
    <tr>
        <th>Name</th>
        <th>Mac Address</th>
        <th>Color</th>
        <th>Email</th>
        <th>Recieves Emails</th>
        <th></th>
    </tr>
<?php foreach($users as $index => $user): ?>
    <?php echo form_hidden("id[$index]", "$user->id"); ?>
    <tr>
        <td><?php echo form_input("name[$index]", "$user->name"); ?></td>
        <td><?php echo form_input("addr[$index]", "$user->addr"); ?></td>
        <td><?php echo form_dropdown("color[$index]", $options, "$user->color");?></td>
        <td><?php echo form_input("mail[$index]", "$user->mail"); ?></td>
        <td><?php echo form_checkbox("recv_mail[$index]", '1', TRUE);?></td>
        <td><?php echo anchor("app/delete_user/$user->id", 'Delete'); ?></td>
    </tr>
<?php endforeach; ?>
</table>
<?php echo form_submit('submit', 'Update Users'); ?>
</form>

<br/><br/><br/>
<h3>Add a new user</h3>
<?php echo form_open('app/add_user'); ?>
<table class="users table">
    <tr>
        <th>Name</th>
        <th>Mac Address</th>
        <th>Color</th>
        <th>Email</th>
        <th>Recieves Emails</th>
        <th></th>
    </tr>
    <tr>
        <td><?php echo form_input("name", ""); ?></td>
        <td><?php echo form_input("addr", ""); ?></td>
        <td><?php echo form_dropdown("color", $options, "");?></td>
        <td><?php echo form_input("mail", ""); ?></td>
        <td><?php echo form_checkbox("recv_mail", '1', TRUE);?></td>
        <td><?php echo form_submit('submit', 'Add User'); ?></td>
    </tr>
</table>
</form>

<?php $this->load->view('layout/footer'); ?>