<?php

/* C:\xampp\htdocs\acme/themes/acme/partials/site/footer.htm */
class __TwigTemplate_c384140813dcd86e66edb1e642caf41bd673f2f006642537c8bcf243f44ebf3a extends Twig_Template
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
        echo "<p class=\"text-center\">Copyright &copy; 2018 Acme Services</p>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme/themes/acme/partials/site/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p class=\"text-center\">Copyright &copy; 2018 Acme Services</p>", "C:\\xampp\\htdocs\\acme/themes/acme/partials/site/footer.htm", "");
    }
}
