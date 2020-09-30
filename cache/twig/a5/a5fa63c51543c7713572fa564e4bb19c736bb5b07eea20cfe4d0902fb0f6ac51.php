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

/* @Page:/home/sylverwe/public_html/sraoco/user/pages/01.home */
class __TwigTemplate_d9f1cccd7c96f3cbf9aa6b6dddd7f73337765e1af366851ec7d082d902cb00a3 extends \Twig\Template
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
        echo "<h2>About Us</h2>
<p>&lt;div class=\"row\"&gt;<br />
&lt;div  class=\"col-md-4\"&gt;<br />
&lt;p&gt;</p>
    ";
        // line 5
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "20151026110308_43018.jpg", [], "array"), "html", [0 => "My title", 1 => "Some ALT text", 2 => "img-responsive"], "method");
        echo "
<pre><code>    &lt;/p&gt;</code></pre>
<p>&lt;/div&gt;<br />
&lt;div  class=\"col-md-8 text-justify\"&gt;<br />
&lt;p&gt;<strong>Messrs RAO &amp; CO</strong>is a boutique legal firm based in Melaka and it was formed by Sugandra Rao Naidu on 1.1.2014. Sugandra Rao Naidu was called to the Malaysian Bar on 7.2.2002 and has been active in practice since then. The Firm consist of highly skilled and experienced associates who routinely assist businesses and individuals in diverse litigation matters.&lt;br/&gt;&lt;br/&gt;<br />
We pride ourselves on understanding and anticipating our clients' needs, and on providing the highest quality legal services to protect our clients' interests. As a result, we have longstanding relationships with a wide array of clients. You can trust that, as a general practice firm, we will be able to provide representation on whatever legal matter you may face.&lt;/p&gt;<br />
&lt;/div&gt;<br />
&lt;/div&gt; </p>
<p>&lt;div class=\"row\"&gt;<br />
&lt;div  class=\"col-md-8\"&gt;<br />
&lt;p&gt;<br />
Our Firm is accustomed to the tight deadlines under which many businesses operate. We provide a team approach in multiple practice areas to ensure that clients have representation available at all times, whether a lawyer is needed to render advice, appear in court, or draft and file pleadings and motions on the client's behalf.&lt;br/&gt;&lt;br/&gt;</p>
<p>It is our goal to make each client a lifelong client. A lawyer directly handles each case with the help of the firm's dedicated and experienced staff. Our clients have come back to us time after time. We accomplish this by being highly responsive to each need and request, promptly returning phone calls and readily providing information.<br />
&lt;/p&gt;</p>
<p>&lt;/div&gt;<br />
&lt;div  class=\"col-md-4 text-justify\"&gt;<br />
&lt;p&gt;</p>
   ";
        // line 22
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "20151026110308_43018.jpg", [], "array"), "html", [0 => "My title", 1 => "Some ALT text", 2 => "img-responsive"], "method");
        echo "
<pre><code>&lt;/p&gt;</code></pre>
<p>&lt;/div&gt;<br />
&lt;/div&gt; </p>
<hr />
<div class=\"notices red\">
<p>If you see a <strong>404 Error</strong> when you click <code>Typography</code> in the menu, please refer to the <a href=\"http://learn.getgrav.org/troubleshooting/page-not-found\">troubleshooting guide</a>.</p>
</div>
<h3>Find out all about Grav</h3>
<ul>
<li>Learn about <strong>Grav</strong> by checking out our dedicated <a href=\"http://learn.getgrav.org\">Learn Grav</a> site.</li>
<li>Download <strong>plugins</strong>, <strong>themes</strong>, as well as other Grav <strong>skeleton</strong> packages from the <a href=\"http://getgrav.org/downloads\">Grav Downloads</a> page.</li>
<li>Check out our <a href=\"http://getgrav.org/blog\">Grav Development Blog</a> to find out the latest goings on in the Grav-verse.</li>
</ul>
<div class=\"notices blue\">
<p>If you want a more <strong>full-featured</strong> base install, you should check out <a href=\"http://getgrav.org/downloads\"><strong>Skeleton</strong> packages available in the downloads</a>.</p>
</div>
<h3>Edit this Page</h3>
<p>To edit this page, simply navigate to the folder you installed <strong>Grav</strong> into, and then browse to the <code>user/pages/01.home</code> folder and open the <code>default.md</code> file in your <a href=\"http://learn.getgrav.org/basics/requirements\">editor of choice</a>.  You will see the content of this page in <a href=\"http://learn.getgrav.org/content/markdown\">Markdown format</a>.</p>
<h3>Create a New Page</h3>
<p>Creating a new page is a simple affair in <strong>Grav</strong>.  Simply follow these simple steps:</p>
<ol>
<li>Navigate to your pages folder: <code>user/pages/</code> and create a new folder.  In this example, we will use <a href=\"http://learn.getgrav.org/content/content-pages\">explicit default ordering</a> and call the folder <code>02.mypage</code>.</li>
<li>
<p>Launch your text editor and paste in the following sample code:</p>
<pre><code>---
title: My New Page
---
# My New Page!

This is the body of **my new page** and I can easily use _Markdown_ syntax here.</code></pre>
</li>
<li>Save this file in the <code>user/pages/02.mypage/</code> folder as <code>default.md</code>. This will tell <strong>Grav</strong> to render the page using the <strong>default</strong> template.</li>
<li>That is it! Reload your browser to see your new page in the menu.</li>
</ol>
<div class=\"notices yellow\">
<p>NOTE: The page will automatically show up in the Menu after the \"Home\" menu item. If you wish to change the name that shows up in the Menu, simple add: <code>menu: My Page</code> between the dashes in the page content. This is called the YAML front matter, and it is where you configure page-specific options.</p>
</div>";
    }

    public function getTemplateName()
    {
        return "@Page:/home/sylverwe/public_html/sraoco/user/pages/01.home";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 22,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<h2>About Us</h2>
<p>&lt;div class=\"row\"&gt;<br />
&lt;div  class=\"col-md-4\"&gt;<br />
&lt;p&gt;</p>
    {{ page.media['20151026110308_43018.jpg'].html('My title', 'Some ALT text', 'img-responsive') }}
<pre><code>    &lt;/p&gt;</code></pre>
<p>&lt;/div&gt;<br />
&lt;div  class=\"col-md-8 text-justify\"&gt;<br />
&lt;p&gt;<strong>Messrs RAO &amp; CO</strong>is a boutique legal firm based in Melaka and it was formed by Sugandra Rao Naidu on 1.1.2014. Sugandra Rao Naidu was called to the Malaysian Bar on 7.2.2002 and has been active in practice since then. The Firm consist of highly skilled and experienced associates who routinely assist businesses and individuals in diverse litigation matters.&lt;br/&gt;&lt;br/&gt;<br />
We pride ourselves on understanding and anticipating our clients' needs, and on providing the highest quality legal services to protect our clients' interests. As a result, we have longstanding relationships with a wide array of clients. You can trust that, as a general practice firm, we will be able to provide representation on whatever legal matter you may face.&lt;/p&gt;<br />
&lt;/div&gt;<br />
&lt;/div&gt; </p>
<p>&lt;div class=\"row\"&gt;<br />
&lt;div  class=\"col-md-8\"&gt;<br />
&lt;p&gt;<br />
Our Firm is accustomed to the tight deadlines under which many businesses operate. We provide a team approach in multiple practice areas to ensure that clients have representation available at all times, whether a lawyer is needed to render advice, appear in court, or draft and file pleadings and motions on the client's behalf.&lt;br/&gt;&lt;br/&gt;</p>
<p>It is our goal to make each client a lifelong client. A lawyer directly handles each case with the help of the firm's dedicated and experienced staff. Our clients have come back to us time after time. We accomplish this by being highly responsive to each need and request, promptly returning phone calls and readily providing information.<br />
&lt;/p&gt;</p>
<p>&lt;/div&gt;<br />
&lt;div  class=\"col-md-4 text-justify\"&gt;<br />
&lt;p&gt;</p>
   {{ page.media['20151026110308_43018.jpg'].html('My title', 'Some ALT text', 'img-responsive') }}
<pre><code>&lt;/p&gt;</code></pre>
<p>&lt;/div&gt;<br />
&lt;/div&gt; </p>
<hr />
<div class=\"notices red\">
<p>If you see a <strong>404 Error</strong> when you click <code>Typography</code> in the menu, please refer to the <a href=\"http://learn.getgrav.org/troubleshooting/page-not-found\">troubleshooting guide</a>.</p>
</div>
<h3>Find out all about Grav</h3>
<ul>
<li>Learn about <strong>Grav</strong> by checking out our dedicated <a href=\"http://learn.getgrav.org\">Learn Grav</a> site.</li>
<li>Download <strong>plugins</strong>, <strong>themes</strong>, as well as other Grav <strong>skeleton</strong> packages from the <a href=\"http://getgrav.org/downloads\">Grav Downloads</a> page.</li>
<li>Check out our <a href=\"http://getgrav.org/blog\">Grav Development Blog</a> to find out the latest goings on in the Grav-verse.</li>
</ul>
<div class=\"notices blue\">
<p>If you want a more <strong>full-featured</strong> base install, you should check out <a href=\"http://getgrav.org/downloads\"><strong>Skeleton</strong> packages available in the downloads</a>.</p>
</div>
<h3>Edit this Page</h3>
<p>To edit this page, simply navigate to the folder you installed <strong>Grav</strong> into, and then browse to the <code>user/pages/01.home</code> folder and open the <code>default.md</code> file in your <a href=\"http://learn.getgrav.org/basics/requirements\">editor of choice</a>.  You will see the content of this page in <a href=\"http://learn.getgrav.org/content/markdown\">Markdown format</a>.</p>
<h3>Create a New Page</h3>
<p>Creating a new page is a simple affair in <strong>Grav</strong>.  Simply follow these simple steps:</p>
<ol>
<li>Navigate to your pages folder: <code>user/pages/</code> and create a new folder.  In this example, we will use <a href=\"http://learn.getgrav.org/content/content-pages\">explicit default ordering</a> and call the folder <code>02.mypage</code>.</li>
<li>
<p>Launch your text editor and paste in the following sample code:</p>
<pre><code>---
title: My New Page
---
# My New Page!

This is the body of **my new page** and I can easily use _Markdown_ syntax here.</code></pre>
</li>
<li>Save this file in the <code>user/pages/02.mypage/</code> folder as <code>default.md</code>. This will tell <strong>Grav</strong> to render the page using the <strong>default</strong> template.</li>
<li>That is it! Reload your browser to see your new page in the menu.</li>
</ol>
<div class=\"notices yellow\">
<p>NOTE: The page will automatically show up in the Menu after the \"Home\" menu item. If you wish to change the name that shows up in the Menu, simple add: <code>menu: My Page</code> between the dashes in the page content. This is called the YAML front matter, and it is where you configure page-specific options.</p>
</div>", "@Page:/home/sylverwe/public_html/sraoco/user/pages/01.home", "");
    }
}