<?php
class IndexPage extends Page{
public function getContent(){
	$articles=OneArticle::getAll();
	
	echo "<ul>";
	foreach ($articles as $article){
	    echo "<li><a href='article.php?file={$article->filename}'>{$article->title}</a></li>";
	}
	echo "</ul>";
}
}
?>