<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Grid Basico</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
   <link rel=" stylesheet" href="css/style.css" >


  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
  <!----
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
--->

</head>
<body>


<div class="container-fluid">
    <div class="row">

        <div class="col-md-4 col-sm-12 col-lg-4 col-md-12 cM">
            <h4>4</h4>
            <div class="row">

                <div class="col-6 col-xs-6 col-sm-6 c1"><h4>6</h4>

                <div class="row">
                    <div class="col-7 col-sm-6 c3"><h4>6</h4></div>
                    <div class="col-5 col-sm-6 c4"><h4>6</h4></div>
                </div>

            </div>
                <div class="col-6 col-xs-6 col-sm-6 c2"><h4>6</h4></div>

                
            </div>
            
        </div>

        <div class="col-6 col-md-6 col-sm-6 col-xs-6 col-lg-4 cM2">
            <h4>4</h4>
        <div class="row">
            <div class="col-3 col-sm-12 col-lg-3 c1"><h4>3</h4></div>
            <div class="col-3 col-sm-12 col-lg-3 c2"><h4>3</h4></div>
            <div class="col-3 col-sm-12 col-lg-3 c1"><h4>3</h4></div>
            <div class="col-3 col-sm-12 col-lg-3 c2"><h4>3</h4></div>
            </div>
        </div>
        

        <div class="col-6 col-md-6 col-sm-6 col-xs-6 col-lg-4 cM3">
            <h4>4</h4>           
            <div class="row">
                <div class="col-3 col-sm-12 col-lg-3 c5"><h4>3</h4></div>
                <div class="col-3 col-sm-12 col-lg-3 c6"><h4>3</h4></div>
                <div class="col-3 col-sm-12 col-lg-3 c5"><h4>3</h4></div>
                <div class="col-1 col-sm-12 col-lg-3 c6"><h4>1</h4></div>
                <div class="col-1 col-sm-12 col-lg-3 c1"><h4>1</h4></div>
                
            </div>
        </div>
    </div>
</div>

<b><hr><hr><br>

<div class="container-fluid">

    <!---primera fila principal------>

    <div class="row">
        <div class="col-12 col-md-12 col-lg-12 col-xl-12 col-sm-12 col-xs-12 primero"><h3>12</h3></div>        
    </div>

    <!---segunda fila principal------>

    <div class="row">

        <div class="col-4  col-md-4 col-lg-4 col-xl-4 col-sm-2 segundo" ><h3>4</h3></div>

        <div class="col-8  col-md-8 col-lg-8 col-xl-8 col-sm-10 " >

            <div class="row tercero "><h3>8</h3></div>

            <div class="row ">
                <div class="col-6  col-md-6 col-lg-6 col-xl-6 col-sm-12 cuarto"><h3>6</h3></div>

                <div class="col-6 col-md-6 col-lg-6 col-xl-6  col-sm-12 quinto"><h3>6</h3></div>
            </div>

            <div class="row">
                <div class="col-2 col-md-2 col-lg-2 col-xl-2 col-sm-4 dos"><h3>2</h3></div>
                <div class="col-2 col-md-2 col-lg-2 col-xl-2 col-sm-4 dos1"><h3>2</h3></div>
                <div class="col-4 col-md-4 col-lg-4 col-xl-4 col-sm-4 cuatro"><h3>4</h3></div>
                <div class="col-2 col-md-2 col-lg-2 col-xl-2 col-sm-4 dos3"><h3>2</h3></div>
                <div class="col-2 col-md-2 col-lg-2 col-xl-2 col-sm-4 dos4"><h3>2</h3></div>
            </div>

            <div class="row">
                <div class="col-2 col-md-2 col-lg-2 col-xl-2 col-sm-4 dos-d"><h3>2</h3></div>
                <div class="col-2 col-md-2 col-lg-2 col-xl-2 col-sm-4 dos1-1"><h3>2</h3></div>
                <div class="col-4 col-md-4 col-lg-4 col-xl-4 col-sm-4 cuatro-1"><h3>4</h3></div>
                <div class="col-2 col-md-2 col-lg-2 col-xl-2 col-sm-2 dos3-1"><h3>2</h3></div>
            </div>

        </div>

    </div>

    <!---tercera fila principal------>
    
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12 col-xl-12 col-sm-12 footer"><h3>footer</h3></div>
    </div>

</div>

<b><hr><hr><br>

<div class="container tres ">
    <p>container</p>
    <div class="row tresr">
        <div class="col-2 tresl">1</div> 
        <div class="col-6 tresl">2</div>
         <div class="col-4 tresl ">3</div>
    </div>
    
</div>

<b><hr><hr><br>

<div class="container tres">
    <div class="row">
        <div class="col-6 col-sm-4 tres">col-sm-4</div> 
        <div class="col-6 col-sm-8 tres">col-sm-8</div>
    </div>
    <div class="row">
        <div class="col-sm  col-lg tres">col-sm-4</div>
        <div class="col-sm col-lg tres">col-sm-4</div>
        <div class="col-sm col-lg tres">col-sm-4</div>
        <div class="col-sm col-lg tres">col-sm-4</div>
        <div class="col-sm col-lg tres">col-sm-4</div>
        <div class="col-sm col-lg tres">col-sm-4</div>
        <div class="col-sm col-lg tres">col-sm-4</div>
        <div class="col-sm col-lg tres">col-sm-4</div>
    </div>  
</div>

<b><hr><hr><br>

<div class="container ">
    <div class="tres col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">contenido</div>
    <div class="tres col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">contenido</div>
    <div class="tres col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">contenido</div>
    <div class="tres col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">contenido</div>
    <div class="tres col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">contenido</div>
    <div class="tres col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">contenido</div>
</div>
</body>
</html>
