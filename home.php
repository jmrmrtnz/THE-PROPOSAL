<?php
    include 'dbcon.php';
    session_start();

    //USED SO they can't access the homw.php with user login
    if(!isset($_SESSION['FirstName'])){
        header("location:index.php");
    }

    //email declaration
    require 'mailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;

    //YES email
    if(isset($_POST['congrats'])){
            //echo 'Registered successfully';
            //we will put the email verification sendr here since this is true
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'jayjaybatman.0027@gmail.com';                 // SMTP username
            $mail->Password = 'dmvhpkibszblrtkh';               // SMTP password through GMAIL 2 Verification
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            $mail->setFrom('jayjaybatman.0027@gmail.com', 'Love Sending'); // Send mailer is the Name of the message
            $mail->addAddress('jomartinez.jm5@gmail.com', 'Jomar Martinez');     // Add a recipient

            $mail->Subject = 'Confirmation';
            $mail->Body    = 'Bun responded YES to your question. Happy for you Jay!';
            $mail->AltBody = 'Bun responded YES to your question. Happy for you Jay!';

            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            }else {
                header("location: thankyou.php");
            }
            //end of the github email verification
    }
    //NO email
    if(isset($_POST['sad'])){
        //echo 'Registered successfully';
        //we will put the email verification sendr here since this is true
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'jayjaybatman.0027@gmail.com';                 // SMTP username
        $mail->Password = 'dmvhpkibszblrtkh';               // SMTP password through GMAIL 2 Verification
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->setFrom('jayjaybatman.0027@gmail.com', 'Love Sending'); // Send mailer is the Name of the message
        $mail->addAddress('jomartinez.jm5@gmail.com', 'Jomar Martinez');     // Add a recipient

        $mail->Subject = 'Confirmation';
        $mail->Body    = 'Bun responded NO to your question. This is not the end Jay. Fighting!';
        $mail->AltBody = 'Bun responded NO to your question. This is not the end Jay. Fighting!';

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else {
            header("location: fighting.php");
        }
        //end of the github email verification
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" href="bear.png">
    <link rel="stylesheet" type="text/css" href="home-design.css">
    <link rel="stylesheet" type="text/css" href="scroll.css">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/65cd301d1d.js" crossorigin="anonymous"></script>
</head>
<body>
    <a href="logout.php" style="float: right;font-size: 30px; color: grey; padding-right: 20px; padding-top:15px;"><i class="fas fa-sign-out-alt"></i></a>
    <br>
    <div class="container" style="padding-top: 20px;">
        <img src="jay.jpg" alt="Jay" height="80" width="80">
        <h4>Jay sent you a message</h4>
        <br>
        <div class="chat-1">
            <!--1-->
            <div class="wrapper">
                <div class="row">
                    <div class="column">
                        <p class="mes-1">Hello Bun</p>
                    </div>
                </div>
            </div>
            <!--2-->
            <div class="wrapper">
                <div class="row">
                    <div class="column">
                        <p class="mes-2">I know you have idea na din kung anong ibig sabihin nito. Bago ang lahat, gusto 'ko na malaman mo ano ang nagbago sa akin ng makilala kita.</p>
                    </div>
                </div>
            </div>
            <!--3-->
            <div class="wrapper">
                <div class="row">
                    <div class="column">
                        <p class="mes-3">Alam 'ko may idea 'ka na kung para saan 'to. Before that, I just want you to know na grateful ako na nakilala kita. At happy ako na minahal mo ako.</p>
                    </div>
                </div>
            </div>
            <!--4-->
            <div class="wrapper">
                <div class="row">
                    <div class="column">
                        <p class="mes-3">Habang sinusulat 'ko tong message, naka smile lang ako. I'm so in love with you to be honest. Hindi ako magsasawang i-remind na gaano kita ka mahal. And the thing about this relationship, kasama kita sa mga plano 'ko in life. Ano man yung decision 'ko, you always included on that. Everyday, I badly want to hug you, and kiss you. Makita lang kita sa video call complete na araw 'ko. Thank you again for loving me, choosing me, and showing how much you love me. I appreciate you and proud ako sa mga accomplishments mo sa buhay maliit man yan o malaki. I will support you always.</p>
                    </div>
                </div>
            </div>
            <!--5-->
            <div class="wrapper">
                <div class="row">
                    <div class="column">
                        <p class="mes-3">Last, gusto 'kong mag-sorry sa mga hindi natin pagkakaunawaan. Sa mga immature actions ko towards you. And, I'll do everything para mapasaya ka. I love you my Bun.</p>
                    </div>
                </div>
            </div>
            <!--6-->
            <div class="wrapper">
                <div class="row">
                    <div class="column">
                        <p class="mes-3">Life is not a race sabi nga nila. Sorry dahil hindi ko matutupad ang 7 months bago maging tayo. Wag kang mag-alala hindi kita bibiguin. I will remember always kung gaano mo ako minahal at tinanggap sa life mo.</p>
                    </div>
                </div>
            </div>
            <!--7-->
            <div class="wrapper">
                <div class="row">
                    <div class="column">
                        <p class="mes-4">Happy Monthsary my Bun🎉🎈 Cheers!🥂🍾</p>
                    </div>
                </div>
            </div>
            <!--8-->
            <!-- Button trigger modal -->
                <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    view special message from jay
                </button>
        </div>
        <br><br>
    </div>
    <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">💌</h5>
            </div>
            <div class="modal-body">
                <img src="jay.jpg" alt="Jay" height="80" width="80">
                <!--start-->
                <div class="chat-1">
                    <div class="wrapper">
                        <div class="row">
                            <div class="column">
                                <p class="mes-5">Will you be my boyfriend/girlfriend?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end-->
                <div style="text-align: center;">
                    <form action="home.php" method="POST" onsubmit="return confirm('Are you sure Bun?');">
                        <button type="submit" name="congrats" class="btn btn-outline-info">YES</button>
                    </form>
                    <form action="home.php" method="POST" onsubmit="return confirm('Are you sure Bun?');">
                        <button type="submit" name="sad" class="btn btn-outline-danger">NO</button>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>
          <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
</html>