<?php
    namespace Website;

    use \Website\Member;

    if (!isset($_SESSION["userId"])) {
        require_once __DIR__ . '/class/Member.php';
        $member = new Member();
        $memberResult = $member->getMemberById($_SESSION["userId"]);
        if(!empty($memberResult[0]["DisplayName"])) {
            $displayName = ucwords($memberResult[0]["DisplayName"]);
        } else {
            $displayName = $memberResult[0]["Username"];
        }
    }
?>

<html>
    <head>
    </head>

    <body>
        <div>
            <div class="dashboard">
                <div class="member-dashboard">Welcome <b><?php echo $displayName; ?></b>, You have successfully logged in!<br>
                    Click to <a href="./logout.php" class="logout-button">Logout</a>
                </div>
            </div>
        </div>
    </body>
    
</html>