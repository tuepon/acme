<?php

/* C:\xampp\htdocs\acme/themes/acme/pages/blog.htm */
class __TwigTemplate_bc3dea38916d72090ac0e2c879dbfa411bc1cce9e985e7e1bb98b18650719667 extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme/themes/acme/pages/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'blogPosts'%}", "C:\\xampp\\htdocs\\acme/themes/acme/pages/blog.htm", "");
    }
}
