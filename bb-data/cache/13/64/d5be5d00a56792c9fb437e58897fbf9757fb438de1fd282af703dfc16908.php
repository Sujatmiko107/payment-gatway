<?php

/* mod_product_addons.phtml */
class __TwigTemplate_1364d5be5d00a56792c9fb437e58897fbf9757fb438de1fd282af703dfc16908 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout_default.phtml");

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout_default.phtml";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["active_menu"] = "products";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Addons");
    }

    // line 5
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 6
        echo "<ul>
    <li class=\"firstB\"><a href=\"";
        // line 7
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/");
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
    <li><a href=\"";
        // line 8
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("product");
        echo "\">";
        echo gettext("Products");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 9
        echo gettext("Addons");
        echo "</li>
</ul>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "
<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 18
        echo gettext("Addons");
        echo "</a></li>
        <li><a href=\"#tab-new\">";
        // line 19
        echo gettext("New Addon");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">

        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-index\">

            <table class=\"tableStatic wide\">
                <tbody>
                    ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "product_addon_get_pairs"));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["addon_id"] => $context["addon_title"]) {
            // line 30
            echo "                    <tr ";
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                echo "class=\"noborder\"";
            }
            echo ">
                        <td><label for=\"addon_";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["addon_id"]) ? $context["addon_id"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["addon_title"]) ? $context["addon_title"] : null), "html", null, true);
            echo "</label></td>
                        <td class=\"actions\" style=\"width:13%\">
                            <a class=\"bb-button btn14\" href=\"";
            // line 33
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/product/addon");
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["addon_id"]) ? $context["addon_id"] : null), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                            <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-confirm=\"Are you sure?\" data-api-redirect=\"";
            // line 34
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("product/addons");
            echo "\" href=\"";
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/product/delete", array("id" => (isset($context["addon_id"]) ? $context["addon_id"] : null)));
            echo "\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 38
            echo "                    <tr>
                        <td colspan=\"2\">";
            // line 39
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['addon_id'], $context['addon_title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                </tbody>
            </table>
            <div class=\"fix\"></div>
        </div>
        
        <div class=\"fix\"></div>

        <div class=\"tab_content nopadding\" id=\"tab-new\">
            
            <form method=\"post\" action=\"";
        // line 51
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/product/addon_create");
        echo "\" class=\"mainForm api-form save\" data-api-jsonp=\"onAfterAddonCreate\">
            <fieldset>
                <div class=\"rowElem\">
                    <label>";
        // line 54
        echo gettext("Status");
        echo ":</label>
                    <div class=\"formRight\">
                        <input type=\"radio\" name=\"status\" value=\"enabled\"/><label>";
        // line 56
        echo gettext("Enabled");
        echo "</label>
                        <input type=\"radio\" name=\"status\" value=\"disabled\" checked=\"checked\"/><label>";
        // line 57
        echo gettext("Disabled");
        echo "</label>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                <div class=\"rowElem\">
                    <label>";
        // line 62
        echo gettext("Activation");
        echo ":</label>
                    <div class=\"formRight\">
                        <input type=\"radio\" name=\"setup\" value=\"after_order\"/><label>";
        // line 64
        echo gettext("After order is placed");
        echo "</label>
                        <input type=\"radio\" name=\"setup\" value=\"after_payment\" checked=\"checked\"/><label>";
        // line 65
        echo gettext("After payment is received");
        echo "</label>
                        <input type=\"radio\" name=\"setup\" value=\"manual\"/><label>";
        // line 66
        echo gettext("Manual activation");
        echo "</label>
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
        // line 72
        echo gettext("Icon");
        echo ":</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"icon_url\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "icon_url"), "html", null, true);
        echo "\" placeholder=\"\"/>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                <div class=\"rowElem\">
                    <label>";
        // line 79
        echo gettext("Title");
        echo ":</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"title\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "title"), "html", null, true);
        echo "\" required=\"required\" placeholder=\"\"/>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                <div class=\"rowElem\">
                    <label>";
        // line 86
        echo gettext("Description");
        echo ":</label>
                    <div class=\"formRight\">
                        <textarea name=\"description\" cols=\"5\" rows=\"5\">";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), "html", null, true);
        echo "</textarea>
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <input type=\"submit\" value=\"";
        // line 93
        echo gettext("Create");
        echo "\" class=\"greyishBtn submitForm\" />
            </fieldset>
            </form>

        </div>

    </div>
</div>

";
    }

    // line 104
    public function block_js($context, array $blocks = array())
    {
        // line 105
        echo "<script type=\"text/javascript\">
    
    function onAfterAddonCreate(result)
    {
        bb.redirect(\"";
        // line 109
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("product/addon/");
        echo "/\" + result);
    }
    
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_product_addons.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 109,  271 => 105,  268 => 104,  254 => 93,  246 => 88,  241 => 86,  233 => 81,  228 => 79,  220 => 74,  215 => 72,  206 => 66,  202 => 65,  198 => 64,  193 => 62,  185 => 57,  181 => 56,  176 => 54,  170 => 51,  159 => 42,  150 => 39,  147 => 38,  128 => 34,  122 => 33,  115 => 31,  108 => 30,  90 => 29,  77 => 19,  73 => 18,  67 => 14,  64 => 13,  57 => 9,  51 => 8,  45 => 7,  42 => 6,  39 => 5,  33 => 3,  28 => 2,);
    }
}
