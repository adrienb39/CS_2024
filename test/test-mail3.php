<?php
function passgen1($nbChar) {
    $chaine = "mnoTUzS5678kVvwxy9WXYZRNCDEFrslq41GtuaHIJKpOPQA23LcdefghiBMbj0";
    srand((double)microtime()*1000000);  // Initialisation du générateur aléatoire
    $pass = '';
    for ($i = 0; $i < $nbChar; $i++) {
        $pass .= $chaine[rand() % strlen($chaine)];
    }
    return $pass;
}

// Fonction pour générer un dictionnaire des mots de passe de taille 3
function generateDictionary($nbChar) {
    $chaine = "mnoTUzS5678kVvwxy9WXYZRNCDEFrslq41GtuaHIJKpOPQA23LcdefghiBMbj0";
    $maxIndex = strlen($chaine);
    $dictionary = [];

    // On génère toutes les combinaisons possibles pour un mot de passe de 3 caractères
    for ($i = 0; $i < $maxIndex; $i++) {
        for ($j = 0; $j < $maxIndex; $j++) {
            for ($k = 0; $k < $maxIndex; $k++) {
                for ($l = 0; $l < $maxIndex; $l++) {
                    for ($m = 0; $m < $maxIndex; $m++) {
                        for ($n = 0; $n < $maxIndex; $n++) {
                            for ($o = 0; $o < $maxIndex; $o++) {
                                for ($p = 0; $p < $maxIndex; $p++) {
                                    for ($q = 0; $q < $maxIndex; $q++) {
                                        for ($r = 0; $r < $maxIndex; $r++) {
                                            // Crée un mot de passe en concaténant les caractères choisis
                                            $password = $chaine[$i] . $chaine[$j] . $chaine[$k] . $chaine[$l] . $chaine[$m] . $chaine[$n] . $chaine[$o] . $chaine[$p] . $chaine[$q] . $chaine[$r];
                                            $dictionary[] = $password;
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }

    return $dictionary;
}

// Génération du dictionnaire pour les mots de passe à 3 caractères
$dictionary = generateDictionary(3);

// Affichage d'un exemple de mot de passe généré
echo $dictionary[0]; // Affiche le premier mot de passe généré
?>
