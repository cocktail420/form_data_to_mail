<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Send Email From Contact Page using Php</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>

        <div class="container">
          <!--   <br>
            <center><h4>YUADI DONATION APPLICATION FORM</h4></center> -->
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <form action="send-email.php" method="post">
                       
                        <div class="form-group">
                         <label for="cars">Choose shopping:</label>
                        <select id="cars" name="cars">
                             <option value="volvo">Naivas</option>
                          <option value="saab">Eastmartt</option>
                             <option value="fiat">Quickmart</option>
                               <!-- <option value="audi">Audi</option> -->
                                   </select>
                           
                            <div class="form-group">
                            <label>contact:</label>
                            <input type="text" class="form-control" placeholder="Enter Name" name="name">
                        </div>

                
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Send Here</button>
                    </form>
                </div>
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <?php
    if(isset($_POST['submit'])) {
        $cars = $_POST['cars'];
        $name = $_POST['name'];
        
        // $contact = $_POST['contact'];
    // $message = $_POST['message'];
    if($cars=='' || $name==''  ){
        echo "</script>alert('All fields are required !')</script>";
    } else {
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
        $headers = "From: Mahror Digital Solutions <admin@mahrordigitalsolutions.com>";
    //$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    // $webmaster  = "info@mahrordigital.com"; //It's web master mail info@example.com
        $to         = "vinecentochieng@gmail.com"; // where you want to get mail 
        $subject    = " Contact Us From Mahror Digital Solutions.";

    // $headers    = "From: " . $from . "<" . $webmaster . ">\r\n";

    // $headers    .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    // $headers    .= "MIME-Version: 1.0" . "\r\n";
    // $headers    .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        $message = '<html><body>';
        $message .= '<p>You have received donation from :  '.$_POST['cars']  .'</p>';
        $message .= '<p>whose Email is : '. $_POST['name'] .'</p>';
        // $message .= '<p>and Phone : '. $_POST['contact'] .'</p>';
    // $message .= "<p>Message :".$_POST['message']."</p>";
        $message .= "</body></html>";

        mail($to, $subject, $message);

        echo "<script>alert('Thank you for contact us, our team will contact with you very soon')</script>";
    // echo "<script>window.open('index.php?sent=Your Form Has been Submitted','_self')</script>";
    }
}

?>

    </body>
</html>


