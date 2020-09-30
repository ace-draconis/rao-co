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

/* modular/team.html.twig */
class __TwigTemplate_fad212ea4eb30f6cf237c879aab663ef0de583d7d1e56df4f6d9233c9858bad1 extends \Twig\Template
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
        echo "<section class=\" dark-bg team text-center section-padding\" id=\"team\">
  <div class=\"container\">
  <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h1 class=\"arrow\"> Our Team</h1>
            </div>
        </div>
    <div class=\"row\">
      <div class=\"col-md-12\">
        ";
        // line 10
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
      </div>
    </div>
    <div class=\"light-box box-hover team-wrapper\">
    <div class=\"row\">
      <div class=\"col-md-4\">
        <img src=\"";
        // line 16
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "img", []), [], "array"), "url", []);
        echo "\" alt=\"Team\" class=\"default\">
            
                <h1 class=\"arrow\">";
        // line 18
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
        echo "</h1>
                <h2>";
        // line 19
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "sub_title", []);
        echo "</h2>
                <p>";
        // line 20
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "phone", []);
        echo "<br>
               ";
        // line 21
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "email", []);
        echo "</p>
      </div>
      <div class=\"col-md-8\">
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "content", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 25
            echo "                <p class=\"text-justify\">";
            echo $context["item"];
            echo "</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "      </div>
      </div>
    </div>
    <div class=\"row\">
          <ul class=\"slides\">
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "team", []), 4));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 33
            echo "            <li>
              ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 35
                echo "              <div class=\"col-md-4 wp5 ";
                if ($this->getAttribute($context["item"], "delay", [])) {
                    echo "delay-";
                    echo $this->getAttribute($context["item"], "delay", []);
                    echo "s";
                }
                echo "\">
               <div class=\"light-box box-hover\">
                <img src=\"";
                // line 37
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["item"], "img", []), [], "array"), "url", []);
                echo "\" alt=\"Team\" class=\"default\">
            
                <h1 class=\"arrow\">";
                // line 39
                echo $this->getAttribute($context["item"], "title", []);
                echo "</h1>
                <h2>";
                // line 40
                echo $this->getAttribute($context["item"], "sub_title", []);
                echo "</h2>
                <p>";
                // line 41
                echo $this->getAttribute($context["item"], "phone", []);
                echo "<br>
               ";
                // line 42
                echo $this->getAttribute($context["item"], "email", []);
                echo "</p>
               <div class=\"content\">
               ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "content", []));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 45
                    echo "                <p class=\"text-justify\">";
                    echo $context["item"];
                    echo "</p>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "                
              </div>
                <div class=\"social\">
                  <ul class=\"social-buttons\">
                    ";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "social", []));
                foreach ($context['_seq'] as $context["_key"] => $context["icon"]) {
                    // line 52
                    echo "                    <li><a href=\"";
                    echo $this->getAttribute($context["icon"], "url", []);
                    echo "\" class=\"social-btn\"><i class=\"fa fa-";
                    echo $this->getAttribute($context["icon"], "icon", []);
                    echo "\"></i></a></li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['icon'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "                  </ul>
                </div>
</div>
              </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "          </ul>
        </div>
 
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 61,  180 => 59,  170 => 54,  159 => 52,  155 => 51,  149 => 47,  140 => 45,  136 => 44,  131 => 42,  127 => 41,  123 => 40,  119 => 39,  114 => 37,  104 => 35,  100 => 34,  97 => 33,  93 => 32,  86 => 27,  77 => 25,  73 => 24,  67 => 21,  63 => 20,  59 => 19,  55 => 18,  50 => 16,  41 => 10,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\" dark-bg team text-center section-padding\" id=\"team\">
  <div class=\"container\">
  <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h1 class=\"arrow\"> Our Team</h1>
            </div>
        </div>
    <div class=\"row\">
      <div class=\"col-md-12\">
        {{ page.content }}
      </div>
    </div>
    <div class=\"light-box box-hover team-wrapper\">
    <div class=\"row\">
      <div class=\"col-md-4\">
        <img src=\"{{ page.media[page.header.img].url }}\" alt=\"Team\" class=\"default\">
            
                <h1 class=\"arrow\">{{ page.header.title }}</h1>
                <h2>{{ page.header.sub_title }}</h2>
                <p>{{ page.header.phone }}<br>
               {{ page.header.email }}</p>
      </div>
      <div class=\"col-md-8\">
        {% for item in page.header.content %}
                <p class=\"text-justify\">{{ item }}</p>
                {% endfor %}
      </div>
      </div>
    </div>
    <div class=\"row\">
          <ul class=\"slides\">
            {% for row in page.header.team|batch(4) %}
            <li>
              {% for item in row %}
              <div class=\"col-md-4 wp5 {% if item.delay %}delay-{{ item.delay }}s{% endif %}\">
               <div class=\"light-box box-hover\">
                <img src=\"{{ page.media[item.img].url }}\" alt=\"Team\" class=\"default\">
            
                <h1 class=\"arrow\">{{ item.title }}</h1>
                <h2>{{ item.sub_title }}</h2>
                <p>{{ item.phone }}<br>
               {{ item.email }}</p>
               <div class=\"content\">
               {% for item in item.content %}
                <p class=\"text-justify\">{{ item }}</p>
                {% endfor %}
                
              </div>
                <div class=\"social\">
                  <ul class=\"social-buttons\">
                    {% for icon in item.social  %}
                    <li><a href=\"{{ icon.url }}\" class=\"social-btn\"><i class=\"fa fa-{{ icon.icon }}\"></i></a></li>
                    {% endfor %}
                  </ul>
                </div>
</div>
              </div>
              {% endfor %}
            </li>
            {% endfor %}
          </ul>
        </div>
 
  </div>
</section>
", "modular/team.html.twig", "C:\\wamp\\www\\rao-co\\user\\themes\\halcyon\\templates\\modular\\team.html.twig");
    }
}
