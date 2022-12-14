<!-- Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->
<?php

$paragrafo = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae obcaecati voluptatem reiciendis quos adipisci
                voluptatibus quo numquam iusto quisquam id odio expedita exercitationem, maxime officiis doloremque. 
                Voluptatem mollitia porro autem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum dolor provident sunt, 
                rem mollitia voluptatum error dicta qui suscipit ducimus iste, vitae id maiores cum? Omnis, porro consequatur? Provident, autem?';

$arrayParagrafi = explode('.', $paragrafo, -1);

var_dump($arrayParagrafi);

for($i=0; $i < count($arrayParagrafi); $i++){
    if( $arrayParagrafi[$i] != ''){
        echo "<p>";
        echo $arrayParagrafi[$i];
        echo "</p>";   
    }
    
}


?>