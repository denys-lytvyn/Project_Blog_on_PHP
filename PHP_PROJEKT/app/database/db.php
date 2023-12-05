<?php
// Start a session
session_start();

// Include the database connection file
require('connect.php');

// Function to display variable content for debugging
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
function update($table, $id, $params)
{
    global $pdo;
    $i = 0;
    $str = '';
    $values = [];
    foreach ($params as $key => $value) {
        if ($i === 0) {
            $str = $str . $key . " = ?";
        } else {
            $str = $str . ", " . $key . " = ?";
        }
        $values[] = $value;
        $i++;
    }

    $values[] = $id;
    $sql = "UPDATE $table SET $str WHERE id = ?";
    $query = $pdo->prepare($sql);
    $query->execute($values);
    dbCheckError($query);
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


// SELECT POSTS WITH USER_ID
function selectAllFromPostsWithUsers($table1, $table2)
{
    global $pdo;

    $sql = "SELECT
    t1.id,
    t1.title,
    t1.img,
    t1.content,
    t1.status,
    t1.id_topic,
    t1.created_date,
    t2.username
    FROM $table1 AS t1 JOIN $table2 AS t2 ON t1.id_user = t2.id
    ";

    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);

    return $query->fetchAll();
}

// SELECT POSTS WITH AUTHOR ON MAIN PAGE
function selectAllFromPostsWithUsersOnIndex($table1, $table2)
{
    global $pdo;

    $sql = "SELECT p.*, u.username FROM $table1 AS p JOIN $table2 AS u ON p.id_user = u.id WHERE p.status=1";

    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);

    return $query->fetchAll();
}

// SLIDER 
function selectTopTopicFromPostsOnIndex($table1)
{
    global $pdo;
    $sql = "SELECT * FROM $table1 WHERE id_topic = 16";
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetchAll();
}

// SEARCH
function searchInTitleAndContent($text, $table1, $table2)
{
    $text = trim(strip_tags(stripslashes(htmlspecialchars($text))));

    global $pdo;

    $sql = "SELECT 
        p.*, u.username 
        FROM $table1 AS p 
        JOIN $table2 AS u 
        ON p.id_user = u.id 
        WHERE p.status = 1
        AND (p.title LIKE :text OR p.content LIKE :text)";

    $query = $pdo->prepare($sql);
    $query->execute(['text' => '%' . $text . '%']);
    dbCheckError($query);

    return $query->fetchAll();
}

// SELECT POST ON SINGLE PAGE
function selectPostFromPostsWithUsersOnSingle($table1, $table2, $id)
{
    global $pdo;
    $sql = "SELECT p.*, u.username FROM $table1 AS p JOIN $table2 AS u ON p.id_user = u.id WHERE p.id=$id";
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetch();
}
?>