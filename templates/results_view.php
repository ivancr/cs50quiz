
		<!-- Header -->
			<header id="header" class="skel-layers-fixed">
				<h1><a href="index.php"><img src="images/Logo_Menu_Grey.svg" alt="Logo" /></a></h1>
				<form action="quiz.php" method="post">
				<nav id="nav">
					<ul>
						<li><a href="quiz.php">Quiz 0</a></li>
						<li><a href="quiz.php">Quiz 1</a></li>
						<li><a href="logout.php" class="button special">Sign out</a></li>
					</ul>
				</nav>
			</header>
		
		<!-- Results -->
			<section id="main" class="wrapper style1">
				<header class="major">
					<h1>Results for <strong style="color: #629DD1;"><?= $_SESSION["name"] ?></strong></h1>
					<h3>You have a cumulative score of: </h3> 
				</header>
				<div class="container">
					<div class="table-wrapper">
								<table class="alt">
									<thead>
										<tr>
											<th>Date</th>
											<th>Result</th>
											<th>Grade</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($results as $result):  $date = date_create($result["date"]) ?>
								        <tr>
								            <td><?= date_format($date, 'g:ia \o\n l jS F Y') ?></td>
								            <td><?= $result["points"] ?></td>
								            <td><?= $result["grade"] ?></td>
								        </tr>
								        <?php endforeach ?>
									</tbody>
								</table>
							</div>
				</div>
			</section>
			</br>
