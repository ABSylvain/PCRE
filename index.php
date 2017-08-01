<?php 
$value;
$text = "Dragon Ball Z se déroule cinq ans après le mariage de Son Goku et giku et de Chichi2. Raditz, un mystérieux guerrier extraterrestre, frère de Son Goku, arrive sur Terre pour retrouver Goku. Ce dernier apprend qu'il vient d'une planète de guerriers redoutables dont il ne reste plus que quatre survivants.";
echo $text;

?>
<form method="POST" action="#">
    <input type="text" id="seizure" placeholder="Saisir un mot à chercher"/>
    <button id="btn">Rechercher</button>
</form>
<script src="framworkTest/Bob.js" type="text/javascript"></script>
<script>

let btn = document.querySelector('#btn');

btn.addEventListener('click', function(e) {
    e.preventDefault();
    let seizure = document.querySelector('#seizure').value;
    sendAjax('process.php', 'seizure='+seizure);
});

</script>
