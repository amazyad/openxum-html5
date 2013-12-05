<script type="text/javascript">
    function verif()
    {
        var pwd1   = document.getElementById("UserPassword").value;
        var pwd2   = document.getElementById("UserPassword2").value;
        var result = document.getElementById("result");
        if(pwd1!==pwd2){
            result.innerHTML="Mots de passe non identiques";
            result.style.color="#ff0000";
        }else{
            result.innerHTML="Mots de passe identiques";
            result.style.color="#55aa55";
        }
    }
</script>

<h1>Utilisateurs</h1>

<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User');?>
    <fieldset>
        <?php
        echo $this->Form->input('username');
        echo $this->Form->input('password',array ('onkeyup' => 'verif()'));
        echo $this->Form->input('password2',array ('type' => 'password','label' => 'confirm password', 'onkeyup' => 'verif()'));?>
        <div id = "result"></div>
        <?php
        echo $this->Form->input('email', array('type' => 'email'));
        ?>
    </fieldset>
<?php echo $this->Form->end(__('Sign up'));?>

</div>
