class MiClase {
const constante = 'valor constante'; function mostrarConstante() {
echo self::constante . "\n"; }
}

abstract class ClaseAbstracta {
abstract protected function tomarValor(); abstract protected function prefixValor($prefix);
  public function printOut() {
  print $this->tomarValor() . "<br>";
  }
}

class ClaseConcreta1 extends ClaseAbstracta { 
  protected function tomarValor() {
    return "ClaseConcreta1";
  }
  public function prefixValor($prefix) { 
    return "{$prefix}ClaseConcreta1";
  } 
}
class ClaseConcreta2 extends ClaseAbstracta { 
  protected function tomarValor() {
    return "ClaseConcreta2";
  }
  public function prefixValor($prefix) { 
    return "{$prefix}ClaseConcreta2";
  }
}

interface iTemplate {
  public function ponerVariable($nombre, $var); 
  public function verHtml($template);
}

class Template implements iTemplate {
  private $vars = array();
  public function ponerVariable($nombre, $var) { 
    $this->vars[$nombre] = $var;
  }
  public function verHtml($template) { 
    foreach($this->vars as $nombre => $value) {
     $template = str_replace('{' . $nombre .'}', $value, $template); 
    }
  return $template; 
  }
}

class SubObject
{
  static $instances = 0;
  public $instance;

  public function __construct() {
    $this->instance = ++self::$instances; 
  }

  public function __clone() {
    $this->instance = ++self::$instances; 
  }
}