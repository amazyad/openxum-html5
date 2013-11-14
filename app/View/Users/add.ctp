<h1>Utilisateurs</h1>


<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User');?>
    <fieldset>
        <?php
        echo $this->Form->input('username');
        echo $this->Form->input('password');
        echo $this->Form->input('password',array ('label' => 'Confirm password'));
        echo $this->Form->input('mail',array('type' => 'email'));
        ?>
    </fieldset>
<?php echo $this->Form->end(__('Sign up'));?>

</div>