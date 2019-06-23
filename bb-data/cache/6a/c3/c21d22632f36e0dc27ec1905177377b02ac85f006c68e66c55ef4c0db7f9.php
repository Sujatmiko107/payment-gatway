<?php

/* 
{% filter markdown %}

Hello {{ c.first_name }} {{ c.last_name }},

This message is to confirm that your **{{ order.title }}** has been successful. 

Please keep in mind that your domain name will not be visible  on the internet 
instantly. This process is called propagation and can take up to 48 hours. 
Your website and  email will not function until the domain has propagated.


**Domain details:**


Domain: {{ service.domain }}     
Registration date: {{order.created_at|bb_date}}
Registration period: {{service.period}} Year(s)   
{% if order.expires_at %}Expires on: {{ order.expires_at|bb_date }} {% endif %}
{% if order.period %}
Billing period:

{{ order.total | money(order.currency) }}
{{ order.period | period_title }}

{% endif %}       


**Domain nameservers**

Nameserver 1: {{ service.ns1 }}   
Nameserver 2: {{ service.ns2 }}   
{% if  service.server.ns3 %}Nameserver 3: {{ service.ns3 }}   {% endif %}
{% if  service.server.ns4 %}Nameserver 4: {{ service.ns4 }}   {% endif %}

Login to members area: {{'login'|link({'email' : c.email }) }}
Manage order: {{ 'order/service/manage'|link }}/{{ order.id }}

{{ guest.system_company.signature }}

{% endfilter %}
 */
class __TwigTemplate_6ac3c21d22632f36e0dc27ec1905177377b02ac85f006c68e66c55ef4c0db7f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_8911a2139b4e9d8c25d2ca335710b8fa21351091b1cbc398078060b422703245' => array($this, 'block___internal_8911a2139b4e9d8c25d2ca335710b8fa21351091b1cbc398078060b422703245'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        echo twig_markdown_filter($this->env, (string) $this->renderBlock("__internal_8911a2139b4e9d8c25d2ca335710b8fa21351091b1cbc398078060b422703245", $context, $blocks));
    }

    public function block___internal_8911a2139b4e9d8c25d2ca335710b8fa21351091b1cbc398078060b422703245($context, array $blocks = array())
    {
        // line 3
        echo "
Hello ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "first_name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "last_name"), "html", null, true);
        echo ",

This message is to confirm that your **";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title"), "html", null, true);
        echo "** has been successful. 

Please keep in mind that your domain name will not be visible  on the internet 
instantly. This process is called propagation and can take up to 48 hours. 
Your website and  email will not function until the domain has propagated.


**Domain details:**


Domain: ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "domain"), "html", null, true);
        echo "     
Registration date: ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "created_at")), "html", null, true);
        echo "
Registration period: ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "period"), "html", null, true);
        echo " Year(s)   
";
        // line 19
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "expires_at")) {
            echo "Expires on: ";
            echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "expires_at")), "html", null, true);
            echo " ";
        }
        // line 20
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "period")) {
            // line 21
            echo "Billing period:

";
            // line 23
            echo twig_money($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "total"), $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "currency"));
            echo "
";
            // line 24
            echo twig_period_title($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "period"));
            echo "

";
        }
        // line 26
        echo "       


**Domain nameservers**

Nameserver 1: ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "ns1"), "html", null, true);
        echo "   
Nameserver 2: ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "ns2"), "html", null, true);
        echo "   
";
        // line 33
        if ($this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "server"), "ns3")) {
            echo "Nameserver 3: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "ns3"), "html", null, true);
            echo "   ";
        }
        // line 34
        if ($this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "server"), "ns4")) {
            echo "Nameserver 4: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "ns4"), "html", null, true);
            echo "   ";
        }
        // line 35
        echo "
Login to members area: ";
        // line 36
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("login", array("email" => $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "email")));
        echo "
Manage order: ";
        // line 37
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("order/service/manage");
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
        echo "

";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_company"), "signature"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "
{% filter markdown %}

Hello {{ c.first_name }} {{ c.last_name }},

This message is to confirm that your **{{ order.title }}** has been successful. 

Please keep in mind that your domain name will not be visible  on the internet 
instantly. This process is called propagation and can take up to 48 hours. 
Your website and  email will not function until the domain has propagated.


**Domain details:**


Domain: {{ service.domain }}     
Registration date: {{order.created_at|bb_date}}
Registration period: {{service.period}} Year(s)   
{% if order.expires_at %}Expires on: {{ order.expires_at|bb_date }} {% endif %}
{% if order.period %}
Billing period:

{{ order.total | money(order.currency) }}
{{ order.period | period_title }}

{% endif %}       


**Domain nameservers**

Nameserver 1: {{ service.ns1 }}   
Nameserver 2: {{ service.ns2 }}   
{% if  service.server.ns3 %}Nameserver 3: {{ service.ns3 }}   {% endif %}
{% if  service.server.ns4 %}Nameserver 4: {{ service.ns4 }}   {% endif %}

Login to members area: {{'login'|link({'email' : c.email }) }}
Manage order: {{ 'order/service/manage'|link }}/{{ order.id }}

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
        return array (  168 => 39,  161 => 37,  157 => 36,  154 => 35,  148 => 34,  142 => 33,  138 => 32,  134 => 31,  127 => 26,  121 => 24,  117 => 23,  113 => 21,  111 => 20,  105 => 19,  101 => 18,  97 => 17,  93 => 16,  80 => 6,  73 => 4,  70 => 3,  64 => 2,  61 => 1,);
    }
}
