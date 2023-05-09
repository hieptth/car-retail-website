<?php

namespace Website;

use \Website\Member;

if (!isset($_SESSION["userId"])) {
    require_once __DIR__ . '/class/Member.php';
    $member = new Member();
    $memberResult = $member->getMemberById($_SESSION["userId"]);
    if (!empty($memberResult[0]["Display_name"])) {
        $displayName = ucwords($memberResult[0]["Display_name"]);
    } else {
        $displayName = $memberResult[0]["Username"];
    }
}
?>

<div>
    <div class="dashboard pt-5">
        <div class="card m-auto" style="width: min(800px, 100%);">
            <div class="card-header">
                <h4>Welcome, <?php echo $_SESSION["Display_name"]; ?>!</h4>
            </div>
            <div class="card-body">
                Your information is here.
            </div>
        </div>
    </div>
</div>