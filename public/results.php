<?php

    // configuration
    require("../includes/config.php");
    
    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        $rows = query("SELECT * FROM results WHERE id = ?", $_SESSION["id"]);
    
        $results = [];
        $grade;
        
        foreach ($rows as $row)
        {
            
            if ($row["points"] > 89) { $grade= 'A'; }
            else if ($row["points"] > 79) { $grade= 'B'; }
            else if ($row["points"] > 69) { $grade= 'C'; }
            else if ($row["points"] > 59) { $grade= 'D'; }
            else { $grade= 'F'; }

            $results[] = [
                "date" => $row["date"],
                "points" => $row["points"],
                "grade" => $grade,
            ];
        }
        
        render("results_view.php", ["title" => "Results", "results" => $results]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        
        
    }
?>
