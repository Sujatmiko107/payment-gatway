<?php

/* 
{% filter markdown %}
Hello {{ c.first_name }} {{ c.last_name }},

This is a payment receipt for Invoice **{{ invoice.serie_nr }}** issued on
{{invoice.created_at|date('Y-m-d')}}

Total Paid: {{ invoice.total | money(invoice.currency) }}

You may review your invoice history at any time by logging in to your client area.
Note: This email serves as an official receipt for this payment.

Login to members area: {{'login'|link({'email' : c.email }) }}
View invoice: {{'invoice'|link}}/{{invoice.hash}}

{{ guest.system_company.signature }}

{% endfilter %}
 */
class __TwigTemplate_bac521b54edaef4ebd3e851cddb9393ef0a2b0c43001f96e7730087232ae25d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_be5f8373dbcfeffdc65666fc64d05353dd2fabf7c28290b8a0881553e1b248de' => array($this, 'block___internal_be5f8373dbcfeffdc65666fc64d05353dd2fabf7c28290b8a0881553e1b248de'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        echo twig_markdown_filter($this->env, (string) $this->renderBlock("__internal_be5f8373dbcfeffdc65666fc64d05353dd2fabf7c28290b8a0881553e1b248de", $context, $blocks));
    }

    public function block___internal_be5f8373dbcfeffdc65666fc64d05353dd2fabf7c28290b8a0881553e1b248de($context, array $blocks = array())
    {
        // line 3
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "first_name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "last_name"), "html", null, true);
        echo ",

This is a payment receipt for Invoice **";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "serie_nr"), "html", null, true);
        echo "** issued on
";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "created_at"), "Y-m-d"), "html", null, true);
        echo "

Total Paid: ";
        // line 8
        echo twig_money($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "total"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"));
        echo "

You may review your invoice history at any time by logging in to your client area.
Note: This email serves as an official receipt for this payment.

Login to members area: ";
        // line 13
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("login", array("email" => $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "email")));
        echo "
View invoice: ";
        // line 14
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("invoice");
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "hash"), "html", null, true);
        echo "

";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_company"), "signature"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "
{% filter markdown %}
Hello {{ c.first_name }} {{ c.last_name }},

This is a payment receipt for Invoice **{{ invoice.serie_nr }}** issued on
{{invoice.created_at|date('Y-m-d')}}

Total Paid: {{ invoice.total | money(invoice.currency) }}

You may review your invoice history at any time by logging in to your client area.
Note: This email serves as an official receipt for this payment.

Login to members area: {{'login'|link({'email' : c.email }) }}
View invoice: {{'invoice'|link}}/{{invoice.hash}}

{{ guest.system_company.signature }}

{% endfilter %}
";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 16,  76 => 14,  72 => 13,  64 => 8,  59 => 6,  55 => 5,  47 => 3,  41 => 2,  38 => 1,);
    }
}
