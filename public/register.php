<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("register_view.php", ["title" => "Register"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // TODO
        if (empty($_POST["name"]))
        {
            apologize("You must provide your username.");
        }
        if (empty($_POST["email"]))
        {
            apologize("You must provide your email.");
        }
        else if (empty($_POST["password"]))
        {
            apologize("You must provide your password.");
        }
        else if ($_POST["confirmation"] !== $_POST["password"])
        {
            apologize("Your passwords don't match.");
        }
        
        $queryResult = query("INSERT INTO users (name, email, password) VALUES(?, ?, ?)", $_POST["name"], $_POST["email"], crypt($_POST["password"]));
        
        if ($queryResult === false)
        {
            apologize("Username already taken!");
        }
        else
        {
            $rows = query("SELECT LAST_INSERT_ID() AS id");
            $row = $rows[0];
            $id = $rows[0]["id"];
            
            $_SESSION["id"] = $row["id"];

            redirect("/quiz.php");
        } 
    }
?>
