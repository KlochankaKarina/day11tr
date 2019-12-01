<?php
class Page{
	public function render(){
		$this->_renderHeader();
		$this->_renderContent();
		$this->_renderFooter();
	}
		protected function _renderHeader(){
			echo "<div>header</div>";
	}
	protected function _renderFooter(){
		echo "<footer>footer</footer>";
	}
	protected function _renderContent(){
		echo "<div>", $this->getContent(), "</div>";
	}
}
?>