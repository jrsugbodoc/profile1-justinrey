<?php if($this->session->userdata('logged_in')): ?>

<h2> LOGOUT </h2>
<?php echo form_open('users/logout'); ?>

<p>
    <?php if($this->session->userdata('username')): ?>

    <?php echo "You are logged in as " .$this->session->userdata('username'); ?>

    <?php endif; ?>
</p>

<?php 
    $data = array(

        'class' => 'btn btn-primary',
        'name' => 'submit',
        'value' => 'Logout'
    );
?>
<?php echo form_submit($data); ?>

<?php echo form_close(); ?>
<?php endif; ?>

<p class="bg-success">
    <?php if($this->session->flashdata('login_success')): ?>
    
    <?php echo $this->session->flashdata('login_success')?>

    <?php endif; ?>

</p>

<p class="bg-danger">
    <?php if($this->session->flashdata('login_failed')): ?>
    
    <?php echo $this->session->flashdata('login_failed')?>

    <?php endif; ?>

</p>
<h1>HELLO</h1>