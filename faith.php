<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    .conatiner{
  width: 100%;
  height: 100vh;
  background: red;
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-template-rows: 1fr;
  grid-template-areas: 
    '. . .'
    ;
}
.conatiner .caja{
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}
.conatiner .caja img{
  width: 250px;
}

@media screen and (max-width: 700px){
  .conatiner{
  width: 100%;
  height: 100vh;
  background: red;
  display: grid;
  grid-template-columns: 1fr;
  grid-template-rows: 1fr 1fr 1fr;
  grid-template-areas: 
    '.'
    '.'
    '.'
    ;
}
    </style>
</head>
<body>
    

    <div class="conatiner">
        <div class="caja" style="background: #706B6C;">
            <img src="http://faith27.com/images/koalaFAITH.png" alt="">
        </div>
        <div class="caja" style="background: red;">
            <img src="http://faith27.com/images/markeking.png" alt="">
        </div>
        <div class="caja" style="background: purple;">
            <img src="http://faith27.com/images/tattooFAITH.png" alt="">
        </div>
    </div>

</body>
</html>