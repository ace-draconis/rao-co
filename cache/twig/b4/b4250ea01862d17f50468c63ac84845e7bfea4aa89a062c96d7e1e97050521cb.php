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

/* @Page:C:/wamp/www/rao-co/user/pages/01.home/_about-us */
class __TwigTemplate_ead308f92dcb30027344c41b45b1006c1e34c91c5acddea063ccc64064d8ec4d extends \Twig\Template
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
      <div class=\"col-md-12\">
        <h1 class=\"arrow\">About Us</h1>
      </div>
    </div>
    <div class=\"row\">
    <div class=\"col-md-4\">
        <div class=\"fancy-border\">

        </div>
    </div>
    <div class=\"col-md-8 text-justify\">
        <p>
            Messrs RAO &amp; CO is a boutique legal firm based in Melaka and it was formed by Sugandra Rao Naidu on
            1.1.2014. Sugandra Rao Naidu was called to the Malaysian Bar on 7.2.2002 and has been active in practice
            since then. The Firm consist of highly skilled and experienced associates who routinely assist businesses
            and individuals in diverse litigation matters.
            <br><br>
            We pride ourselves on understanding and anticipating our clients' needs, and on providing the highest
            quality legal services to protect our clients' interests. As a result, we have longstanding relationships
            with a wide array of clients. You can trust that, as a general practice firm, we will be able to provide
            representation on whatever legal matter you may face.
        </p>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-md-8 text-justify\">
        <p>Our Firm is accustomed to the tight deadlines under which many businesses operate. We provide a team approach
            in multiple practice areas to ensure that clients have representation available at all times, whether a
            lawyer is needed to render advice, appear in court, or draft and file pleadings and motions on the client's
            behalf.
            <br><br>
            It is our goal to make each client a lifelong client. A lawyer directly handles each case with the help of
            the firm's dedicated and experienced staff. Our clients have come back to us time after time. We accomplish
            this by being highly responsive to each need and request, promptly returning phone calls and readily
            providing information.</p>
    </div>
    <div class=\"col-md-4\">
        <div class=\"fancy-border\">
            ";
        // line 42
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "01,jpg", [], "array"), "html", [0 => "My title", 1 => "Some ALT text", 2 => "img-responsive"], "method");
        echo "

        </div>
    </div>
</div>

  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "@Page:C:/wamp/www/rao-co/user/pages/01.home/_about-us";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 42,  30 => 1,);
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
      <div class=\"col-md-12\">
        <h1 class=\"arrow\">About Us</h1>
      </div>
    </div>
    <div class=\"row\">
    <div class=\"col-md-4\">
        <div class=\"fancy-border\">

        </div>
    </div>
    <div class=\"col-md-8 text-justify\">
        <p>
            Messrs RAO &amp; CO is a boutique legal firm based in Melaka and it was formed by Sugandra Rao Naidu on
            1.1.2014. Sugandra Rao Naidu was called to the Malaysian Bar on 7.2.2002 and has been active in practice
            since then. The Firm consist of highly skilled and experienced associates who routinely assist businesses
            and individuals in diverse litigation matters.
            <br><br>
            We pride ourselves on understanding and anticipating our clients' needs, and on providing the highest
            quality legal services to protect our clients' interests. As a result, we have longstanding relationships
            with a wide array of clients. You can trust that, as a general practice firm, we will be able to provide
            representation on whatever legal matter you may face.
        </p>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-md-8 text-justify\">
        <p>Our Firm is accustomed to the tight deadlines under which many businesses operate. We provide a team approach
            in multiple practice areas to ensure that clients have representation available at all times, whether a
            lawyer is needed to render advice, appear in court, or draft and file pleadings and motions on the client's
            behalf.
            <br><br>
            It is our goal to make each client a lifelong client. A lawyer directly handles each case with the help of
            the firm's dedicated and experienced staff. Our clients have come back to us time after time. We accomplish
            this by being highly responsive to each need and request, promptly returning phone calls and readily
            providing information.</p>
    </div>
    <div class=\"col-md-4\">
        <div class=\"fancy-border\">
            {{ page.media['01,jpg'].html('My title', 'Some ALT text', 'img-responsive') }}

        </div>
    </div>
</div>

  </div>
</section>
", "@Page:C:/wamp/www/rao-co/user/pages/01.home/_about-us", "");
    }
}
