<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tempreture convertor</title>
    <style>
        *{margin:0;padding:0;box-sizing: border-box;}
h1{
    text-align: center;line-height: 20vh;
    color: #6c63ff;
}
.main-div{ width: 100%;height: 80vh; display:flex; justify-content: space-around;
align-items: center;
font-family: 'Mulish', sans-serif;
font-family: 'Playfair Display', serif;
font-family: 'Ubuntu', sans-serif;
background-color: #3c4283;
}
.left-side{
    width: 400px;
    height: 300px;
    background-color: #746ec2;
    border-radius: 100% 0% 100% 0% / 0% 100% 0% 100% ;
    display: flex;
    justify-content: center;
    align-items: center;
}



.left-side img{
    max-width: 100%;
   max-height: 100%; 
   object-fit: cover;
    
}
.right-side{
    width: 400px;
    height: 300px;
    background-color: #dfe6e9;
    border-radius: 15px;
    display: flex;
    flex-direction:column;
    justify-content: center;
    align-items: center;
    text-align: center;


}
.input1{
    width: 250px;
    height: 40px;
    padding: 5px;
    outline: none;
    border-radius: 1px solid grey;
    border-radius: 5px;


}
.selection{
    width: 1007;
    margin: 20px 0;
}
.btn{
    padding: 10px 16px;
    border-radius: 5px;
    outline: none;
    border: none;
    background-color:#6c63ff;
    color: white;
    font-size: 0.9rem;


}
p{ margin: 20px 0 0 0;}

        </style>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200&family=Playfair+Display:ital@1&family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1> Tempreature conversion</h1>
        <div class="main-div">
            <div class="left-side">
                <img src="climate.jpg" alt="tempreture" >
            </div>
            <div class="right-side">
                <form method="POST">
<input type="text" name="num" placeholder="enter your number" class="input1">
<div class= "selection">
    <label>celce</label>
    <input type ="radio" name="units" value="celce">


<label>faren</label>
<input type ="radio" name= "units" value="faren">
</div>
<input type ="submit" name="submit" value="convert now" class="btn">


                </form>
                <div>
<p>
<?php
if(isset( $_POST['submit']))
{
    $num = $_POST['num'];
    $temp =$_POST['units'];
if( $temp =="celce"){
    $result =   $num * 9 / 5 / +32;
    echo "the  conversion value of cel in faren is ". $result;
}
else{
$result=($num - 32) *5 / 9;
echo "the  conversion value of  faren in cel is ". $result;


}
}





?>
</p>
                </div>
            </div>
        </div>





    </header>


</body>
</html>