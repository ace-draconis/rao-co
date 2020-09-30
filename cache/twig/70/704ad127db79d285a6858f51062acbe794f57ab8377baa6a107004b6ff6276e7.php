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

/* partials/footer.html.twig */
class __TwigTemplate_b098cc803465e20cb2f7ed0588fca5090c7949322798b0e4df697a25edf81a67 extends \Twig\Template
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
        echo "<footer>
  <div class=\"container\">
    <div class=\"row\">
    ";
        // line 4
        if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "links", [])) {
            // line 5
            echo "    <div class=\"col-md-6\">
      <ul class=\"legals\">
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "links", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 8
                echo "        <li><a href=\"";
                echo $this->getAttribute($context["item"], "url", []);
                echo "\">";
                echo $this->getAttribute($context["item"], "text", []);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "      </ul>
    </div>
    ";
        }
        // line 13
        echo "    <div class=\"col-md-6 credit\">
      <p>
      Copyright © 2014 - 2020 by Rao & Co | Legal Firm in Melaka | All rights reserved
      </p>
    </div>
  </div>
</div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 13,  56 => 10,  45 => 8,  41 => 7,  37 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<footer>
  <div class=\"container\">
    <div class=\"row\">
    {% if site.footer.links %}
    <div class=\"col-md-6\">
      <ul class=\"legals\">
        {% for item in site.footer.links %}
        <li><a href=\"{{ item.url }}\">{{ item.text }}</a></li>
        {% endfor %}
      </ul>
    </div>
    {% endif %}
    <div class=\"col-md-6 credit\">
      <p>
      Copyright © 2014 - 2020 by Rao & Co | Legal Firm in Melaka | All rights reserved
      </p>
    </div>
  </div>
</div>
</footer>
", "partials/footer.html.twig", "C:\\wamp\\www\\rao-co\\user\\themes\\halcyon\\templates\\partials\\footer.html.twig");
    }
}
