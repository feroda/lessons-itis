# Interazione con database

Riprendere l'esercizio "ex" e implementare una autenticazione vera:

* Parametri di connessione al database come da esercizio "ex"
* Tabella di con gli utenti `auth_user` presente in init.sql
* Aggiungere una checkbox nella form di login che indichi se l'utente deve essere creato o meno e una  casella di testo/checkbox/select che consenta di specificare il colore;
* Se deve essere creato effettuare una INSERT e ritornare alla form di login
* Se non deve essere creato verificarne la presenza e mettere nella variabile di sessione il colore;

**NOTA**: attenzione alla codifica della PASSWORD che non deve essere salvata in chiaro

Query da usare:

```
$mysqli = mysqli_connect($host, $user, $pw, $db);
if (mysqli_connect_errno($mysqli)) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}
/* Prepare an insert statement */
$query = "INSERT INTO auth_user (username, password) VALUES (?,PASSWORD(?))";
$stmt = mysqli_prepare($mysqli, $query);

mysqli_stmt_bind_param($stmt, "sss", $val1, $val2);

$val1 = $_POST["username"];
$val2 = $_POST["password"]

/* Execute the statement */
mysqli_stmt_execute($stmt);

/* close statement */
mysqli_stmt_close($stmt);
```

Allo stesso modo la SELECT userà

```
SELECT * FROM auth_user WHERE username=? AND password=PASSWORD(?);
```

