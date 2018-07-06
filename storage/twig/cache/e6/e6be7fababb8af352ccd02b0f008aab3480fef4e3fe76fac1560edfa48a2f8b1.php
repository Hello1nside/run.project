<?php

/* @components/mail.html.twig */
class __TwigTemplate_6f20c37994302e4434461f75bc955993aec70b47d067d35e92ddd5bae3a934b1 extends Twig_Template
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
        echo "<form enctype=\"multipart/form-data\" method=\"post\" id=\"form\">
    <p>Имя</p>
    <input placeholder=\"name\" name=\"name\" type=\"text\" >
    <p>Телефон</p>
    <input placeholder=\"number\" name=\"number\" type=\"text\" >
    <p>Email</p>
    <input placeholder=\"example@mail.com\" name=\"email\" type=\"text\" >
    <p>Прикрепить файлы</p>
    <input type=\"file\" name=\"userfile[]\" multiple id=\"userfile\" class=\"w100\" accept=\"image/*\" >
    <p><input value=\"Отправить\" type=\"submit\"></p>
</form>";
    }

    public function getTemplateName()
    {
        return "@components/mail.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form enctype=\"multipart/form-data\" method=\"post\" id=\"form\">
    <p>Имя</p>
    <input placeholder=\"name\" name=\"name\" type=\"text\" >
    <p>Телефон</p>
    <input placeholder=\"number\" name=\"number\" type=\"text\" >
    <p>Email</p>
    <input placeholder=\"example@mail.com\" name=\"email\" type=\"text\" >
    <p>Прикрепить файлы</p>
    <input type=\"file\" name=\"userfile[]\" multiple id=\"userfile\" class=\"w100\" accept=\"image/*\" >
    <p><input value=\"Отправить\" type=\"submit\"></p>
</form>", "@components/mail.html.twig", "/srv/www/run.project.com/resources/views/components/mail.html.twig");
    }
}
