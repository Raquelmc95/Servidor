<?php
echo "<table border='1px cellspadding='5'";
echo "<tr><td colspan='2'>Alumnos de la clase de primero</td></tr>";
echo "<tr><td>Nombre</td><td>Edad</td></tr>";
echo "<tr><td>Juan</td><td>21</td></tr>";
echo "<tr><td>Maria</td><td>19</td></tr>";
echo "<tr><td>Pedro</td><td>24</td></tr>";
echo "<tr><td>Antonio</td><td>30</td></tr>";
echo "<tr><td>Carmen</td><td>24</td></tr>";
echo "<tr><td>Carlos</td><td>26</td></tr>";
echo "<tr><td>Lucia</td><td>22</td></tr>";
echo "</table>";

echo "<br>";
echo "<table border='1px cellspadding='5'";
echo "<tr><td colspan='2'>Alumnos de la clase de segundo</td></tr>";
echo "<tr><td>Nombre</td><td>Edad</td></tr>";
echo "<tr><td>Jaime</td><td>27</td></tr>";
echo "<tr><td>Luisa</td><td>21</td></tr>";
echo "<tr><td>Aitor</td><td>33</td></tr>";
echo "<tr><td>Macarena</td><td>22</td></tr>";
echo "<tr><td>Maria</td><td>27</td></tr>";
echo "<tr><td>Pedro</td><td>28</td></tr>";
echo "<tr><td>Juan</td><td>24</td></tr>";
echo "</table>";

$primero = [
    ["Nombre" => "Juan", "Edad" => "21"],
    ["Nombre" => "Maria", "Edad" => "19"],
    ["Nombre" => "Pedro", "Edad" => "24"],
    ["Nombre" => "Antonio", "Edad" => "30"],
    ["Nombre" => "Carmen", "Edad" => "24"],
    ["Nombre" => "Carlos", "Edad" => "26"],
    ["Nombre" => "Lucia", "Edad" => "22"]
];
$segundo = [
    ["Nombre" => "Jaime", "Edad" => "27"],
    ["Nombre" => "Luisa", "Edad" => "21"],
    ["Nombre" => "Aitor", "Edad" => "33"],
    ["Nombre" => "Macarena", "Edad" => "22"],
    ["Nombre" => "Maria", "Edad" => "27"],
    ["Nombre" => "Pedro", "Edad" => "28"],
    ["Nombre" => "Juan", "Edad" => "24"]
];

echo print_r($primero);
echo "<br>";
echo print_r($segundo);
?>