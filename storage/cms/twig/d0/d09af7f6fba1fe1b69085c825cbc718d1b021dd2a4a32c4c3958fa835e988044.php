<?php

/* C:\xampp\htdocs\acme/themes/acme/pages/about.htm */
class __TwigTemplate_ac7d10d3e9ead77b7f7747dec932426b4c7a462e96027c57f9fefb7df23ce7b8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>About us</h1>
<p>This is the about page</p>
<hr>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme/themes/acme/pages/about.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>About us</h1>
<p>This is the about page</p>
<hr>", "C:\\xampp\\htdocs\\acme/themes/acme/pages/about.htm", "");
    }
}
