<?php

/* _layout.html.twig */
class __TwigTemplate_a8ab1362f03b0b97ca0a426835334966875183398be68c87806c67d784b916ae extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
\t";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 14
        echo "</head>
<body>
\t<div id=\"nav\">
\t\t";
        // line 17
        $this->loadTemplate("@components/nav.html.twig", "_layout.html.twig", 17)->display($context);
        // line 18
        echo "\t</div>
\t<div id=\"content\">
\t\t";
        // line 20
        $this->displayBlock('content', $context, $blocks);
        // line 23
        echo "\t</div>
\t<div id=\"footer\">
\t\t";
        // line 25
        $this->displayBlock('footer', $context, $blocks);
        // line 30
        echo "\t</div>
\t";
        // line 31
        $this->displayBlock('script', $context, $blocks);
        // line 32
        echo "</body>
</html>";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\"
\t\t\t  content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
\t\t<link rel=\"stylesheet\" href=\"/resources/assets/css/index.css\">
\t\t<script src=\"https://cdn.jsdelivr.net/npm/vue\"></script>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.3.4/vue-resource.min.js\"></script>
\t\t<title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t";
    }

    public function block_title($context, array $blocks = array())
    {
        echo "Simple title";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "\t\t\t<h1>Content from _layout.html.twig</h1>
\t\t";
    }

    // line 25
    public function block_footer($context, array $blocks = array())
    {
        // line 26
        echo "\t\t\t<div class=\"footer\">
\t\t\t\t<p>Footer</p>
\t\t\t</div>
\t\t";
    }

    // line 31
    public function block_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 31,  98 => 26,  95 => 25,  90 => 21,  87 => 20,  76 => 12,  67 => 5,  64 => 4,  59 => 32,  57 => 31,  54 => 30,  52 => 25,  48 => 23,  46 => 20,  42 => 18,  40 => 17,  35 => 14,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en\">
<head>
\t{% block head %}
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\"
\t\t\t  content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
\t\t<link rel=\"stylesheet\" href=\"/resources/assets/css/index.css\">
\t\t<script src=\"https://cdn.jsdelivr.net/npm/vue\"></script>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.3.4/vue-resource.min.js\"></script>
\t\t<title>{% block title %}Simple title{% endblock %}</title>
\t{% endblock %}
</head>
<body>
\t<div id=\"nav\">
\t\t{% include('@components/nav.html.twig') %}
\t</div>
\t<div id=\"content\">
\t\t{% block content %}
\t\t\t<h1>Content from _layout.html.twig</h1>
\t\t{% endblock %}
\t</div>
\t<div id=\"footer\">
\t\t{% block footer %}
\t\t\t<div class=\"footer\">
\t\t\t\t<p>Footer</p>
\t\t\t</div>
\t\t{% endblock %}
\t</div>
\t{% block script %}{% endblock %}
</body>
</html>", "_layout.html.twig", "/srv/www/run.project.com/resources/views/_layout.html.twig");
    }
}
