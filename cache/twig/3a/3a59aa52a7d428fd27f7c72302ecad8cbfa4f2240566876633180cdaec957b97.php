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

/* modular/features.html.twig */
class __TwigTemplate_615253cbb870fe57d8b06d91d268cd593ea30cb82a8385585fb0d2aafb4bbdb4 extends \Twig\Template
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
        echo "<section class=\"features text-center section-padding\" id=\"features\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        ";
        // line 5
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
        <div class=\"features-wrapper\">
          ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "features", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "          <div class=\"col-md-4 feature-";
            echo $this->getAttribute($context["loop"], "index", []);
            echo " wp2 ";
            if ($this->getAttribute($context["item"], "delay", [])) {
                echo "delay-";
                echo $this->getAttribute($context["item"], "delay", []);
                echo "s";
            }
            echo "\">
            <div class=\"icon\">
              <i class=\"fa fa-";
            // line 10
            echo $this->getAttribute($context["item"], "icon", []);
            echo "\"></i>
            </div>
            <h2>";
            // line 12
            echo $this->getAttribute($context["item"], "title", []);
            echo "</h2>
            <p>";
            // line 13
            echo $this->getAttribute($context["item"], "content", []);
            echo "</p>
            ";
            // line 14
            if (($this->getAttribute($context["item"], "text", []) || $this->getAttribute($context["item"], "link", []))) {
                // line 15
                echo "            <a href=\"";
                echo $this->getAttribute($context["item"], "link", []);
                echo "\" class=\"read-more-btn\">";
                echo $this->getAttribute($context["item"], "text", []);
                echo " <i class=\"fa fa-chevron-circle-right\"></i></a>
            ";
            }
            // line 17
            echo "          </div>
          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </div>
      </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 19,  93 => 17,  85 => 15,  83 => 14,  79 => 13,  75 => 12,  70 => 10,  58 => 8,  41 => 7,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"features text-center section-padding\" id=\"features\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        {{ page.content }}
        <div class=\"features-wrapper\">
          {% for item in page.header.features %}
          <div class=\"col-md-4 feature-{{ loop.index }} wp2 {% if item.delay %}delay-{{ item.delay }}s{% endif %}\">
            <div class=\"icon\">
              <i class=\"fa fa-{{ item.icon }}\"></i>
            </div>
            <h2>{{ item.title }}</h2>
            <p>{{ item.content }}</p>
            {% if item.text or item.link %}
            <a href=\"{{ item.link }}\" class=\"read-more-btn\">{{ item.text }} <i class=\"fa fa-chevron-circle-right\"></i></a>
            {% endif %}
          </div>
          {% endfor %}
        </div>
      </div>
    </div>
  </div>
</section>
", "modular/features.html.twig", "C:\\wamp\\www\\rao-co\\user\\themes\\halcyon\\templates\\modular\\features.html.twig");
    }
}
