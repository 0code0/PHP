<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/CityPortal1/Partials/Shared/PageTopSection.php";

$userCreated = "";

if (isset($_POST["Register"])) {
    $user = new User();
    $user->set_EmailId($_POST["EmailId"]);
    $user->set_FirstName($_POST["FirstName"]);
    $user->set_LastName($_POST["LastName"]);
    $user->set_Password($_POST["Password"]);
    $user->set_PhoneNumber($_POST["PhoneNumber"]);
    $user->set_Role("User");
    
    UserBL::Add($user);
    
    $userCreated = true;
}
?>
<div id="centerContainer">
    <div id="leftContainer">

        <div id="adsSmall">

            <img src="Uploads/madan1.jpg" />

        </div>

        <div>
            <div class="boxyellow_head">
                <strong>Login</strong></div>
            <div class="box">
                <div class="boxInner">
                    <?php
                                        include_once $_SERVER["DOCUMENT_ROOT"]."/CityPortal1/Partials/Shared/LoginBox.php";
                                        ?>
                </div>
            </div>
        </div>
        <div class="spacer10"></div>
        <div>
            <div class="boxyellow_head">
                <strong>City Guide</strong></div>
            <div class="box">
                <div class="boxInner">

                </div>
            </div>
        </div>
        <div class="spacer10"></div>
    </div>
    <div id="rightContainer">


        <div class="spacer10"></div>

        <div class="boxFull">
            <div class="boxyellow_head">
                <strong>Create New Account</strong>
            </div>
            <div class="box">
                <div class="boxInner">
                    <?php
                    if($userCreated===true)
                    {
                    ?>   
                    <h1>Thank you. Your account has been successfully created.</h1>
                    <?php
                    }
                    else
                    {
                    ?>
                    <form action="" method="post">
                        <table id="loginBox">
                            <tr>
                                <td>EmailId : </td>
                                <td><input type="text" name="EmailId" /></td>
                            </tr>
                            <tr>
                                <td>Password : </td>
                                <td><input type="password" name="Password"/></td>
                            </tr>
                            <tr>
                                <td>Repeat Password : </td>
                                <td><input type="password" /></td>
                            </tr>
                            <tr>
                                <td>First name : </td>
                                <td><input type="text" name="FirstName" /></td>
                            </tr>
                            <tr>
                                <td>Last name : </td>
                                <td><input type="text" name="LastName" /></td>
                            </tr>
                            <tr>
                                <td>Phone number : </td>
                                <td><input type="text" name="PhoneNumber" /></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <input type="submit" name="Register" value="Create Account" />

                                </td>
                            </tr>

                        </table>
                    </form>
                    <?php
                    
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="spacer10">
        </div>

    </div>
</div>
</div>
<div class="clear">
</div>
</div>
</div>

<div class="footer">
    <div class="footermid">
        Copyright Baba Farid University
        <div class="clear">
        </div>
    </div>
</div>
</div>
</body>
</html>
