<?php
class OneArticle{
	public $title;
	public $content;
	public $filename;
	function __construct($filename){
		$this->filename=$filename;
		$content = file_get_contents('articles/'.$filename);
		$ex=explode ("%%%X%%%", $content);
		$this->title=$ex[0];
		$this->content=$ex[1];
	}
	static function getAll(){
		
		$files =scandir ('articles');
		foreach($files as $file){
			if($file!='.' && $file !='..'){
				$articles[] =new OneArticle ($file);
			}
		}
		return $articles;
	}
}
?>