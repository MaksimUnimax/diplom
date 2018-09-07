<?php 

class Filtr
{	
	public $isbn;
	public $name;
	public $author;
	public $dbh;

	function getIsbn($dbh,$isbn)
	{	
		$this -> isbn = $isbn;
		$this -> dbh = $dbh;
		$qwerIsbn = $dbh->prepare("SELECT `id`, `name`, `author`, `year`, `isbn`, `genre` FROM `books` WHERE `isbn` LIKE '$isbn'");
		$qwerIsbn->execute();
		$resultIsbn = $qwerIsbn->fetchAll(PDO::FETCH_ASSOC);
		return $resultIsbn;
	}

	function getName($dbh,$name)
	{	
		$qwerName = $dbh->prepare("SELECT `id`, `name`, `author`, `year`, `isbn`, `genre` FROM `books` WHERE `name` LIKE '$name'");
		$qwerName->execute();
		$resultName = $qwerName->fetchAll(PDO::FETCH_ASSOC);
		return $resultName;
	}

	function getAuthor($dbh,$author)
	{	
		$qwerAuthor = $dbh->prepare("SELECT `id`, `author`, `year`, `isbn`, `genre` FROM `books` WHERE `author` LIKE '$author'");
		$qwerAuthor->execute();
		$resultAuthor = $qwerAuthor->fetchAll(PDO::FETCH_ASSOC);
		return $resultAuthor;
	}

}

?>