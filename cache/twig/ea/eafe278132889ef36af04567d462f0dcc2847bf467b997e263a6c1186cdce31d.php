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

/* @Page:C:/wamp/www/rao-co/user/pages/01.home/_our-team */
class __TwigTemplate_e37d7be0f3f13c2d0659a0b9be8f4160e486ff3ff42febc181288050ce72abd1 extends \Twig\Template
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
        echo "<section class=\"swag text-center\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2\">
        <h1>Our Team</h1>
        <a href=\"#team\" class=\"down-arrow-btn\"><i class=\"fa fa-chevron-down\"></i></a>
      </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "@Page:C:/wamp/www/rao-co/user/pages/01.home/_our-team";
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
        return new Source("<section class=\"swag text-center\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2\">
        <h1>Our Team</h1>
        <a href=\"#team\" class=\"down-arrow-btn\"><i class=\"fa fa-chevron-down\"></i></a>
      </div>
    </div>
  </div>
</section>
", "@Page:C:/wamp/www/rao-co/user/pages/01.home/_our-team", "");
    }
}
