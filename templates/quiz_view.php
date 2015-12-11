
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
					<p>Practice quiz</p>
				</header>
				<div class="container">
					<section>
					    <form action="quiz.php" method="post">
				            <?php $j = 0; $i = 0; foreach ($questions as $question): ?>
					            <div class="12u$">
						            <h2 style="color: #629DD1;">Question <?= $j ?> </h2>
						            <p><?= $question[1] ?></p>
                                    <input type="radio" value="<?= $question[2] ?>" id="<?= $i ?>" name="question<?=$question["0"]?>">
								    <label for="<?= $i ?>"><?= $question[2] ?></label>
								    <?php $i++; ?>
								    </br>
								    <input type="radio" value="<?= $question[3] ?>" id="<?= $i ?>" name="question<?=$question["0"]?>">
								    <label for="<?= $i ?>"><?= $question[3] ?></label>
								    <?php $i++; ?>
								    </br>
								    <input type="radio" value="<?= $question[4] ?>" id="<?= $i ?>" name="question<?=$question["0"]?>">
								    <label for="<?= $i ?>"><?= $question[4] ?></label>
								    <?php $i++; ?>
								    </br>
								    <input type="radio" value="<?= $question[5] ?>" id="<?= $i ?>" name="question<?=$question["0"]?>">
								    <label for="<?= $i ?>"><?= $question[5] ?></label>
								    <input type="hidden" name="order[]" value="<?= $question["0"] ?>">
								    <?php $i++; ?>
					            </div>
					            <hr>
				            <?php $j++; endforeach ?>
				            </br>
			                <div class="wrapper style2">
				                <section class="special">
					                <ul class="actions">
						                <input type="submit" class="button alt" name="submit" value="Submit Answers"><br>
					                </ul>
				                </section>
			                </div>
			            </form>
					</section>
				</div>
			</section>
