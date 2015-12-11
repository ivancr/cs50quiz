    
    
    
            
    <!-- Banner -->
			<section id="banner">
				<div class="inner">
					<a href="index.php"><img src="images/Logo_Banner_White.svg" alt="Logo" /></a>
					<?php if(!empty($_SESSION["id"])){ ?>
                            <p>Welcome <?= $_SESSION["name"] ?>!</p>   
                        <?php } ?>
                        <?php if(empty($_SESSION["id"])){ ?>
                            <p>Get ready for your Quiz!</p>
                        <?php } ?>
					<ul class="actions">
					    <?php if(!empty($_SESSION["id"])){ ?>
                             <li><a href="quiz.php" class="button big special">Take a Quiz</a></li>
					         <li><a href="results.php" class="button big alt icon fa-user">Your Results</a></li>
                        <?php } ?>
                        <?php if(empty($_SESSION["id"])){ ?>
                             <li><a href="register.php" class="button big special">Sign Up</a></li>
					         <li><a href="login.php" class="button big alt">Sign In</a></li>
                        <?php } ?>
					</ul>
				</div>
			</section>
        
		<!-- One -->
			<section id="one" class="wrapper style1">
				<header class="major">
					<h2>CS50 Quizzes can seem daunting</h2>
					<p>
						But don't worry, we have your back. CS50 Prep Quiz helps you practice quiz questions.
					</p>
				</header>
				
		        <?php if(empty($_SESSION["id"])){ ?>
				<div class="container">
					<div class="row">
						<div class="6u">
							<section class="special">
								<h3>Quiz 0</h3>
								<i class="icon fa-graduation-cap major"></i>
								<p><strong>Week 0</strong><br>Binary. ASCII. Algorithms. Pseudocode. Source code. Compiler. Object code. Scratch. Statements. Boolean expressions. Conditions. Loops. Variables. Functions. Arrays. Threads. Events.</p>
                                <p><strong>Week 1</strong><br>Linux. C. Compiling. Libraries. Types. Standard output.</p>
                                <p><strong>Week 2</strong><br>Casting. Imprecision. Switches. Scope. Strings. Arrays. Cryptography.</p>
                                <p><strong>Week 3</strong><br>Command-line arguments. Searching. Sorting. Bubble sort. Selection sort. Insertion sort. O. Ω .Θ. Recursion. Merge Sort.</p>
                                <p><strong>Week 4</strong><br>Stack. Debugging. File I/O. Hexadecimal. Strings. Pointers. Dynamic memory allocation.</p>
								<ul class="actions">
									<?php if(!empty($_SESSION["id"])){ ?>
                                         <li><a href="quiz.php" class="button alt">Start Quiz</a></li>
                                    <?php } ?>
								</ul>
							</section>
						</div>
						<div class="6u">
							<section class="special">
								<h3>Quiz 1</h3>
								<i class="icon fa-graduation-cap major"></i>
								<p><strong>Week 5</strong><br>Heap. Buffer overflow. Linked lists.</p>
                                <p><strong>Week 6</strong><br>Hash tables. Tries. Trees. Stacks. Queues.</p>
                                <p><strong>Week 7</strong><br>TCP/IP. HTTP. HTML. CSS.</p>
                                <p><strong>Week 8</strong><br>PHP. MVC. SQL.</p>
                                <p><strong>Week 9</strong><br>JavaScript. Ajax.</p>
								<ul class="actions">
								    <?php if(!empty($_SESSION["id"])){ ?>
                                         <li><a href="quiz.php" class="button alt">Start Quiz</a></li>
                                    <?php } ?>
								</ul>
							</section>
						</div>
					</div>
				</div>
				<?php } ?>
			</section>
