<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Music Library</title>
		<meta charset="utf-8" />
		<link href="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/images/5/music.jpg" type="image/jpeg" rel="shortcut icon" />
		<link href="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/labResources/music.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<h1>My Music Page</h1>

		<!-- Ex 1: Number of Songs (Variables) -->
		<?php
		$song_count = 5678;
		?>
		<p>
			I love music.
			I have <?php echo $song_count ?> total songs,
			which is over <? echo (int)($song_count/10) ?> hours of music!
		</p>

		<!-- Ex 2: Top Music News (Loops) -->
		<div class="section">
			<h2>Billboard News</h2>
			<ol>
				<?php $news_pages=5 ?>
				<?php for($i = 11;$i >=($news_pages+2); $i--) { ?>
					<li><a href="https://www.billboard.com/archive/article/2019<?= sprintf('%02d',$i) ?>"> 2019-<?= sprintf('%02d',$i) ?> </a></li>
				<?php } ?>
			</ol>
		</div>
		<!-- Ex 3: Query Variable -->
		<div class="section">
         <h2>Billboard News</h2>
         <ol>
         <?php

         if (isset($_GET["newspages"]))
         {
            $newspages =  $_GET["newspages"];
         }
         else
         {
            $newspages = 5;
         }
         for ($i = 11; $i > 11 - $newspages ; $i--) {
            $news_pages = $i;
            if($i < 10)
            {
               $news_pages = "0" . $news_pages; ?>
               <li><a href="https://www.billboard.com/archive/article/2019<?= $news_pages?>">2019- <?= $news_pages ?> </a></li>
            <?php }
            else
            {
               $news_pages = $i; ?>
               <li><a href="https://www.billboard.com/archive/article/2019<?= $news_pages?>">2019- <?= $news_pages ?> </a></li>
            <?php }
         } ?>
      </ol>
      </div>

		<!-- Ex 4: Favorite Artists (Arrays) -->
		<?php $singers = array("Gun N's Roses","Green Day","Blink182","J.fla") ?>
		<div class="section">
			<h2>My Favorite Artists</h2>

			<ol>
				<?php for($i = 0; $i < count($singers);$i++){ ?>
					<li><?= $singers[$i] ?></li>
			<?php } ?>
			</ol>
		</div>
		<!-- Ex 5: Favorite Artists from a File (Files) -->
		<div class="section">
			<h2>My Favorite Artists</h2>

			<?php $lines = file("favorite.txt") ?>

			<ol>
				<?php foreach ($lines as $line){ ?>
					<li><a href="http://en.wikipedia.org/wiki/<?= $line?>"><?= $line ?></a></li>
			<?php } ?>
			</ol>
		</div>

		<!-- Ex 6: Music (Multiple Files) -->
		<!-- Ex 7: MP3 Formatting -->
		<div class="section">
			<h2>My Music and Playlists</h2>

			<ul id="musiclist">
				<?php foreach (glob("lab5/musicPHP/songs/*.mp3") as $filename ) { ?>
					<li class="mp3item"><a href="<?= $filename ?>"><?php echo basename($filename)?></a> <?php echo" (".(int)(filesize($filename)/1024)." KB)" ?></li>
				<?php } ?>
				<!-- Exercise 8: Playlists (Files) -->
				<?php foreach (glob("lab5/musicPHP/songs/*.m3u") as $filename) { ?>
					<li class="playlistitem"><?= basename($filename) ?></li>
					<ul>
					<?php foreach(file("$filename") as $line){
						$pos = strpos($line,"#");
						if ($pos === false){ ?>
							<li><?= $line ?></li>
							<?php } ?>
					<?php }?>
					</ul>
				<?php } ?>
				</ul>
			</ul>
		</div>

		<div>
			<a href="https://validator.w3.org/check/referer">
				<img src="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/images/w3c-html.png" alt="Valid HTML5" />
			</a>
			<a href="https://jigsaw.w3.org/css-validator/check/referer">
				<img src="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/images/w3c-css.png" alt="Valid CSS" />
			</a>
		</div>
	</body>
</html>
