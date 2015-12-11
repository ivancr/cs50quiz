
        <!-- Header -->
			<header id="header" class="skel-layers-fixed">
				<h1><a href="index.php"><img src="images/Logo_Menu_Grey.svg" alt="Logo" /></a></h1>
				<nav id="nav">
					<ul>
						<li><a href="quiz.php">Quiz 0</a></li>
						<li><a href="quiz.php">Quiz 1</a></li>
						<li><a href="results.php">Results</a></li>
						<li><a href="logout.php" class="button special">Sign out</a></li>
					</ul>
				</nav>
			</header>

        <!-- Quiz -->
			<section id="main" class="wrapper style1">
				<header class="major">
					<h2>Quiz 0</h2>
					<p>Your Results</p>
				</header>
				<div class="container">
					<section>
					    <form action="quiz.php" method="post" class="answers">
				            <?php $j = 0; foreach ($results as $result): ?>
					            <div class="12u$">
						            <h2 style="color: #629DD1;">Question <?= $j ?> </h2>
						            <p><?= $result[0] ?></p>
						            <?php
                                        if ($result[2] === -1) {
                                            print "<span style=\"color: red\" class=\"icon fa-times-circle\">  Answer not provided"  . "</span>";
                                            print "</br>";
                                            print "<span style=\"color: green\" class=\"icon fa-check-circle\">  "  . $result[1] . "</span>";
                                        }
                                        else if ($result[1] == $result[2]) {
                                            print "<span style=\"color: green\" class=\"icon fa-check-circle\">  "  . $result[2] . "</span>";
                                        } else {
                                            print "<span style=\"color: red\" class=\"icon fa-times-circle\">  "  . $result[1] . "</span>";
                                            print "</br>";
                                            print "<span style=\"color: green\" class=\"icon fa-check-circle\">  "  . $result[2] . "</span>";
                                        }
                                    ?>
					            </div>
					            <hr>
				            <?php $j++; endforeach ?>
			            </form>
					</section>
				</div>
			</section>
				</div>
			</section>
