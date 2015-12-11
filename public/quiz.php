<?php

    // configuration
    require("../includes/config.php");

    $questions = query("SELECT * FROM questions ORDER BY RAND()");
    $wrong_answers = query("SELECT * FROM wrong_answers");
    
    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        $questions = query("SELECT * FROM questions ORDER BY RAND()");
        $wrong_answers = query("SELECT * FROM wrong_answers");

        // 2D array of questions and answers
        $arr = array();

        // for each question
        foreach ($questions as $question) {

            // for each wrong answer
            foreach ($wrong_answers as $wrong){

                // if question id matches wrong answer id
                if($wrong["id"] == $question["id"]){
                    
                    // create array with questions, correct answer, and wrong answers
                    $q = array($question["id"], $question["text"], $question["answer"], 
                        $wrong["w1"], $wrong["w2"], $wrong["w3"]);
                    
                    // shuffle answer selection order
                    array_shuffle_section($q, 2, 5);

                    // add to global array
                    array_push($arr, $q);
                }
            }
        }

        render("quiz_view.php", ["title" => "Quiz", "questions" => $arr]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST"){

        $results = array();
        $totalQuestions = 0;
        $totalCorrect = 0;
        $grade = 0;
        
        if (isset($_POST['submit'])) {
        //$answers = query("SELECT id, answer FROM questions");
        $i = 0;

            // grade answers in order
            foreach ($_POST['order'] as $answer_order){
                $totalQuestions++;

                // grade all answers
                foreach ($questions as $answer){

                    // if current question id == answer id
                    if($answer_order == $answer["id"]){
                        
                        // if user provided answer
                        if (!empty($_POST['question' . $answer["id"]])) {

                            $r = array($answer["text"], $answer["answer"], $_POST['question' . $answer["id"]]);
                            array_push($results, $r);
                            
                            // if answer is correct
                            if ($_POST['question' . $answer["id"]] == $answer["answer"]){
                                $totalCorrect++;
                            }
                        } else {
                            $r = array($answer["text"], $answer["answer"], -1);
                            array_push($results, $r);
                            
                        }
                    }
                }

                // AFTER GRADE
                $grade = 0;
                if ($totalCorrect != 0){
                    $grade = (double)$totalCorrect / (double)$totalQuestions;
                    $grade *= 100;
                }
                
                
            }
            // print_r($results);
            query("INSERT INTO results (id, points) VALUES (?, ?)", $_SESSION["id"], $grade);
            render("quiz_result.php", ["title" => "Quiz Results", "results" => $results]);
        }
        
    }
    
    // shuffle array from index start to end
        function array_shuffle_section(&$arr, $start, $end) { 
            $head = array_slice($arr, 0, $start); 
            $body = array_slice($arr, $start, $end-$start+1); 
            $tail = array_slice($arr, $end+1); 

            shuffle($body); 
            $arr = array_merge($head,$body,$tail); 
        }
?>

