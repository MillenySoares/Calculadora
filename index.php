<?php
    $num ="";
    $result = "";
    $cookie_name1 = "num";
    $cookie_value1 = "";
    $cookie_name2 = "op";
    $cookie_value2 = "";
    if(isset($_POST['display'])){
        $num = $_POST['display'];
    }else{
        $num = ""; 
    }
    if(isset($_POST['apagar'])){
        $num = $_POST['apagar'];
    }else{
        $num = ""; 
    }


    if(isset($_POST['submit'])){
        $num = $_POST['display'] . $_POST['submit'];
    }else{
        $num = "";
    }

    if(isset($_POST['op'])){
        $cookie_value1 = $_POST['display'];
        setcookie($cookie_name1, $cookie_value1, time() + (86400*30), "/");

        $cookie_value2 = $_POST['op'];
        setcookie($cookie_name2, $cookie_value2, time() + (86400*30), "/");

        $num = "";
    }
    if(isset($_POST['equals'])){
        $num = $_POST['display'];

        switch($_COOKIE['op']){
            case "+":
              $result = $_COOKIE['num'] + $num;
              break;
            case "/":
              $result = $_COOKIE['num'] / $num;
              break;
            case "-":
              $result = $_COOKIE['num'] - $num;
              break;
            case "x":
              $result = $_COOKIE['num'] * $num;
              break;
        }  
        $num = $result;      
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Calculadora</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">      
    </head>
    <body>

        <div class="cor-fundo-um">
            <div class="container-fluid">
                <div class="row ">
                    <div style="width: 430px; margin-top:90px;" class="pt-4 col-4 shadow box-shadow "> 
                        <h1  class="text-white text-center mt-2 font-title"><b>CALCULADORA</b></h1>
                        <div class="d-flex justify-content-center mt-4">
                        <form action="#" method="post">
                        <table border="1">
                            <tr>
                                <td colspan="4">
                                    <input class="inputUm input" name="display" type="text" value=<?php echo $num; ?> >
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="inputNumber" type="submit" name="submit" value="7"/>
                                    <input class="inputNumber" type="submit" name="submit" value="8"/>
                                    <input class="inputNumber" type="submit" name="submit" value="9"/>
                                    <input class="inputNumber" type="submit" name="op" value="/"/>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <input class="inputNumber" type="submit" name="submit" value="4"/>
                                    <input class="inputNumber" type="submit" name="submit" value="5"/>
                                    <input class="inputNumber" type="submit" name="submit" value="6"/>
                                    <input class="inputNumber" type="submit" name="op" value="+"/>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <input class="inputNumber" type="submit" name="submit" value="1"/>
                                    <input class="inputNumber" type="submit" name="submit" value="2"/>
                                    <input class="inputNumber" type="submit" name="submit" value="3"/>
                                    <input class="inputNumber" type="submit" name="op" value="-"/>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <input class="inputNumber" type="submit" name="submit" value="0"/>
                                    <input class="inputNumber" type="submit" name="apagar" value="C"/>
                                    <input class="inputNumber" type="submit" name="equals" value="="/>
                                    <input class="inputNumber" type="submit" name="op" value="x"/>
                                </td>
                            </tr>
                        </table>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cor-fundo-dois"></div>
    </body>
</html>