<?php
$usuario = isset($_POST["email"]) ? trim($_POST["email"]) : null;
$pass = isset($_POST["password"]) ? md5(trim($_POST["password"])) : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOGIN TRANSMETRO</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet'
          href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'>
    <link rel="stylesheet" href="css/styleLogin.css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap.min.css" rel="stylesheet" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet" />
    <link href="../Views/style.css" rel="stylesheet" />
</head>
<body>

<style type="">
    html, body{
        margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'Poppins', sans-serif;
            color: #262626;
            background: url('../Views/images/fondo.avif') no-repeat center center fixed; 
            background-size: cover;
    }
    .container1 {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .screen-1 {
            background: rgba(255, 255, 255, 0.9); /* Fondo semitransparente */
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

    *{
        box-sizing: border-box;
    }
    .logo {
        position: relative;
        display: flex;
        margin:10px;
        flex-direction: row;
        z-index: 1000;

    a {
        display: block;
        height: 30px;
        width: auto;
        cursor: pointer;
        margin-right: 10px;
    img {
        height: 100%;
        width: auto;
    }
    }
    }

    .container{
        display: flex;
        flex-direction: column;
        width: 100%;
        max-width: 1000px;
        margin: 0 auto;
        padding: 10px 10px 100px 10px;
    h1{
        text-align: center;
        margin-bottom: 30px;
        font-weight: 500;
    }
    h2{
        font-weight: 500;
    }
    }
    .button-container{
        display: flex;
        align-items: center;
        margin-top: 10px;
        flex-wrap: wrap;
    }

    .btn{
        display: flex;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 14px;
        margin: 5px;
        cursor: pointer;
        outline: none;
        transition: all 0.3s ease-in-out;
        box-shadow: 0 5px 10px -5px rgba(0,0,0,.15),0 10px 10px -5px rgba(0,0,0,.1);
    &:hover{
         box-shadow: 0 20px 25px -5px rgba(0,0,0,.15),0 10px 10px -5px rgba(0,0,0,.1);
     }
    &.red{
         background-color: rgb(231, 97, 97);
         color: #fff;
    &:hover{
         background-color: rgb(224, 131, 131);
     }
    }
    &.blue{
         background-color: rgb(56, 129, 224);
         color: #fff;
    &:hover{
         background-color: rgb(108, 163, 236);
     }
    }
    &.green{
         background-color: rgb(228, 195, 86);
         color: #fff;
    &:hover{
         background-color: rgb(56, 224, 196);
     }
    }
    &.orange{
         background-color:  rgb(252, 188, 105);
         color: #fff;
    &:hover{
         background-color:  rgb(255, 207, 144);
     }
    }
    &.dark{
         background-color: #262626;
         color: #fff;
    &:hover{
         background-color: #363636;
     }
    }
    }

    .toast-container{
        position: fixed;
        z-index: 9999;
        top: 20px;
        right: 20px;
    .toast{
        position: relative;
        width: 100%;
        max-width: 300px;
        min-width: 280px;
        background-color: #fff;
        border-radius: 5px;
        padding: 15px;
        margin-bottom: 20px;
        box-shadow: 0 5px 10px -5px rgba(0,0,0,.15),0 10px 10px -5px rgba(0,0,0,.1);
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease-in-out;
    &:hover{
         box-shadow: 0 15px 20px -5px rgba(0,0,0,.15),0 15px 15px -5px rgba(0,0,0,.1);
     }
    .t-title{
        display: flex;
        align-items: center;
        width: 100%;
        margin: 0;
        color: #262626;
        font-weight: 600;
        font-size: 1.1rem;
    span{
        font-size: 1.2rem;
        padding: 0 10px 0 0;
    }
    }
    .t-text{
        color: #262626;
        margin: 5px 0 0 0;
    }
    .t-close{
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        height: 25px;
        width: 25px;
        right: -10px;
        top: -10px;
        padding: 0;
        margin: 0;
        background-color: #464646;
        border-radius: 50%;
        transform: rotate(45deg);
        cursor: pointer;
        box-shadow: 0 5px 10px -5px rgba(0,0,0,.15),0 10px 10px -5px rgba(0,0,0,.1);
    &:after, &:before{
                  content: '';
                  display: block;
                  position: absolute;
                  background-color: #eee;
                  border-radius: 3px;
              }
    &:after{
         width: 2px;
         height: 16px;
     }
    &:before{
         width: 16px;
         height: 2px;
     }
    }

    &.active{
         opacity: 1;
         visibility: visible;
     }

    &.system{
         background-color: rgb(119, 161, 252);
    .t-text{
        color: #eee;
    }
    .t-title{
        color: #eee;
    }
    }
    &.success{
         background-color: rgb(78, 247, 196);
     }
    &.warning{
         background-color: rgb(252, 188, 105);
    .t-text{
        color: #eee;
    }
    .t-title{
        color: #eee;
    }
    }
    &.bug{
         background-color: rgb(252, 105, 105);
    .t-text{
        color: #eee;
    }
    .t-title{
        color: #eee;
    }
    }
    }
    }

</style>
<!-- partial:index.partial.html -->
<div class="container1">
<form action="entrar.php" method="post">
    <div class="screen-1">
        <svg class="logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
             width="300" height="300" viewbox="0 0 640 480" xml:space="preserve">
    <g transform="matrix(3.31 0 0 3.31 320.4 240.4)">
        <circle style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(61,71,133); fill-rule: nonzero; opacity: 1;"
                cx="0" cy="0" r="40"></circle>
    </g>
            <g transform="matrix(0.98 0 0 0.98 268.7 213.7)">
                <circle style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
                        cx="0" cy="0" r="40"></circle>
            </g>
            <g transform="matrix(1.01 0 0 1.01 362.9 210.9)">
                <circle style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
                        cx="0" cy="0" r="40"></circle>
            </g>
            <g transform="matrix(0.92 0 0 0.92 318.5 286.5)">
                <circle style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
                        cx="0" cy="0" r="40"></circle>
            </g>
            <g transform="matrix(0.16 -0.12 0.49 0.66 290.57 243.57)">
                <polygon
                        style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
                        points="-50,-50 -50,50 50,50 50,-50 "></polygon>
            </g>
            <g transform="matrix(0.16 0.1 -0.44 0.69 342.03 248.34)">
                <polygon
                        style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" points="-50,-50 -50,50 50,50 50,-50 "></polygon>
            </g>
  </svg>
        <div class="email">
            <label for="email">Correo Electrónico</label>
            <div class="sec-2">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="email" value="<?=$usuario?>" name="email" placeholder="" required/>
            </div>
        </div>
        <div class="password">
            <label for="password">Contraseña</label>
            <div class="sec-2">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input class="pas" value="<?=$pass?>" type="password" name="password" placeholder="············" required/>
                <ion-icon class="show-hide" name="eye-outline"></ion-icon>
            </div>
        </div>
        <button class="login" type="submit">Entrar</button>

        <!--    <div class="footer"><span>Signup</span><span>Forgot Password?</span></div>-->
    </div>
</form>
</div>
<?php if (isset($_GET["mensaje"])){?>
    <p class="btn btn-toast red" data-type="bug" data-title="<?=$_GET["mensaje"]?>" data-text="" id="errorMensaje" style="display: none">Bug toast</p>
<?php }?>

<!-- partial -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js" ></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<?php if (isset($_GET["mensaje"])){?>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            // get all elements with .toast-container class
            var toastContainer = document.querySelectorAll(".toast-container");
            // check if container already exist and add it if it doesen't
            if(toastContainer.length == 0){
                // prepare toast-container element
                var toastContainerContent = '<div class="toast-container"></div>'
                // add it to the end of the body
                document.querySelector("body").innerHTML += toastContainerContent;
            }
            $("#errorMensaje").click()
        });
    </script>
<?php }?>
<script>
    // when dom content is loaded

    // function for creating toast elements available with parameters
    function createToast(type, title, text, duration){

        // Creating toast message container as dom element
        var toastElem = document.createElement("div");
        // Adding toast class to it
        toastElem.classList.add('toast');
        // If there is a type, add that type name as class to toast message container
        if(type){ toastElem.classList.add(type); }

        // create title dom element
        var titleElem = document.createElement("p");
        // add t-title class to doom element
        titleElem.classList.add('t-title');

        // depent on the type add icon, you can add more icons if you want
        var iconType = "";
        if(type == "system"){ iconType = '<span class="material-icons">build</span>'; }
        else if(type == "success"){ iconType = '<span class="material-icons">done</span>'; }
        else if(type == "warning"){ iconType = '<span class="material-icons">report_problem</span>'; }
        else if(type == "bug"){ iconType = '<span class="material-icons"></span>'; }

        // appent icon to title element with title text
        titleElem.innerHTML += iconType + title;
        toastElem.appendChild(titleElem);

        // create close element with t-close class for closing the toast message
        var closeElem = document.createElement("p");
        closeElem.classList.add('t-close');
        toastElem.appendChild(closeElem);

        // create text element with t-text class and appent text to it
        var textElement = document.createElement("p");
        textElement.classList.add('t-text');
        textElement.innerHTML = text;
        toastElem.appendChild(textElement);

        // get toast-container element
        var  toastContainer = document.querySelector(".toast-container");

        //appent toast message to it
        toastContainer.appendChild(toastElem);

        // wait just a bit to add active class to the message to trigger animation
        setTimeout(function(){
            toastElem.classList.add('active');
        }, 1);


        // check duration
        if(duration>0){
            // it it's bigger then 0 add it
            setTimeout(function(){
                toastElem.classList.remove('active');
                setTimeout(function(){
                    toastElem.remove();
                }, 350);
            }, duration);
        }else if(duration == null){
            //  it ther isn't any add default one (3000ms)
            setTimeout(function(){
                toastElem.classList.remove('active');
                setTimeout(function(){
                    toastElem.remove();
                }, 350);
            }, 3000);
        }
        //if duration is 0, toast message will not be closed
    }


    //addEventListener on mouse click for standard closing of toast message on right top "x"
    document.addEventListener('click', function (e) {
        //check is the right element clicked
        if (!e.target.matches('.t-close')) return;
        else{
            //get toast element
            var toastElement = e.target.parentElement;
            // remove active class from it to trigger css animation with duration of 300ms
            toastElement.classList.remove('active');
            //wait for 350ms and then remove element
            setTimeout(function(){
                toastElement.remove();
            }, 350);
        }
    });

    //addEventListener on mouse click for standard closing of toast message on right top "x"
    document.addEventListener('click', function (e) {
        //check is the right element clicked
        if (!e.target.matches('.btn-toast')) return;
        else{
            //create toast message with dataset attributes
            createToast(e.target.dataset.type, e.target.dataset.title, e.target.dataset.text, e.target.dataset.duration);
        }
    });

</script>
</body>
</html>
