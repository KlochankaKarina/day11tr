<?php
class ArticlePage extends Page{
	public function getContent(){
		$article=new OneArticle ($_GET['file']);
		echo "<h1>", $article->title, "</h1>";
		echo "<div>", $article->content, "</div>";
	}
}
?>