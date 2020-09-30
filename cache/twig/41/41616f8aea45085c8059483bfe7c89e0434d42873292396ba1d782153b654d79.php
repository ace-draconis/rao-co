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

/* @Page:C:/wamp/www/rao-co/user/pages/01.home/_areas-of-practice */
class __TwigTemplate_55ce18ce68bfe4002215914677a67578a015370c1e7a78a9b05e09d2467067dc extends \Twig\Template
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
        echo "<section class=\"swag text-center\" style=\"background-image:url('/images/b/g/0/1/-/bg01-21e4fa53.jpeg')\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2\">
        <h1>Areas of Practice</h1>
        <a href=\"#practice\" class=\"down-arrow-btn\"><i class=\"fa fa-chevron-down\"></i></a>
      </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "@Page:C:/wamp/www/rao-co/user/pages/01.home/_areas-of-practice";
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
        return new Source("<section class=\"swag text-center\" style=\"background-image:url('/images/b/g/0/1/-/bg01-21e4fa53.jpeg')\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2\">
        <h1>Areas of Practice</h1>
        <a href=\"#practice\" class=\"down-arrow-btn\"><i class=\"fa fa-chevron-down\"></i></a>
      </div>
    </div>
  </div>
</section>
", "@Page:C:/wamp/www/rao-co/user/pages/01.home/_areas-of-practice", "");
    }
}
