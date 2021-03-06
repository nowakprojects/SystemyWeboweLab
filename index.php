<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Free mobile app makes your decisions easily.">
    <meta name="keywords"
          content="decily, decide, easily, outfit, fashion, brand, new, look, stylization, moda, ciuchy, stylizacja, łatwiej, decyzja">
    <meta name="author" content="Mateusz Nowak">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decily - Main Page</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"/>
    <link type="text/css" rel="stylesheet" href="systemywebowe.css"/>
    <style>
        .style-inside-html {
            color: #e0a800;
        }
    </style>
</head>
<body>
<?php
 echo "<h2>Lalala</h2>";
?>
<div class="center-align">
    <h1 id="decily-header">Decily App - Landing Page</h1>
    <h2 class="style-inside-html">The app coming soon...</h2>
</div>

<nav class="bgColor center-align">
    <a href="index.php">MAIN PAGE</a> |
    <a href="partners.html">PARTNERS</a> |
    <a href="tests_signup.html">SIGN FOR BETA TESTS</a> |
    <a href="fashion_blog.html">FASHION BLOG</a>
</nav>

<div class="bgImage">
    <div class="container">
        <p class="ptText">Our mission is to makes your decisions about <b>what to wear today</b> easily.</p>


        <p>Other users would help you in the decision. The can vote yes or no & add a comment also!</p>

        <div class="row center-align">
            <div class="col s6">
                <img class="decily-screen" src="images/decilyPhone1.png" alt="An Emergency module of the app.">
            </div>
            <div class="col s6">
                <img class="decily-screen-2" src="images/decilyPhone2.png" alt="Setting anonimity in the module."
                     width="275" height="480">
            </div>
        </div>
        <div class="row center-align">
            <div class="col s6">
                <a href="images/decilyPhone1.png" download="DecilyPhoneScreen" class="emText">DOWNLOAD THE SCREEN</a>
            </div>
            <div class="col s6">
                <a href="ftp://speedtest.tele2.net/1KB.zip" download="FTPDownloadTest" class="percText">DOWNLOAD 1KB
                    FROM
                    FTP FOR TEST</a>
            </div>
        </div>

        <p>And you can be totally anonymous! Your family and friends will not know about your photos.</p>


        <a href="partners.html">
            <p>Checkout our partners!</p>
        </a>

        <table id="users-table" border="1" style="width:50%" class="st">
            <caption>Last active users:</caption>
            <thead>
            <tr>
                <th>Username</th>
                <th>Date</th>
                <th>Email activation:</th>
                <th>Connected with Facebook:</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>michal</td>
                <td>11.10.2017</td>
                <td colspan="2">YES</td>
            </tr>
            <tr>
                <td>mateusz</td>
                <td>11.10.2017</td>
                <td>NO</td>
                <td>YES</td>
            </tr>
            <tr>
                <td>agatka</td>
                <td>10.10.2017</td>
                <td colspan="2">NO</td>
            </tr>
            <tr>
                <td>jack</td>
                <td>9.10.2017</td>
                <td>YES</td>
                <td>NO</td>
            </tr>
            </tbody>
        </table>

        <a href="tests_signup.html" class="waves-effect waves-light btn"><i class="material-icons right">send</i>Sign up
            for beta tests!</a>

        <h3 id="find_us">Find us on:</h3>
        <a href="https://www.facebook.com/">
            <img src="https://cdn3.iconfinder.com/data/icons/picons-social/57/46-facebook-512.png"
                 alt="Facebook profile link."
                 width="86" height="86">
        </a>
        <a href="https://www.instagram.com/">
            <img src="https://image.flaticon.com/icons/png/512/69/69366.png" alt="Instagram profile link." width="86"
                 height="86">
        </a>

        <h3 id="email-contact">Or contact by email:</h3>

        <a href="mailto:contact@decilyapp.com">Sent email</a>

        <div class="col s12 m7">
            <h2 class="header">Contact us</h2>
            <div class="card horizontal">
                <div class="card-stacked">
                    <div class="card-content">
                        <form action="thank-you.php" method="post">
                            <input type="text" id="input_first_name" placeholder="First name" name="first_name"><br>
                            <input type="text" id="input_last_name" placeholder="Last name" required name="last_name"><br>
                            <input type="text" id="input_email" placeholder="Your email" required name="email">
                            <label for="input_email">Email address format: *@*.*</label><br>
                            <input type="text" id="input_phone_number" placeholder="Your phone number"
                                   pattern="\d{3}[\-]\d{3}[\-]\d{3}" name="phone">
                            <label for="input_phone_number">Phone number fomat: xxx-xxx-xxx</label><br>
                            <input placeholder="Your month of birth" list="birth_month" name="birth_month">
                            <datalist id="birth_month">
                                <option value="January">
                                <option value="February">
                                <option value="March">
                                <option value="April">
                                <option value="May">
                                <option value="June">
                                <option value="July">
                                <option value="August">
                                <option value="September">
                                <option value="October">
                                <option value="November">
                                <option value="December">
                            </datalist>
                            <br>
                            <label for="input_content">Message Content:</label>
                            <input type="text" id="input_content" size="100" required name="message_content"><br>

                            <label for="input_content">Additional informations:</label><br>
                            Gender:<br>
                            <input id="radio_male" type="radio" name="gender" value="male" checked>
                            <label for="radio_male">Male</label><br>
                            <input id="radio_female" type="radio" name="gender" value="female">
                            <label for="radio_female">Female</label><br>

                            Please check true statements about you:<br>
                            <input type="checkbox" id="checkbox1" name="check_buy_online"><label for="checkbox1">I buy clothes online</label>
                            <input type="checkbox" id="checkbox2" name="check_need_advice"><label for="checkbox2">I sometimes need advice about my look</label>


                            <div class="card-action">
                                <input class="waves-effect waves-light btn" type="submit" value="Send">
                                <input class="waves-effect waves-light btn" type="reset" value="Reset">
                                <input class="waves-effect waves-light btn" value="Disabled" disabled>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" id="js-module">
            <div class="col s6">
                <button id="button-js" class="waves-effect waves-light btn">Button JS - blue/red</button>
            </div>
        </div>
        <div class="row" id="fashion-row">
        </div>

    </div>

</div>
<script type="text/javascript" src="materialize/js/jquery-3.2.1.js"></script>
<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
<script src="lista1js.js"></script>
</body>
</html>