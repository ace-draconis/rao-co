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

/* partials/header.html.twig */
class __TwigTemplate_38dfe6fc83fb5ab856ffb7194ccd8c53d5d54d9c98738eefdcbb3bf08d74a75a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'navigation' => [$this, 'block_navigation'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "
<header id=\"home\">
  ";
        // line 3
        $this->displayBlock('navigation', $context, $blocks);
        // line 6
        echo "  <section class=\"hero\" id=\"hero\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12 text-right navicon\">
          <a id=\"nav-toggle\" class=\"nav_slide_button\" href=\"#\"><span></span></a>
        </div>
      </div>
      <div class=\"row hero-content\">
        <div class=\"col-md-8 col-md-offset-2 text-center inner\">
          <h1 class=\"animated fadeInDown\">";
        // line 15
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "header", []), "title", []);
        echo "</h1>
          <p class=\"animated fadeInUp delay-05s\">";
        // line 16
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "header", []), "description", []);
        echo "</p>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-md-6 col-md-offset-3 text-center\">
          ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["site"] ?? null), "header", []), "buttons", []));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 22
            echo "          <a href=\"";
            echo $this->getAttribute($context["button"], "link", []);
            echo "\" class=\"";
            echo $this->getAttribute($context["button"], "class", []);
            echo "\">";
            echo $this->getAttribute($context["button"], "text", []);
            echo "</a>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </div>
      </div>
    </div>
  </section>
</header>
";
    }

    // line 3
    public function block_navigation($context, array $blocks = [])
    {
        // line 4
        echo "  ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/header.html.twig", 4)->display($context);
        // line 5
        echo "  ";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 5,  89 => 4,  86 => 3,  77 => 24,  64 => 22,  60 => 21,  52 => 16,  48 => 15,  37 => 6,  35 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
<header id=\"home\">
  {% block navigation %}
  {% include 'partials/navigation.html.twig' %}
  {% endblock %}
  <section class=\"hero\" id=\"hero\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12 text-right navicon\">
          <a id=\"nav-toggle\" class=\"nav_slide_button\" href=\"#\"><span></span></a>
        </div>
      </div>
      <div class=\"row hero-content\">
        <div class=\"col-md-8 col-md-offset-2 text-center inner\">
          <h1 class=\"animated fadeInDown\">{{ site.header.title }}</h1>
          <p class=\"animated fadeInUp delay-05s\">{{ site.header.description }}</p>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-md-6 col-md-offset-3 text-center\">
          {% for button in site.header.buttons %}
          <a href=\"{{ button.link }}\" class=\"{{ button.class }}\">{{ button.text }}</a>
          {% endfor %}
        </div>
      </div>
    </div>
  </section>
</header>
", "partials/header.html.twig", "C:\\wamp\\www\\rao-co\\user\\themes\\halcyon\\templates\\partials\\header.html.twig");
    }
}
