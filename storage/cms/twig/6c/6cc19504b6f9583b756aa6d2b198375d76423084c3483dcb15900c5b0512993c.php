<?php

/* C:\xampp\htdocs\acme/themes/responsiv-clean/pages/contact.htm */
class __TwigTemplate_feb299b7d21be5560121f4ffb0e0a4bf8391f298faa65b16211ef75230520c81 extends Twig_Template
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
        echo "<h1>Contact Us</h1>
<form>
  <div class=\"form-group\">
    <label>Name</label>
    <input type=\"text\" class=\"form-control\">
  </div>
  <div class=\"form-group\">
    <label>Email</label>
    <input type=\"text\" class=\"form-control\">
  </div>
  <div class=\"form-group\">
    <label>Message</label>
    <textarea class=\"form-control\"></textarea>
  </div>
  <button type=\"submit\">Submit</button>
</form>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme/themes/responsiv-clean/pages/contact.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Contact Us</h1>
<form>
  <div class=\"form-group\">
    <label>Name</label>
    <input type=\"text\" class=\"form-control\">
  </div>
  <div class=\"form-group\">
    <label>Email</label>
    <input type=\"text\" class=\"form-control\">
  </div>
  <div class=\"form-group\">
    <label>Message</label>
    <textarea class=\"form-control\"></textarea>
  </div>
  <button type=\"submit\">Submit</button>
</form>", "C:\\xampp\\htdocs\\acme/themes/responsiv-clean/pages/contact.htm", "");
    }
}
