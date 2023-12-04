<?php

session_start();

require('connect.php');

function tt($value)
{
    echo '<pre>';
    print_r($value);
    echo '</pre>';
    exit();
}

// query execution check
function dbCheckError($query)
{
    $errInfo = $query->errorInfo();

    if ($errInfo[0] !== PDO::ERR_NONE) {
        echo $errInfo[2];
        exit();
    }
}

// SELECT ALL STRINGS FROM TABlE
function selectAll($table, $params = [])
{
    global $pdo;
    $sql = "SELECT * FROM $table";

    if (!empty($params)) {
        $i = 0;
        foreach ($params as $key => $value) {
            if (!is_numeric($value)) {
                $value = "'" . $value . "'";
            }
            if ($i === 0) {
                $sql = $sql . " WHERE $key = $value";
            } else {
                $sql = $sql . " AND $key = $value";
            }
            $i++;
        }
    }

    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);

    return $query->fetchAll();

}

// SELECT ONE STRING FROM TABlE
function selectOne($table, $params = [])
{
    global $pdo;
    $sql = "SELECT * FROM $table";

    if (!empty($params)) {
        $i = 0;
        foreach ($params as $key => $value) {
            if (!is_numeric($value)) {
                $value = "'" . $value . "'";
            }
            if ($i === 0) {
                $sql = $sql . " WHERE $key = $value";
            } else {
                $sql = $sql . " AND $key = $value";
            }
            $i++;
        }
    }

    $sql = $sql . " LIMIT 1";


    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);

    return $query->fetch();

}

// INSERT INTO TABLE 
function insert($table, $params)
{
    global $pdo;

    $i = 0;
    $coll = '';
    $mask = '';

    foreach ($params as $key => $value) {
        if ($i === 0) {
            $coll = $coll . "$key";
            $mask = $mask . ":$key";
        } else {
            $coll = $coll . ", $key";
            $mask = $mask . ", :$key";
        }
        $i++;
    }
    $sql = "INSERT INTO $table ($coll) VALUES ($mask)";

    $query = $pdo->prepare($sql);
    $query->execute($params);
    dbCheckError($query);

    return $pdo->lastInsertId();
}


// UPDATE VALUES IN TABLE 
function update($pdo, $table, $id, $params)
{

    $allowedFields = ['name', 'description'];

    $setClause = '';
    $values = [];

    foreach ($params as $key => $value) {

        if (in_array($key, $allowedFields)) {
            $setClause .= ($setClause ? ', ' : '') . "`$key` = ?";
            $values[] = $value;
        }
    }

    $sql = "UPDATE `$table` SET $setClause WHERE `id` = ?";

    $values[] = $id;

    $query = $pdo->prepare($sql);
    $query->execute($values);

    dbCheckError($query);

    return $id;
}

// DELETE FROM TABLE WHERE ...
function delete($table, $id)
{
    global $pdo;

    $sql = "DELETE FROM $table WHERE id =" . $id;

    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
}


?>