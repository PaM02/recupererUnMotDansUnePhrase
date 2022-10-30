<?php
/*---------------------------------------------------------------*/
/*
    Titre : Extrait tous les mots d'une phrase                                                                            
                                                                                                                          
    URL   : https://phpsources.net/code_s.php?id=472
    Auteur           : poujolrost-mathias                                                                                 
    Date édition     : 22 Nov 2008                                                                                        
    Date mise à jour : 08 Aout 2019                                                                                      
    Rapport de la maj:                                                                                                    
    - refactoring du code en PHP 7                                                                                        
    - fonctionnement du code vérifié                                                                                    
    - correction du code                                                                                                  
*/
/*---------------------------------------------------------------*/ 
 
function extraireMotsDUnePhrase($phrase)
{    
     
/* caractères que l'on va remplacer (tout ce qui sépare les mots, en fait) */
    $aremplacer = array(",",".",";",":","!","?","(",")","[","]","{","}","\"","'"
," ");
 
  /* ... on va les remplacer par un espace, il n'y aura donc plus dans $phrase 
que des mots et des espaces */
 
    $enremplacement = " ";
 
      
/* on fait le remplacement (comme dit ci-avant), puis on supprime les espaces de
// début et de fin de chaîne (trim) */
    $sansponctuation = trim(str_replace($aremplacer, $enremplacement, $phrase));
   
  
   
/* on coupe la chaîne en fonction d'un séparateur, et chaque élément est une
// valeur d'un tableau */
    $separateur = "#[ ]+#"; // 1 ou plusieurs espaces
    $mots = preg_split($separateur, $sansponctuation);
      
    return $mots;
}
  
    $quelquesmots = extraireMotsDUnePhrase("C'est ma phrase.");
    echo "<ul>"; 
    foreach($quelquesmots as $valeur)
    {
        echo "<li>$valeur</li>";
    }
    echo "</ul>";
?> 