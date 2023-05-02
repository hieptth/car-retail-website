<?php
    namespace Website;

    use \Website\DataSource;

    class Member {
        private $dbConn;

        private $ds;

        function __construct()
        {
            require_once __DIR__ . "/DataSource.php";
            $this->ds = new DataSource();
        }

        function getMemberById($memberId)
        {
            $query = "SELECT * FROM User WHERE userId = ?";
            $paramType = "i";
            $paramArray = array($memberId);
            $memberResult = $this->ds->select($query, $paramType, $paramArray);
            
            return $memberResult;
        }
        
        public function processLogin($username, $password) {
            $passwordHash = md5($password);
            $query = "SELECT * FROM User WHERE Username = ? AND Password = ?";
            $paramType = "ss";
            $paramArray = array($username, $passwordHash);
            $memberResult = $this->ds->select($query, $paramType, $paramArray);
            if(!empty($memberResult)) {
                $_SESSION["userId"] = $memberResult[0]["userId"];
                $_SESSION["Display_name"] = $memberResult[0]["Display_name"];
                return true;
            }
        }
    }

?>