<div data-role="content">
     <?php echo $this->Session->flash(); ?>
    <script type="text/javascript">
    	var socket;
    	var host = "ws://127.0.0.1:8000";
    	var application = 'rtg';
    	localStorage['user'] = "<?php echo AuthComponent::user('username'); ?>";
    	localStorage['game'] = "<?php echo $this->params['named']['game'] ?>";
        window.onbeforeunload = function() {
            return "You're about to throw away your parties.";
        }
        window.onload = function() {
    	    socket = new createSocket(host, application);
            socket.onopen = function() {
                onopen();
    		}
            socket.onmessage = function(msg) {
                console.log(msg);
    			analyse(msg);
    		}
    		socket.onclose = function() {
    		    console.log('connexion fermée');
    		}
    	}

    	function analyse(msg){
    	    var tr = '';
    	    tr += '<tr id='+msg['user']+'>';
    	    tr += '<td>'+msg['user']+'</td>';
    	    tr += '<td>'+msg['color']+'</td>';
    	    tr += '<td>500</td>';
    	    tr += (msg['user'] == localStorage['user']) ? '<td></td>' : '<td><?php
    	    echo $this->Html->link('Start the party',
            array('controller' => 'pages', 'action' => 'display', 'yinsh'),
            array('escape' => false));
            ?></td>';
    	    switch(msg['action']){
    	        case 'msg':{
    	            if(localStorage['game']==msg['game'] && !document.getElementById(msg['user'])){
    	                $('#listplayer').append(tr);
    	            }
    	        }
    	        break;
                case 'amonline':{
    	            if(localStorage['game']==msg['game'] && !document.getElementById(msg['user'])){
    	                $('#listplayer').append(tr);
    	            }
    	        }
    	        break;
                case 'system':{
    	            if(document.getElementById(msg['user'])){
    	                $('#listplayer #'+msg['user']).remove();
    	            }
    	        }
                break;
    	    }
    	}


    </script>
    <fieldset>
        <h3>Click on color to create a new game party.</h3>
        <button id="blackplayer" onClick="send('black')" class="ui-btn-hidden">BLACK COLOR</button>
        <button id="whiteplayer" onClick="send('white')" class="ui-btn-hidden" data-disabled="false">WHITE COLOR</button>
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

<script>
function send(color){
    var payload = new Object();
    if(!document.getElementById(localStorage['user'])){
        console.log(localStorage['user']);
        payload['action'] = 'msg';
        payload['user'] = localStorage['user'];
        payload['game'] = localStorage['game'];
        payload['color']= color;
        localStorage['color'] = color;
        payload['data']='';
        socket.send(payload);
    }
};

function onopen(){
    var payload = new Object();
    payload['action'] = 'whoisonline';
    payload['user'] = localStorage['user'];
    payload['game'] = localStorage['game'];
    payload['color'] = '';
    payload['data'] = '';
    console.log('WHO IS ONLINE?');
    socket.send(payload);
}
</script>