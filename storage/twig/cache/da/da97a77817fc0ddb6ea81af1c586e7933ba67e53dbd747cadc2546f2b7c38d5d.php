<?php

/* @pages/example.html.twig */
class __TwigTemplate_b75cc1fb25eea226936947c6e956847015db879e4f5fa75ddfdae901671beb86 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_layout.html.twig", "@pages/example.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Example | run.project";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div id=\"example\"><br>
        <input type=\"text\" placeholder=\"name\" v-model=\"form.name\"><br><br>
        <input type=\"text\" placeholder=\"email\" v-model=\"form.email\"><br><br>
        <textarea cols=\"30\" rows=\"10\" placeholder=\"message\" v-model=\"form.message\"></textarea><br><br>
        <input type=\"file\" @change=\"onFileChanged\" accept=\"image/*\"><br><br>
        <button @click=\"send\">Send</button>

        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
";
    }

    // line 17
    public function block_script($context, array $blocks = array())
    {
        echo "<script src=\"/resources/assets/js/example.js\"></script>";
    }

    public function getTemplateName()
    {
        return "@pages/example.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 17,  43 => 6,  40 => 5,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '_layout.html.twig' %}

{% block title %}Example | run.project{% endblock %}

{% block content %}
    <div id=\"example\"><br>
        <input type=\"text\" placeholder=\"name\" v-model=\"form.name\"><br><br>
        <input type=\"text\" placeholder=\"email\" v-model=\"form.email\"><br><br>
        <textarea cols=\"30\" rows=\"10\" placeholder=\"message\" v-model=\"form.message\"></textarea><br><br>
        <input type=\"file\" @change=\"onFileChanged\" accept=\"image/*\"><br><br>
        <button @click=\"send\">Send</button>

        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
{% endblock %}

{% block script %}<script src=\"/resources/assets/js/example.js\"></script>{% endblock %}", "@pages/example.html.twig", "/srv/www/run.project.com/resources/views/pages/example.html.twig");
    }
}
