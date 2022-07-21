<?php
ob_start();
include VIEW_PATH . DS . "layout" . DS . "header.php"
?>
<body>
<div class = "infoWrapper">

    <div class="info">
        <div class="tab">
        <div class="inputfield"><label>Username</label>
        <input></div>
        <br></br>
        <div class="inputfield"><label>Email</label>
        <input></div>
        <br></br>
        <button class="updatebutton">Update</button>
    </div>
    </div>
    <hr></hr>
    <div class="changepassword">
        <div class="tab">
            <div class="inputfield">
            <label>Password</label>
            <input value="">
        </div>
        <br></br>
        <div class="inputfield">
            <label>Confirm Password</label>
            <input value="">
        </div>
    </div>
    </div>
    <hr><hr>
    <div class="del">
        <button class="delbutton">
            Delete
        </button>
    </div>
</div>

</body>
