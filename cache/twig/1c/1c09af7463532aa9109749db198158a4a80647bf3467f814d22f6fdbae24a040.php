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

/* modular/home.html.twig */
class __TwigTemplate_42999aa7285771b6984742fc4e2e6699cc38f6432197a84bb1cec8de274a4168 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = [])
    {
        // line 2
        echo "<section class=\"intro text-center section-padding\" id=\"introduction\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <h1 class=\"arrow\">";
        // line 6
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
        echo "</h1>
      </div>
    </div>
    ";
        // line 9
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "

  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/home.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  43 => 6,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% block content %}
<section class=\"intro text-center section-padding\" id=\"introduction\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <h1 class=\"arrow\">{{ page.header.title }}</h1>
      </div>
    </div>
    {{page.content}}

  </div>
</section>
{% endblock %}", "modular/home.html.twig", "C:\\wamp\\www\\rao-co\\user\\themes\\halcyon\\templates\\modular\\home.html.twig");
    }
}
