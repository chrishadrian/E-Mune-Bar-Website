<?php

$email = addcslashes($_REQUEST['q']) ;

mail( "chrishadrian23@gmail.com", "E-Mail entered",
"E-Mail entered: $email");
header( "Location: https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.forbes.com%2Fsites%2Fjillgriffin%2F2018%2F08%2F07%2Fthe-value-of-a-well-written-thank-you-note%2F&psig=AOvVaw3rjcjj5NaEFfwhDmnsbqxc&ust=1644908513032000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCPijwu_P_vUCFQAAAAAdAAAAABAJ" );
?>