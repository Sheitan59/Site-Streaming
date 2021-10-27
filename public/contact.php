<?php 


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $pdo = null;
    var_dump($_POST);
    try {
        // crée une connexion postgresql
        $pdo = new PDO("pgsql:host=localhost;port=5432;dbname=db1;user=postgres;password=");
    
        // Affiche un message si vous êtes connectées à postgresql
        if ($pdo) {
            echo "Connected to the database successfully! \n"; 
        }
    } catch (PDOException $e) {
        // Rapporte une errreur
        echo $e->getMessage();
        $_connexion = null;
    }
    die();
}

?>

<?php include ('../header.php') ?>
<body>
    <h1>Page de Contact</h1>
    <form method="post">
        <p>
            <input type="text" name="title">
            
        </p>
        <p>
            <textarea name="body"></textarea>
        </p>
        <p>
            <button>Envoyer</button>
        </p>
    </form>
<?php include ('../footer.php') ?>
