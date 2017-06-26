<?php
    class Ship
{
    private $weight;
    private $height;
    private $length;
    private $width;

    function __construct($weight, $height, $length, $width)
    {
        $this->weight = $weight;
        $this->height = $height;
        $this->length = $length;
        $this->width = $width;
    }
}


    function getWeight()
    {
        return $this->$weight;
    }
    function getHeight()
    {
        return $this->$height;
    }
    function getLength()
    {
        return $this->$length;
    }
    function getWidth()
    {
        return $this->$width;
    }

    function box_dimensions()
    {
        $_GET["weight"] * $_GET["height"]
        return box_dimensions();
    }

 ?>

<!DOCTYPE html>
<html>
    <head>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
        <link rel="stylesheet" href="css/styles.css" type="text/css">
        <meta charset="utf-8">
        <title>Package</title>
    </head>
    <body>
        <div class="container">

        <h1>Nice!</h1>
        <?php
        echo "<p> box_dimensions </p>"

         ?>


        </div>
    </body>
</html>
