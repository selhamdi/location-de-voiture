
<!doctype html>
<html class="no-js" lang="">
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

    <link rel="stylesheet" href="css/style.css">
</head>

<body>      
    <section class="fxt-template-animation fxt-template-layout1">
        <div class="container-fluid">
               <div class="row">
                <div class="col-md-6 col-12 fxt-bg-color">
                    <div class="fxt-content">
                        <div class="fxt-header">
                            <a href="login-1.html" class="fxt-logo"><h1>LOGO</h1></a>
                        </div>
                        <div class="fxt-form">
                            <h2>Register</h2>     
                            <p>Create an account free and enjoy it</p>
                            
                            <form method="POST" action="" onsubmit="return verifyinscription();">
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
                                        <input  id="nomagence" type="text" class="form-control" name="nomagence" placeholder="Nom de l'agence" required="required">
                                        <i class="flaticon-user"></i>
                                    </div>
                                </div>
                                <div class="form-group">                                                
                                    <div class="fxt-transformY-50 fxt-transition-delay-1">                                                
                                        <input id="number" type="text" class="form-control" name="number" placeholder="Telephone" required="required">
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
                                        <button  name="submit" type="submit" class="fxt-btn-fill">Register</button>
                                    </div>
                                </div>
                            </form> 
<script>
        function verifyinscription()
        {
            var fn,ln,email,num,ag;
            fn=document.getElementById("firstname").value;
            ln=document.getElementById("lastname").value;
            email=document.getElementById("email").value;
            num=document.getElementById("number").value;
            ag=document.getElementById("nomagence").value;

            var regex = /^[a-zA-Z0-9.-]+@[a-z0-9.-]{2,7}.[a-z]{2,4}$/;
            var regexname = /^[a-zA-Z]{3,16}$/;
            var regexng = /^[a-zA-Z0-9._-]{3,30}$/;
            var regexnum = /^(05|06|07){1}[0-9]{8}/;


         if(fn == "" || ln == "" || email == "" || num == "" ||  ag == "")
        {
            window.alert(" Tous les champs doivent être remplis");
            return false;
        }
        else 
        {
            if(!regex.test(email) || !regexname.test(fn) || !regexname.test(ln) ||  !regexng.test(ag) ||  !regexnum.test(num) )
                {
                    window.alert(" Respectez les formats des elements entrés ");
                    return false;
                }
                else 
                {
                    window.confirm("Message bien reçu à votre email");
                    return true ;
                }
            }     
        }
                            </script>
                                                          
              <?php
              if(isset($_POST['submit'])){

                if(!empty($_POST["nom"] && $_POST['Prénom'] && $_POST['nomagence'] && $_POST['number'] && $_POST['email'])){
            
            
                    $message="";
                    $to = $_POST['email']; // this is your Email address
                    $from = "salimaeii1997@gmail.com"; // this is the sender's Email address
                    $nom = $_POST['nom'];
                    $Prénom= $_POST['Prénom'];
                    $nomagence= $_POST['nomagence'];
                    $number= $_POST['number'];
                    $email= $_POST['email'];
                    $subject = "Register";
                    $message = "Bien Reçu Merci $Prénom" ;
                    $headers = "From:" . $from;
                    mail($to,$subject,$message,$headers);
            
                }
            
                else {
            
                    $Error="Veuillez remplir tous les champs correct";
                }
            }
              ?>
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
                <div class="col-md-6 col-12 fxt-none-767 fxt-bg-img" data-bg-image="../stage/img/viktor-theo-0hPxXa82y_I-unsplash.jpg"></div>
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
</html>



