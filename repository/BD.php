<?php

namespace Repository;
use PDO;
class BD
{
 static function getBD() : PDO{
    return new PDO('mysql:dbname=w11420n46jolinfo_tp1;host=localhost','w11420n46jolinfo_admin', '4zpCX;M_EmkR');
}
}