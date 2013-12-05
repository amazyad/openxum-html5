<div data-role="content" style="margin-left:auto; margin-right:auto; align:center; text-align:center;">

    <?php
    echo $this->Html->image('openxum.png');
    ?>

</div>

<div data-role="footer" class="ui-bar"
     style="position: absolute; bottom: 0; width: 100%; margin-left:auto; margin-right:auto; align:center; text-align:center;">
    <div data-role="controlgroup" data-type="horizontal">
        <a href="#" style="padding:4px ">About</a>
        <a href="http://www.facebook.fr/sharer.php?s=100p[title]=Openxum&p[url]=http://openxum.com"><img src="http://www.sacha-muki.com/site/wp-content/uploads/2012/08/facebook_bouton.png" alt="" width="24" height="24"  /></a>
        <a href="http://twitter.com/home?status=Venez jouer avec nous sur openxum !"><img src="http://www.isosteo.fr/images/stories/twitter-button.png" alt="" width="24" height="24"  /></a>
        <a href="https://plus.google.com/share?url=http://localhost/openxum-html5/index.php/"><img src="http://www.leadstoconversions.com/wp-content/uploads/2013/06/g+button.png" alt="" width="24" height="24"  /></a>

        <?php
        if(AuthComponent::user('role') == "admin"){
        echo "<a href='users/adminpanel'><img src='/openxum-html5/app/webroot/img/logo_admin.png' alt='' width='24' height='24'/></a>";
        }
        ?>
    </div>
</div>