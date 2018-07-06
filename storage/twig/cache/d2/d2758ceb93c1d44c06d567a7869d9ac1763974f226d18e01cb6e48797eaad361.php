<?php

/* @components/nav.html.twig */
class __TwigTemplate_4438129d69b4316b62f3761b2bc1c902fb94be0c60644250c0abf343ff1455c2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<ul>
    <li><a href=\"/\">example</a></li>
    <li><a href=\"example2\">example2</a></li>
    <li><a href=\"example3\">example3</a></li>
</ul>";
    }

    public function getTemplateName()
    {
        return "@components/nav.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul>
    <li><a href=\"/\">example</a></li>
    <li><a href=\"example2\">example2</a></li>
    <li><a href=\"example3\">example3</a></li>
</ul>", "@components/nav.html.twig", "/srv/www/run.project.com/resources/views/components/nav.html.twig");
    }
}
