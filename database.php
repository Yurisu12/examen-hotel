<?php



class database
{
    // Properties
    private $servername;
    private $username;
    private $pwd;
    private $dbname;
    private $charset;

    protected function connect()
    {
        // This function makes connection with database
        $this->servername = "localhost";
        $this->username = "root";
        $this->pwd = "";
        $this->dbname = "hotelterduin";
        $this->charset = "utf8mb4";

        // try catch method to check erros connection with mysql
        try {
            $dsn = "mysql:host=" . $this->servername . ";dbname=" . $this->dbname . ";charset=" . $this->charset; //IF "mysql:hostnot working change to "mysqli:host
            $pdo = new PDO($dsn, $this->username, $this->pwd);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "There is no database connection. Failed:" . $e->getMessage() . "<br />";
            die();
        }
    }
}

?>