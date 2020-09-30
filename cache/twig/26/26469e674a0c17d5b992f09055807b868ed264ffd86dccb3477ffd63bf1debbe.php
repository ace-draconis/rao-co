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

/* modular/portfolio.html.twig */
class __TwigTemplate_d9231573d60afa777163fa29dc89fd0f7400bddf01ddd1856a9c2ae81dccdb98 extends \Twig\Template
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
        echo "<section class=\"portfolio text-center section-padding\" id=\"portfolio\">
  <div class=\"container\">
    <div class=\"row\">
      ";
        // line 4
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
      <div id=\"portfolioSlider\">
        <ul class=\"slides\">
          ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "portfolio", []), 4));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 8
            echo "          <li>
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 10
                echo "            <div class=\"col-md-4 wp5  animated fadeInUp\">
               <div class=\"dark-box box-hover\">
                <img src=\"/images/a/i/j/i/a/aijia-ab62f362.jpeg\" alt=\"Team\" class=\"default\">
            
                <h1 class=\"arrow\">OOI AI JIA</h1>
                <h2>Associate</h2>
                <p>017-448 6582<br>
               aijia@sraoco.com</p>
               <div class=\"content\">
                               <p class=\"text-justify\">Ooi Ai Jia graduated with a Bachelor of Laws (Honours) from the University of Multimedia in the year of 2011.</p>
                                <p class=\"text-justify\">She was then admitted as an Advocate and Solicitor of the High Court of Malaya on 1.6.2012. She joined as a legal assistant with Messrs Gan Rao &amp; Chuah on 3.6.2012 and she specializes in civil litigation under the guidance of Mr. Sugandra Rao Naidu.</p>
                                
              </div>
                <div class=\"social\">
                  <ul class=\"social-buttons\">
                                      </ul>
                </div>
</div>
              </div>
            <div class=\"col-md-3 wp4 ";
                // line 29
                if ($this->getAttribute($context["item"], "delay", [])) {
                    echo "delay-";
                    echo $this->getAttribute($context["item"], "delay", []);
                    echo "s";
                }
                echo "\">
              <div class=\"overlay-effect effects clearfix\">
           
                <div class=\"img\">
                  <img src=\"";
                // line 33
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["item"], "img", []), [], "array"), "url", []);
                echo "\" alt=\"Portfolio Item\">
                  <div class=\"overlay\">
                    <a href=\"";
                // line 35
                echo $this->getAttribute($context["item"], "img_url", []);
                echo "\" class=\"expand\"><i class=\"fa fa-search\"></i><br>";
                echo $this->getAttribute($context["item"], "img_text", []);
                echo "</a>
                    <a class=\"close-overlay hidden\">x</a>
                  </div>
             
                </div>
              </div>
              <h2>";
                // line 41
                echo $this->getAttribute($context["item"], "title", []);
                echo "</h2>
               <ul class=\"item\">
                ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "content", []));
                foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
                    // line 44
                    echo "                <li>";
                    echo $context["list"];
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "                </ul>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "          </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </ul>
      </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 51,  126 => 49,  118 => 46,  109 => 44,  105 => 43,  100 => 41,  89 => 35,  84 => 33,  73 => 29,  52 => 10,  48 => 9,  45 => 8,  41 => 7,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"portfolio text-center section-padding\" id=\"portfolio\">
  <div class=\"container\">
    <div class=\"row\">
      {{ page.content }}
      <div id=\"portfolioSlider\">
        <ul class=\"slides\">
          {% for row in page.header.portfolio|batch(4) %}
          <li>
            {% for item in row %}
            <div class=\"col-md-4 wp5  animated fadeInUp\">
               <div class=\"dark-box box-hover\">
                <img src=\"/images/a/i/j/i/a/aijia-ab62f362.jpeg\" alt=\"Team\" class=\"default\">
            
                <h1 class=\"arrow\">OOI AI JIA</h1>
                <h2>Associate</h2>
                <p>017-448 6582<br>
               aijia@sraoco.com</p>
               <div class=\"content\">
                               <p class=\"text-justify\">Ooi Ai Jia graduated with a Bachelor of Laws (Honours) from the University of Multimedia in the year of 2011.</p>
                                <p class=\"text-justify\">She was then admitted as an Advocate and Solicitor of the High Court of Malaya on 1.6.2012. She joined as a legal assistant with Messrs Gan Rao &amp; Chuah on 3.6.2012 and she specializes in civil litigation under the guidance of Mr. Sugandra Rao Naidu.</p>
                                
              </div>
                <div class=\"social\">
                  <ul class=\"social-buttons\">
                                      </ul>
                </div>
</div>
              </div>
            <div class=\"col-md-3 wp4 {% if item.delay %}delay-{{ item.delay }}s{% endif %}\">
              <div class=\"overlay-effect effects clearfix\">
           
                <div class=\"img\">
                  <img src=\"{{ page.media[item.img].url }}\" alt=\"Portfolio Item\">
                  <div class=\"overlay\">
                    <a href=\"{{ item.img_url }}\" class=\"expand\"><i class=\"fa fa-search\"></i><br>{{ item.img_text }}</a>
                    <a class=\"close-overlay hidden\">x</a>
                  </div>
             
                </div>
              </div>
              <h2>{{ item.title }}</h2>
               <ul class=\"item\">
                {% for list in item.content %}
                <li>{{ list }}</li>
                {% endfor %}
                </ul>
            </div>
            {% endfor %}
          </li>
          {% endfor %}
        </ul>
      </div>
    </div>
  </div>
</section>
", "modular/portfolio.html.twig", "C:\\wamp\\www\\rao-co\\user\\themes\\halcyon\\templates\\modular\\portfolio.html.twig");
    }
}
