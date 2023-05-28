<?php



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="title">hiring...</title>

    <style>

        body{
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 700;
            font-size: 20px;
            background-color: rgba(196, 191, 191, 0.685);
            text-align: center;
            transition: all 2s ease-in-out;

        }

        .ball-container{

            position: fixed;
            top:1%;
            left: 1%;
            width: 50px;
            height: 50px;
            background-color:transparent;
            border: 1px solid transparent;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px 10px 10px 10px;
            z-index:100;

        }

        .ball{
            
            width: 40px;
            height: 40px;
            background-color: darkmagenta;
            color: white;
            font-size: 35px;
            font-family: sans-serif;
            font-weight: 900;
            text-align: center;
            animation: move 5s linear infinite;
            transition: all 2s ease-in-out;
            z-index: 100;
        }

        @keyframes move {
            0%{
                transform: rotate(0deg);


            }

           
            100%{
                
                border-radius: 50%;
                
                transform: rotate(360deg);
        
                
            }
            
        }


        #header{

            position: fixed;
            top: 0;
            left: 0.3%;
            width: 98%;
            height:auto;
            padding-top:20px;
            padding-bottom:20px;
            border: 8px solid #3c535d;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-color: #061b2d;
            font-size: 18px;
            font-weight: 800;
            

        }

        #header a{
            text-decoration:none;
            color: orange;
            animation: dance 2s linear infinite;

        }

        @keyframes dance{

            0%{
                
                transform: rotate(0deg);
            }
            25%{
                
                transform: rotate(3deg);
            }50%{
                
                transform: rotate(0deg);
            }
            100%{
                transform: rotate(-3deg);
               
            }

        }

        .menu{
            position: fixed;
            top: 18%;
            left: 1%;
            width: auto;
            height: auto;
            padding: 5px 5px 5px 5px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            font-weight: 900;
            font-size: 30px;
            background-color: #061b2d;
            color: antiquewhite;
            border-radius: 10px;
            transform: rotate(90deg);
            text-decoration: none;
            cursor: pointer;
            z-index: 3;
            

        }
        .menu-box{
            position: fixed;
            top: 26%;
            left: 1%;
            width: 35%;
            height: auto;
            padding: 20px 5px 20px 5px;
            background-color: white;
            border-radius: 5px;
            display:grid;
            grid-gap: 5px;
            grid-template-columns: auto;
            z-index: 3;
            font-weight: 500;
            visibility: hidden;
            user-select: none;
            

        }

        .cls{
            position: absolute;
            top: 0%;
            right: 0%;
            float: right;
            width: auto;
            height: auto;
            padding: 5px 5px 5px 5px;
            background-color:rgb(141, 35, 35);
            color: white;
            border: 0;
            text-align: center;
            z-index:50;

        }
        .menu-opt{
            background-color: azure;
            text-align: center;
            padding: 5px 5px 5px 5px;
            color: gray;
            border-radius:5px;
            border: 0.003px solid rgb(199, 194, 194);
        }

        .menu-opt:hover{
            color: gray;
            background-color: rgb(188, 202, 202);
        }

        .container{

            position: fixed;
            top: 17%;
            left: 5%;
            right: 5%;
            height: 80%;
            background-color: rgba(196, 191, 191, 0.685);
            display:block;
            justify-content: center;
            align-items: center;
            overflow-y: scroll;
            overflow-x: hidden;
            user-select: none;

        }

        .data{
            position: relative;
            width: 80%;
            height: auto;
            padding: 30px 10px 10px 10px;
            left: 10%;
            border-radius: 10px;
            border: 3px solid #3c535d;
            margin-top: 100px;
            display: block;
            justify-content: center;
            align-items: center;
            padding-bottom: 30px;
           background: rgba(172, 167, 167, 0.685);
        }

        .date{
            position: absolute;
            top: 2%;
            left: 1%;
            width: 100%;
            height: auto;
            text-align: left;
            padding: 10%;
            color:darkslategray;
            z-index: 2;
            font-weight: 500;
            


        }

        .data a{
            text-decoration: none;
        }

       
        .box{

            position: relative;
            margin-top: 50px;
            left: 10%;
            width: 80%;
            height: auto;
            padding: 30px 10px 30px 10px;
            background-color:rgb(35, 93, 110);
            color: white;
            text-align: center;
            font-size: 20px;
            font-weight: 500;
            border-radius: 30px;
            border:0px solid #292929;
            z-index: 3;
            text-decoration: underline;
            
        }

        .box:hover{
            background-color: white;
            color:darkslateblue;
            border:2px solid rgb(51, 146, 114);
            cursor: pointer;
        }



        @media only screen and (max-width:450px) {
            

            .ball-container{
                padding: 5px 5px 5px 5px;
                top: 0%;
            }
            .ball{
                width: 25px;
                height: 25px;
            }

            #header p{
                font-size: 18px;
            }

            .data{
                left: 0%;
                width: 90%;
            }

            .date{
                top:15%;
                font-size: 13px;
                font-weight: 600;
            }

            .menu-box{
                width: 35%;

            }

        }


        @media only screen and (max-width:550px) {
        
        .data1{
            width: 70%;
        }

        .menu-box{

            width: 50%;
        }

        }


    </style>

</head>
<body>
  
    
<div id="header">

<a  href="home.html " id="jsz">jobseekerzone!</a>


</div>

    
 <div class="ball-container">
    <div class="ball" id="ball">

    </div>

 </div>  
 
 
 <a class="menu" id="menu"> ||| </a>

 <div class="menu-box" id="mbox">
 <button class="cls" id="cls"> X </button>
    <a href="home.html" class="menu-opt">Home</a>
    <a class="menu-opt">option</a>
    <a class="menu-opt">option</a>
    <a class="menu-opt">option</a>
    <a class="menu-opt">option</a>


 </div>





 <div class="container" id="container">

    <span class="date"> <i>. currently ongoing jobs are here :  </i></span>

    <div class="data">

    <?php    



$servername = "sql213.epizy.com";
$username = "epiz_34302057";
$password = "fXgABcnIk06YRP";
$db = "epiz_34302057_jobs";

// Create connection
$con = new mysqli($servername, $username, $password,$db);

$sql = "SELECT * FROM job";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  
  while($row = $result->fetch_assoc()) {
    echo "
    
    <a href='".$row['link']."'  target='_blank'>
            
    <div class='box'>".$row['name']."</div>
    
    </a>
    

    ";
  }

}

        

    ?>

       
  
    </div>



 </div>



<script>

let c=0;

setInterval(function(){

    c+=1;

let title = document.getElementById("title");

if(c==1){

    title.innerHTML = "hiring . ";

}
else if(c==2){

    title.innerHTML = "hiring . . ";
}

else{
    title.innerHTML = "hiring . . . ";
}

if(c>3){
    c=0;
}


},1000)

let d=0;

setInterval(function(){
d+=1

let jsz = document.getElementById("jz");
jsz.style.transition="all 1s";

if(d==1){
jsz.style.transform="rotate(2deg)";
}
else if(d==2){
jsz.style.transform="rotate(-2deg)";
}
else{
jsz.style.transform="rotate(2deg)";

}

if(d>3){
    d=0;
}


},500)



  setInterval(function(){
    let ball = document.getElementById("ball");
    let l = ["green","lightgreen","orange","yellow","blue","blueviolet","cadetblue","lightseablue","skyblue","darkblue","crimson"]
    let ln = l.length;
    let a = Math.round(Math.random()*ln);
    a = a-1;
    if(a<0){
        a=0;
    }

    ball.style.backgroundColor = "cadetblue";
    console.log(a);

  },3000)



let menu = document.getElementById("menu");
let cls = document.getElementById("cls");


menu.addEventListener("click",function(){
    

    let mbox = document.getElementById("mbox");

    let s = mbox.style.visibility;

    if(s=="visible"){

        mbox.style.visibility = "hidden";
    }
    else{

        mbox.style.visibility = "visible";
    }

});

cls.addEventListener("click",function(){

mbox.style.visibility = "hidden";


});




</script>

</body>
</html>