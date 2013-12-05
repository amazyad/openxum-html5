
<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User');?>
    <fieldset>
        <?php
        echo $this->Form->input('username');
        echo $this->Form->input('password');
        ?>
    </fieldset>
<?php echo $this->Form->end(__('Sign in'));?>
<?php echo $this->Html->link(__('Create a new account'), array('controller' => 'users', 'action' => 'add')); ?>
</div>

<center>
<iframe src="https://www.facebook.com/plugins/registration?
             client_id={1378271442422579}&
             redirect_uri={your-redirect-uri}">
</iframe>
</center>