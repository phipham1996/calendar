
<?php


// require_once('pdoconfig.php');
class DB
{
  private $host = 'localhost';
  private $dbname = 'calendar';
  private $username = 'root';
  private $password = '';
  private static $instance = NULl;
  public function getInstance() {
    if (!isset(self::$instance)) {
      try {
          self::$instance = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
          self::$instance->exec("SET NAMES 'utf8'");
        } catch (PDOException $ex) {
          die($ex->getMessage());
        }
      }
      return self::$instance;
    }
}