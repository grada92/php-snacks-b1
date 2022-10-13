<!---Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.--->

<?php 

$paragraph = "Non c'è cosa che non venga resa più semplice attraverso la costanza e la familiarità e l'allenamento. Attraverso l'allenamento noi possiamo cambiare.noi possiamo trasformare noi stessi.Ho odiato ogni minuto di allenamento, ma mi sono detto, Non smettere. Soffri ora e vivi il resto della tua vita come un campione";

$newText=str_replace('.', '<br>', $paragraph);



?>

<div><h1>Paragrafo:</h1></div>
<div><?= $paragraph ?></div>

<!---Nuovo Paragrafo-->
<div><h1>Nuovo Paragrafo:</h1></div>
<div><?= $newText ?></div>