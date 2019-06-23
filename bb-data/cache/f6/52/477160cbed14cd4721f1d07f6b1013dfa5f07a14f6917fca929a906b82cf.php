<?php

/* [{{ guest.system_company.name }}] Payment Received */
class __TwigTemplate_f652477160cbed14cd4721f1d07f6b1013dfa5f07a14f6917fca929a906b82cf extends Twig_Template
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
        echo "] Payment Received";
    }

    public function getTemplateName()
    {
        return "[{{ guest.system_company.name }}] Payment Received";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,  83 => 16,  76 => 14,  72 => 13,  64 => 8,  59 => 6,  55 => 5,  47 => 3,  41 => 2,  38 => 1,);
    }
}
