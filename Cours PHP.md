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
    foreach($eleves as $key => $eleve){
        var_dump($eleve);
    }

    for($i = 0; $i < count($eleves); $i++){
        var_dump($eleves[$i]);
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



### Récupération des données dans une base de donnée

Pour acceder à la base de donnée, nous allons utiliser pdo_mysql;

Pour initier la connection à la b.d.d, on utilise la fonction pdo()

```php
<?php
    try{
    	$myDatabase = new PDO("mysql:dbname=database;host:localhost","user_mysql", "password");        
    } catch($PDOExeption $e) {
    	echo "Connection faild " . $e->getMessage();   
    }
?>
```

#### Méthodes dans le model PDO

```php
<?php 
    PDO::exec("SQL syntaxe") // This will return only the numbers of lines affected
    PDO::query("SQL sytaxe") // This will execute the SQL passed as parametrs
    PDO::prepare("SQL syntaxe") // This will return an PDOStatement
    PDOStatement::execute() // This will execute the previously SQL code
    PDOStatement::fetch() // This function will return an array of the content of the database
?>
```


# POO en Php
### C'est quoi Poo?
Programmation Orienté Objet

Une classe décrit la structure interne des données et elle définit les méthodes qui s'appliqueront aux objets de même famille (même classe)

Un objet est une instance d'une classe.


### Syntaxe
La declaration d'une classe en php s'ecrit comme suit:

```php
<?php
// Declaration de la classe
class Personnage {
    private $firstName;
    private $lastName;

    public function __constructor($firstName, $lastName){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFirstName(){
        return $this->firstName;
    }

    public function getLastName(){
        return $this->lastName;
    }

    public function setFirstName()
}

?>
```