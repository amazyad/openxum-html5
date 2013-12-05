<div data-role="content">
     <?php echo $this->Session->flash(); ?>

    <fieldset>
        <h3>Click on color to create a new game party.</h3>
        <ul data-role="listview" data-inset="true" class="data-split-icon"
                style="width: 30%; margin-left:auto; margin-right:auto; align:center; text-align:center;">
                <li>
                    <?php
                    echo $this->Html->link('<h2>Black color</h2>',
                        array('controller' => 'pages', 'action' => 'display', 'mode_diff', 'color' => 'black'),
                        array('escape' => false));
                    ?>
                <li>
                    <?php
                    echo $this->Html->link('<h2>White color</h2>',
                        array('controller' => 'pages', 'action' => 'display', 'mode_diff', 'color' => 'white'),
                                                array('escape' => false));
                    ?>
            </ul>
    </fieldset>

    <fieldset>
    <h3>List of available game parties.</h3>
    <table class='tt' id='listplayer'>
        <tbody>
            <tr>
                <td>Player</td>
                <td>Playing Color</td>
                <td>Score</td>
                <td></td>
            </tr>
        </tbody>
    </table>
    </fieldset>
</div>
<div data-role="footer" class="ui-bar"
     style="position: absolute; bottom: 0; width: 100%; margin-left:auto; margin-right:auto; align:center; text-align:center;">
    <div data-role="controlgroup" data-type="horizontal">
        <a href="#">About</a>
    </div>
</div>
