
<?php 
ob_start();
?>
<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from affixtheme.com/html/xmee/demo/register-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Jul 2020 09:24:58 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Xmee | Login and Register Form Html Templates</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="font/flaticon.css">
    <!-- Google Web Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet"> -->
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->       
    <section class="fxt-template-animation fxt-template-layout1">
        <div class="container-fluid">
        <?php 
		// if(isset($_POST['submit'])) {
			
		// 	$mail = new PHPMailer;

		// 	// $mail->SMTPDebug = 4;                               // Enable verbose debug output

		// 	$mail->isSMTP();                                      // Set mailer to use SMTP
		// 	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		// 	$mail->SMTPAuth = true;                               // Enable SMTP authentication
		// 	$mail->Username = EMAIL;                 // SMTP username
		// 	$mail->Password = PASS;                           // SMTP password
		// 	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		// 	$mail->Port = 587;                                    // TCP port to connect to

		// 	$mail->setFrom(EMAIL, 'Dsmart Tutorials');
		// 	$mail->addAddress($_POST['email']);     // Add a recipient

		// 	$mail->addReplyTo(EMAIL);
		// 	// print_r($_FILES['file']); exit;
		// 	for ($i=0; $i < count($_FILES['file']['tmp_name']) ; $i++) { 
		// 		$mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]);    // Optional name
		// 	}
		// 	$mail->isHTML(true);                                  // Set email format to HTML

		// 	$mail->Subject = $_POST['subject'];
		// 	$mail->Body    = '<div style="border:2px solid red;">This is the HTML message body <b>in bold!</b></div>';
		// 	$mail->AltBody = $_POST['message'];

		// 	if(!$mail->send()) {
		// 	    echo 'Message could not be sent.';
		// 	    echo 'Mailer Error: ' . $mail->ErrorInfo;
		// 	} else {
		// 	    echo 'Message has been sent';
		// 	}
		// }
	 ?>
            <div class="row">
                <div class="col-md-6 col-12 fxt-bg-color">
                    <div class="fxt-content">
                        <div class="fxt-header">
                            <a href="login-1.html" class="fxt-logo"><h1>LOGO</h1></a>
                        </div>
                        <div class="fxt-form">
                            <h2>Register</h2>     
                            <p>Create an account free and enjoy it</p>
                            
                            <form method="POST" action="register-1.php">
                                <div class="form-group">                                                
                                    <div class="fxt-transformY-50 fxt-transition-delay-1">                                                
                                        <input id="firstname" type="text" class="form-control" name="nom" placeholder="Nom" required="required">
                                        <i class="flaticon-user"></i>
                                    </div>
                                </div>
                                <div class="form-group">                                                
                                    <div class="fxt-transformY-50 fxt-transition-delay-1">                                                
                                        <input  id="lastname" type="text" class="form-control" name="Prénom" placeholder="Prénom" required="required">
                                        <i class="flaticon-user"></i>
                                    </div>
                                </div>
                                <div class="form-group">                                                
                                    <div class="fxt-transformY-50 fxt-transition-delay-1">                                                
                                        <input  id="nomagence" type="name" class="form-control" name="nomagence" placeholder="Nom de l'agence" required="required">
                                        <i class="flaticon-user"></i>
                                    </div>
                                </div>
                                <div class="form-group">                                                
                                    <div class="fxt-transformY-50 fxt-transition-delay-1">                                                
                                        <input id="number" type="number" class="form-control" name="number" placeholder="Telephone" required="required">
                                        <i class="fa-phone"></i>
                                    </div>
                                </div>
                                <div class="form-group">                                                
                                    <div class="fxt-transformY-50 fxt-transition-delay-2">                                                
                                        <input  id="email" type="text" class="form-control" name="email" placeholder="Email Address" required="required">
                                        <i class="flaticon-envelope"></i>
                                    </div>
                                </div>
            
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-4">
                                        <button  onclick="verifyinscription()" name="submit" type="submit" class="fxt-btn-fill">Register</button>
                                    </div>
                                </div>
<?php 
  if(isset($_POST["submit"])){
    $to ="salimaeii1997@gmail.com"; // this is your Email address
    $from = $_POST["email"]; // this is the sender's Email address
    $name=$_POST["firstname"];
    $headers = "From:" . $from;
                                $headers2 = "From:" . $to;
                                // mail($to,$subject,$message,$headers);
                                // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
                                echo "Mail Sent. Thank you ". $name . ", we will contact you shortly.";
                                // You can also use header('Location: thank_you.php'); to redirect to another page.
                                }                 

?>
                                <script>
         function verifyinscription(){
            var fn,ln,email,num,ag;
            fn=document.getElementById("firstname").value;
            ln=document.getElementById("lastname").value;
            Email=document.getElementById("email").value;
            num=document.getElementById("number").value;
            ng=document.getElementById("nomagence").value;

            var regex = /^[a-zA-Z0-9.-]+@[a-z0-9.-]{2,7}\.[a-z]{2,4}$/;
            var regexname = /^[a-zA-Z]{3,16}$/;
            var regexng=/^[a-zA-Z0-9._-]$/;
            var regexnum=/^ [05|06|07]{1}+[0-9]{8}/;
         
        
        
             if(fn=="" || ln==""|| Email=="" ||num=="" || ng=="")
                {
                    window.alert(" Tous les champs doivent être remplis");
            
                }
               
            else 
            {
               if(!regex.test(Email) || !regexname.test(fn) || !regexname.test(ln) || !regexname.test(ng) || !regexname.test(num) )
                {   
                    window.alert(" Respectez les formats des elements entrés ");
            
                }
        
               else  {
            window.confirm("Message bien reçu à votre email");
           }                  
        }  
        }
 </script>             

                            </form> 
                                                          
              
                        </div> 
                        <div class="fxt-footer">
                            <ul class="fxt-socials">
                                <li class="fxt-facebook fxt-transformY-50 fxt-transition-delay-5"><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="fxt-twitter fxt-transformY-50 fxt-transition-delay-6"><a href="#" title="twitter"><i class="fab fa-twitter"></i></a></li>
                                <li class="fxt-google fxt-transformY-50 fxt-transition-delay-7"><a href="#" title="google"><i class="fab fa-google-plus-g"></i></a></li>
                                <li class="fxt-linkedin fxt-transformY-50 fxt-transition-delay-8"><a href="#" title="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="fxt-pinterest fxt-transformY-50 fxt-transition-delay-8">
                                    <a href="#" title="pinterest"><i class="fab fa-pinterest-p"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 fxt-none-767 fxt-bg-img" data-bg-image="../demo/img/viktor-theo-0hPxXa82y_I-unsplash.jpg"></div>
            </div>
        </div>
    </section>
    <!-- jquery-->
    <script src="js/jquery-3.5.0.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Imagesloaded js -->
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <!-- Validator js -->
    <script src="js/validator.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>

</body>


<!-- Mirrored from affixtheme.com/html/xmee/demo/register-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Jul 2020 09:25:03 GMT -->
</html>



