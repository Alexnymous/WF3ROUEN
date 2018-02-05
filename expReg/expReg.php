<?php

$chaine ="1234545454545";
$recherche= "/(45){2,4}/";
// $recherche = "/[0-2][0-9]h[0-5][0-9]/";
// $recherche = "/[^0-2]/";

if (preg_match($recherche, $chaine)) {
    echo "Pattern trouvé";

}

else {
    echo "Pattern pas trouvé";
}

/* [[:lower:]]// minuscules
[[:upper:]] // majuscules
[[:alpha:]] // alphabétiques
[[:digit:]] // numériques [0-9]
[[:alnum:]] // chiffres et lettres
[[:ascii:]] // ASCII
[[:blank:]] // espace ou tabulation
[[:punct:]] // Imprimables saufs chiffres et lettres
[[:graph:]] // Imprimables sauf surface
[[:space:]] // Espace blanc */