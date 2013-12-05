 <div data-role="content">
     <ul data-role="listview" data-inset="true" class="data-split-icon"
         style="width: 30%; margin-left:auto; margin-right:auto; align:center; text-align:center;">
         <li>
             <?php
             echo $this->Html->link($this->Html->image('yinsh.jpg').'<h2>Delayed mode</h2>',
                 array('controller' => 'users', 'action' => 'modeDiff'),
                 array('escape' => false));
             ?>
         <li>
              <?php
              echo $this->Html->link($this->Html->image('yinsh.jpg').'<h2>Real time mode</h2>',
                  array('controller' => 'pages', 'action' => 'display', 'menu', 'game' => 'yinsh'),
                  array('escape' => false));
              ?>
         <li>
              <?php
              echo $this->Html->link($this->Html->image('yinsh.jpg').'<h2>robot</h2>',
                  array('controller' => 'pages', 'action' => 'display', 'choixMode', 'game' => 'yinsh'),
                  array('escape' => false));
              ?>
     </ul>
 </div>