<?php
	

	class News 
	{
		public $content;

		public function NewNews ($news)
		{
			$this -> content = $news;
			return $news;
		}
	}
	$news = $_POST['newNews'];
	$todayNews = new News;
	$lastNews = $todayNews -> NewNews($_POST['newNews']);

	class Comments 
	{
		public $coment;

		public function NewCom ($com)
		{
			$this -> content = $com;
			return $com;
		}
	}
	$lastcom = $_POST['com'];
	$lastcom = new comments;

?>
<!Doctype html>

<html>
	<header>
		<title>News</title>
	</header>
	<body>
		<form action="news.php" method="POST">
			<label for="news"> Добавьте новость</label>
			<input type="text" name="newNews" Id="news">
			<input type="submit" value="Добавить">
		</form>

		<h1>Последние новости.</h1>

		<div><?= $lastNews;?></div>

		<? if (isset($_POST)) {
			echo "<form action='news.php' method='POST'>
						<label for='coment'> Добавьте комментарий</label>
						<input type='text' name='com' Id='coment'>
						<input type='submit' value='Добавить''>
				  </form>";
			echo  $lastcom -> NewCom($_POST['com']);
		}
		?>
	</body>
</html>