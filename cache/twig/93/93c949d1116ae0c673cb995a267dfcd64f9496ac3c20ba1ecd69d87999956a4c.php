<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Page:C:/wamp/www/rao-co/user/pages/01.home/_contact */
class __TwigTemplate_1f809d6229b688d52018693f492cbabb8b0f0d2ade55a20b6b9dc863b4026dc5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<section class=\"intro text-center section-padding\" id=\"introduction\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12   wp1\">
        <h1 class=\"arrow\"></h1>
        <p>GRAV.FRONTMATTER_ERROR_PAGE</p>
      </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "@Page:C:/wamp/www/rao-co/user/pages/01.home/_contact";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"intro text-center section-padding\" id=\"introduction\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12   wp1\">
        <h1 class=\"arrow\"></h1>
        <p>GRAV.FRONTMATTER_ERROR_PAGE</p>
      </div>
    </div>
  </div>
</section>
", "@Page:C:/wamp/www/rao-co/user/pages/01.home/_contact", "");
    }
}
