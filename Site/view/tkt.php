<?php
function tabDebut(){
    echo "<table> 
    <thead></thead> 
    <tbody> 
        <tr>
            <td>Nom article</td>
            <td>contenu article</td>
        </tr>";
}
function tabAdd($donnees){
    echo "<tr>
    <td>".$donnees["nom_article"]."</td>
    <td>".$donnees["contenu_article"]."</td>
    </tr>";
}
function tabFin(){
    echo "</tbody></table>";
}
?>