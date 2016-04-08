<?php

class Linkify {
    
    public $link;
    public $action;
    public $variables;
    
    public function __construct($link, $action, $variables) {
        $this->setLink($link);
        $this->setAction($action);
        $this->setVariables($variables);
    }
    
    public function create() {
        $this->createForm();
        $this->createLink();
    }
    
    public function createForm() {
        echo "<form name='$this->action' method='post'>";
        echo "<input type='hidden' name='action' value='$this->action'>";
        if ($this->variables != null) {
            foreach ($this->variables as $key => $value) {
                echo "<input type='hidden' name='$key' value='$value'>";
            }
        }
        echo "</form>";
    }
    
    public function createLink() {
        echo "<a style='cursor: pointer; cursor: hand; ' onclick=\"document.forms['";
        echo $this->action;
        echo "'].submit();\">$this->link</a>";
    }
    
    public function setLink($link) {
        $this->link = $link;
    }
    
    public function getLink() {
        return $this->link;
    }
    
    public function setAction($action) {
        $this->action = $action;
    }
    
    public function getAction() {
        return $this->action;
    }
    
    public function setVariables($variables) {
        $this->variables = $variables;
    }
    
    public function getVariables() {
        return $this->variables;
    }
}

