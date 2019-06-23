<?php

/* [{{ guest.system_company.name }}] {{ order.title }} */
class __TwigTemplate_86bae76df848375254eb517edd07e7427ad3592e826198b1c5b6acc802feb9d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "[";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_company"), "name"), "html", null, true);
        echo "] ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "[{{ guest.system_company.name }}] {{ order.title }}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,  168 => 39,  161 => 37,  157 => 36,  154 => 35,  148 => 34,  142 => 33,  138 => 32,  134 => 31,  127 => 26,  121 => 24,  117 => 23,  113 => 21,  111 => 20,  105 => 19,  101 => 18,  97 => 17,  93 => 16,  80 => 6,  73 => 4,  70 => 3,  64 => 2,  61 => 1,);
    }
}
