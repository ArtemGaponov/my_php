<html>
<head></head>
<style type="text/css">


    #color1 {
        height: 100px;
        width: 100px;
        background: red;
        border: 5px solid #ffffff;
    }

    #color2 {
        height: 100px;
        width: 100px;
        background: #0B55C4;
        border: 5px solid #ffffff;
    }

    #color3 {
        height: 100px;
        width: 100px;
        background: #f0c36d;
        border: 5px solid #ffffff;
    }

    #color4 {
        height: 100px;
        width: 100px;
        background: indigo;
        border: 5px solid #ffffff;
    }

    #color5 {
        height: 100px;
        width: 100px;
        background: sienna;
        border: 5px solid #ffffff;
    }

    #color6 {
        height: 100px;
        width: 100px;
        background: orange;
        border: 5px solid #ffffff;
    }

    #color7 {
        height: 100px;
        width: 100px;
        background: violet;
        border: 5px solid #ffffff;
    }

    #color8 {
        height: 100px;
        width: 100px;
        background: #dd514c;
        border: 5px solid #ffffff;
    }

    #color9 {
        height: 100px;
        width: 100px;
        background: #33383D;
        border: 5px solid #ffffff;
    }

    #color10 {
        height: 100px;
        width: 100px;
        background: #d90075;
        border: 5px solid #ffffff;
    }


</style>

<body>


<?php for ($a = 1; $a <= 10; $a++) {

    $array[] = $a; }
shuffle($array);
var_dump($array);

    foreach ($array as $id) {?>

        <a href="">
            <div id="color<?php echo $id ?>"></div>
        </a>


    <?php  }?>








    <a href="">
        <div id="color<?php echo $array[''][$a] ?>"></div>
    </a>











<?php

 ?>


</body>

</html>