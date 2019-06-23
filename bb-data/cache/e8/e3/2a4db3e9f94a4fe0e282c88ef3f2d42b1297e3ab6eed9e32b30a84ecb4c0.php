<?php

/* partial_extensions.phtml */
class __TwigTemplate_e8e32a4db3e9f94a4fe0e282c88ef3f2d42b1297e3ab6eed9e32b30a84ecb4c0 extends Twig_Template
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
        if ((isset($context["header"]) ? $context["header"] : null)) {
            // line 2
            echo "<div class=\"help\">
    <h5>";
            // line 3
            echo twig_escape_filter($this->env, (isset($context["header"]) ? $context["header"] : null), "html", null, true);
            echo "</h5>
</div>
";
        }
        // line 6
        echo "<table class=\"tableStatic wide\">
    <thead>
        <tr>
            <td>&nbsp;</td>
            <td style=\"width: 30%\">Extension</td>
            <td>Description</td>
            <td width=\"18%\">&nbsp;</td>
        </tr>
    </thead>

    <tbody>
        ";
        // line 17
        $context["extensions"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "extension_get_latest", array(0 => array("type" => (isset($context["type"]) ? $context["type"] : null))), "method");
        // line 18
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 19
            echo "        <tr>
            <td><img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "icon_url"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "name"), "html", null, true);
            echo "\" style=\"width: 32px; height: 32px;\"/></td>
            <td>
                <a class=\"bb-button\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "project_url"), "html", null, true);
            echo "\" target=\"_blank\" title=\"View extension details\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "name"), 40), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "version"), "html", null, true);
            echo "</a>
                <br/>by <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "author_url"), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "author"), "html", null, true);
            echo "</a>
            </td>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "description"), 150), "html", null, true);
            echo "</td>
            <td class=\"actions\">
                <a class=\"bb-button btn14 api-link\" data-api-confirm=\"By installing '";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "name"), "html", null, true);
            echo "' you agree with terms and conditions. Install only extensions you trust. Continue?\" data-api-reload=\"1\" href=\"";
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/extension/install", array("type" => $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "type"), "id" => $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "id")));
            echo "\" title=\"Install extension\"><img src=\"images/icons/dark/cog.png\" alt=\"\"></a>
                <a class=\"bb-button btn14\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "project_url"), "html", null, true);
            echo "\" target=\"_blank\" title=\"Details\"><img src=\"images/icons/dark/globe.png\" alt=\"\"></a>
                <a class=\"bb-button btn14\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "download_url"), "html", null, true);
            echo "\" title=\"Download ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : null), "name"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/download.png\" alt=\"\"></a>
            </td>
        </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "        <tr>
            <td colspan=\"4\" class=\"aligncenter\"><a href=\"http://extensions.boxbilling.com/\" target=\"_blank\">Explore BoxBilling extensions</a></td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </tbody>
    <tfoot>
        <tr>
            <td colspan=\"4\"></td>
        </tr>
    </tfoot>

</table>";
    }

    public function getTemplateName()
    {
        return "partial_extensions.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 37,  102 => 33,  91 => 29,  81 => 27,  76 => 25,  69 => 23,  61 => 22,  51 => 19,  45 => 18,  43 => 17,  30 => 6,  24 => 3,  21 => 2,  19 => 1,  373 => 184,  368 => 182,  359 => 175,  356 => 174,  312 => 133,  308 => 132,  295 => 124,  291 => 123,  281 => 116,  277 => 115,  270 => 111,  263 => 107,  259 => 106,  251 => 100,  241 => 96,  235 => 93,  231 => 91,  227 => 90,  219 => 85,  215 => 84,  207 => 78,  205 => 77,  192 => 66,  184 => 63,  182 => 62,  178 => 60,  171 => 57,  161 => 55,  159 => 54,  156 => 53,  152 => 51,  149 => 50,  143 => 48,  135 => 46,  132 => 45,  130 => 44,  124 => 41,  120 => 40,  109 => 38,  103 => 37,  100 => 36,  95 => 35,  87 => 28,  83 => 29,  79 => 28,  70 => 22,  58 => 13,  54 => 20,  50 => 11,  46 => 10,  41 => 7,  38 => 6,  32 => 3,  27 => 4,  25 => 2,);
    }
}
