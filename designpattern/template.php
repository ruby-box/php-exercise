<?php
// class TextPage extends AbstractPageTemplate {

// }

abstract class AbstractPageTemplate {
  protected function template() {
    $result = $this->header();
    $result .= $this->article();
    $result .= $this->footer();
    return $result;
  }
  public function render() {
    return $this->template();
  }
  
  protected abstract function header() ;
  protected abstract function article() ;
  protected abstract function footer() ;
}

class TextPage extends AbstractPageTemplate {
  protected function header() {
    return "PHP\n";
  }

  protected function article() {
    return "Hypertext preprocessor\n";
  }

  protected function footer() {
    return "website";
  }
}

class HtmlPage extends AbstractPageTemplate {
  protected function header() {
    return "<header>PHP</header>\n";
  }

  protected function article() {
    return "<article>Hypertext preprocessor</article>\n";
  }

  protected function footer() {
    return "<footer>website</footer>";
  }

  public function render() {
    $result = "<html>";
    $result .= $this->template();
    return $result."</html>";
  }
}
echo "<h1>TEXT</h1>";
$text = new TextPage();
echo $text->render();

echo "<h1>HTML</h1>";
$html = new HtmlPage();
echo $html->render();

?>