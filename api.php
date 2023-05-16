<?php
    /* header("Content-type:application/json"); */
    /* $obj = (object) [];
    $obj->nombre = (string) "Santiago";
    $obj->apellido = (string) "Bernal";
    $obj->edad = (integer) 18;*/
    $config = (array) [];
    $config["http"] = (array) [];
    $config["http"]["method"] = (string) "GET";
    $config["http"]["header"] = (string) "Content-type:application/json";
    $strm = stream_context_create($config);

    $res = file_get_contents("https://pokeapi.co/api/v2/pokemon", false, $strm);

    echo $res;

?>