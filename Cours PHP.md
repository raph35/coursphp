# Cours PHP

### Declaration d'un tableau

Pour declarer un tableau, on utilise le syntaxe suivant:

```php
<?php
	$tab = ["Raph", 5, -14, "Salut", ["Lundi", "Mardi", "Mercredi"]];
	$nom = ["Koto", "Rabe", "Randria"];
	$personnes = [
        "president" => "Andry Rajoelina",
        "premier ministre" => "Ntsay Christian"
    ];
    $eleves = [
        [
            "nom" => "Koto",
            "note" => 18
        ],
        [
            "nom" => "Rabe",
            "note" => 8
        ],
        [
            "nom" => "Randria",
            "note" => 12
        ],
    ];
    
?>
```

### Affichage de tableau

Pour afficher un tableau, on utilise le syntaxe suivant:

```php
<?php
    echo $tab[1] // Afficher l'element 2 dans tab
    echo $personnes["president"] // Afficher l'element qui a la cle president
    echo $eleves[2]["nom"]; // Afficher Le nom de l'element 3 du tableau eleve 
?>
```

Pour parcourrir un tableau, on utilise le boucle foreach:

```php
<?php
    foreach($eleves as $eleve){
        var_dump($eleve);
    }
```

Exemple de creation d'un table avec php
```php
<table>
    <tr>
        <th>Nom</th>
        <th>Prenom</th>
    </tr>
    <?php foreach($eleves as $eleve):?>
    <tr>
    	<td><?=$eleve["nom"];?></td>
    	<td><?=$eleve["note"];?></td>
    </tr>
    <?php endforeach?>
</table>
```