<?php
/**
 * Description of class
 *
 * @author jds
 */
class devenv {
    private $page;
    public $view;
    public $code;
    private $vars;

    function __construct($page='../portfolio/static.php')
    {
        $this->page = $page;
        $this->view = file_get_contents($page);
        $this->code = htmlentities($this->view);
        $this->getVars();
    }
    function __destruct() {}
    
    private function getVars() {
        $sections = explode('$',$this->view);
        $variables = array();
        foreach($sections as $section)
        {
            $length = strlen($section);
            $invalid = false;
            $i=0;
            $variable = '';

            while(!$invalid) {
                $char = substr($section, $i++, 1);
                if(ctype_alnum($char) || $char=='_')
                    $variable .= $char;
                else
                    $invalid=true;
            }
            if(!in_array($variable, $variables, true) && strlen($variable)>0)
                array_push($variables, $variable);
        }
        $this->vars = $variables;
    }
    private function getVals()
    {
        return true;
    }
    public function setBreak($vars)
    {
        var_dump($vars);
        die();
    }
}
?>
