<?php

/* mod_extension_index.phtml */
class __TwigTemplate_390c42ad2e31374e724677d238d83ace6f72964f0e244df26a6b1e8476f4816d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ajax")) ? ("layout_blank.phtml") : ("layout_default.phtml")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        // line 4
        $context["active_menu"] = "extensions";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Extensions");
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 10
        echo gettext("Extensions");
        echo "</a></li>
        <li><a href=\"#tab-core\">";
        // line 11
        echo gettext("Update BoxBilling");
        echo "</a></li>
        <li><a href=\"#tab-about\">";
        // line 12
        echo gettext("Learn more about extensions");
        echo "</a></li>
        <li><a href=\"#tab-hooks\">";
        // line 13
        echo gettext("Hooks");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">

        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-index\">
            <div class=\"help\">
                <h5>BoxBilling extensions</h5>
                <p>";
        // line 22
        echo gettext("Activate or deactivate extensions");
        echo "</p>
            </div>
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td width=\"3%\">&nbsp;</td>
                        <td width=\"20%\">";
        // line 28
        echo gettext("Extension");
        echo "</td>
                        <td>";
        // line 29
        echo gettext("Description");
        echo "</td>
                        <td style=\"width: 21%;\">";
        // line 30
        echo gettext("Actions");
        echo "</td>
                    </tr>
                </thead>

                <tbody>
                ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "extension_get_list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ext"]) {
            // line 36
            echo "                <tr>
                    <td><img src=\"";
            // line 37
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["ext"]) ? $context["ext"] : null), "icon_url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["ext"]) ? $context["ext"] : null), "icon_url"), "images/icons/middlenav/cog.png")) : ("images/icons/middlenav/cog.png")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ext"]) ? $context["ext"] : null), "name"), "html", null, true);
            echo "\" style=\"width: 32px; height: 32px;\"/></td>
                    <td><strong>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ext"]) ? $context["ext"] : null), "name"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ext"]) ? $context["ext"] : null), "version"), "html", null, true);
            echo "<br />by <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ext"]) ? $context["ext"] : null), "author_url"), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ext"]) ? $context["ext"] : null), "author"), "html", null, true);
            echo "</a></td>
                    <td>
                        ";
            // line 40
            echo twig_bbmd_filter($this->env, $this->getAttribute((isset($context["ext"]) ? $context["ext"] : null), "description"));
            echo "
                        <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ext"]) ? $context["ext"] : null), "project_url"), "html", null, true);
            echo "\" target=\"_blank\" title=\"Project details\">Learn more</a>
                    </td>
                    <td>
                        ";
            // line 44
            if (($this->getAttribute((isset($context["ext"]) ? $context["ext"] : null), "type") == "mod")) {
                // line 45
                echo "                            ";
                if (($this->getAttribute((isset($context["ext"]) ? $context["ext"] : null), "status") == "installed")) {
                    // line 46
                    echo "                            <a class=\"api-link bb-button btn14\" href=\"";
                    echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/extension/deactivate", array("type" => $this->getAttribute((isset($context["ext"]) ? $context["ext"] : null), "type"), "id" => $this->getAttribute((isset($context["ext"]) ? $context["ext"] : null), "id")));
                    echo "\" data-api-confirm=\"Are you sure?\" data-api-reload=\"Module was deactivated\" title=\"";
                    echo gettext("Deactivate");
                    echo "\"><img src=\"images/icons/dark/close.png\" alt=\"\" class=\"icon\"></a>
                            ";
                } else {
                    // line 48
                    echo "                            <a class=\"btnIconLeft mr10 api-link\" href=\"";
                    echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/extension/activate", array("type" => $this->getAttribute((isset($context["ext"]) ? $context["ext"] : null), "type"), "id" => $this->getAttribute((isset($context["ext"]) ? $context["ext"] : null), "id")));
                    echo "\" data-api-confirm=\"Are you sure?\" data-api-jsonp=\"onAfterModuleActivated\"><img src=\"images/icons/dark/cog.png\" alt=\"\" class=\"icon\"><span>Activate</span></a>
                            ";
                }
                // line 50
                echo "                        ";
            } else {
                // line 51
                echo "                        &nbsp;
                        ";
            }
            // line 53
            echo "
                        ";
            // line 54
            if ($this->getAttribute((isset($context["ext"]) ? $context["ext"] : null), "has_settings")) {
                // line 55
                echo "                            <a class=\"bb-button btn14\" href=\"";
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("extension/settings");
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ext"]) ? $context["ext"] : null), "id"), "html", null, true);
                echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\" class=\"icon\" title=\"";
                echo gettext("Module settings");
                echo "\"></a>
                        ";
            }
            // line 57
            echo "                    </td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 60
            echo "                    <tr>
                        <td colspan=\"4\">
                            ";
            // line 62
            echo gettext("The list is empty");
            // line 63
            echo "                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ext'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                </tbody>
                <tfoot>
                    <tr>
                        <td colspan=\"4\"></td>
                    </tr>
                </tfoot>
            </table>

            <div class=\"help\">
                <h5>BoxBilling modules on extension site</h5>
            </div>
            ";
        // line 77
        $this->env->loadTemplate("partial_extensions.phtml")->display($context);
        // line 78
        echo "        </div>

        <div class=\"tab_content nopadding\" id=\"tab-hooks\">
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td>";
        // line 84
        echo gettext("Extension");
        echo "</td>
                        <td>";
        // line 85
        echo gettext("Hook");
        echo "</td>
                    </tr>
                </thead>

                <tbody>
                ";
        // line 90
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hook_get_list", array(0 => array("per_page" => 90)), "method"), "list"));
        foreach ($context['_seq'] as $context["_key"] => $context["hook"]) {
            // line 91
            echo "                <tr>
                    <td>
                        ";
            // line 93
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["hook"]) ? $context["hook"] : null), "rel_id")), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hook"]) ? $context["hook"] : null), "event"), "html", null, true);
            echo "
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hook'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                </tbody>
            </table>
        </div>
            
        <div class=\"tab_content nopadding\" id=\"tab-core\">
            <div class=\"help\">
                <h3>";
        // line 106
        echo gettext("Automatic update");
        echo "</h3>
                <p>";
        // line 107
        echo gettext("Automatic updater is a tool to update BoxBilling to latest version in one click. Works on these hosting environments where PHP has permissions to overwrite files uploaded via FTP.");
        echo "</p>
            </div>

            <div class=\"body\">
                <a href=\"";
        // line 111
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/extension/update_core");
        echo "\" title=\"\" class=\"btnIconLeft mr10 mt5 api-link\" data-api-confirm=\"Make sure that you have made database and files backups before proceeding with automatic update. Click OK when you are ready to continue.\" data-api-msg=\"Update complete\"><img src=\"images/icons/dark/cog.png\" alt=\"\" class=\"icon\"><span>Update BoxBilling</span></a>
            </div>

            <div class=\"help\">
                <h3>";
        // line 115
        echo gettext("Manual update");
        echo "</h3>
                <p>";
        // line 116
        echo gettext("Manual update is a solution when auto updater can not work on current installation environment");
        echo "</p>
            </div>

            <div class=\"body list arrowGreen\">
                <ul>
                    <li>Download latest BoxBilling from <a href=\"http://www.boxbilling.com/download\" target=\"_blank\">www.boxbilling.com</a></li>
                    <li>Extract files at your computer</li>
                    <li>Upload (overwrite) extracted files via FTP to <strong>";
        // line 123
        echo twig_escape_filter($this->env, twig_constant("BB_PATH_ROOT"), "html", null, true);
        echo "</strong></li>
                    <li>When upload is complete, execute <a href=\"";
        // line 124
        echo twig_escape_filter($this->env, twig_constant("BB_URL"), "html", null, true);
        echo "bb-update.php\" target=\"_blank\">";
        echo twig_escape_filter($this->env, twig_constant("BB_URL"), "html", null, true);
        echo "bb-update.php</a> in your browser</li>
                    <li>Your BoxBilling is now updated to latest version.</li>
                </ul>
            </div>
        </div>
        
        <div class=\"tab_content nopadding\" id=\"tab-about\">
            <div class=\"help\">
                <h3>";
        // line 132
        echo gettext("Extending BoxBilling");
        echo "</h3>
                <p>";
        // line 133
        echo gettext("BoxBilling gives developers all the capabilities to customize, integrate & extend the core system into your own website & applications.");
        echo "</p>
            </div>
            <div class=\"body\">
                <h2 class=\"pt20\">More extensions</h2>
                <p>If you can not find extensions you are looking for in this admin area, please visit extensions site at <a href=\"http://extensions.boxbilling.com\" target=\"_blank\">http://extensions.boxbilling.com</a></p>

                <h2 class=\"pt20\">How to create new extension</h2>
                <div class=\"pt20 list arrowGrey\">
                    <ul>
                        <li>Create free account at <a href=\"https://github.com/signup/free\" target=\"_blank\">Github</a></li>
                        <li>Create new public repository dedicated for extension only</li>
                        <li>Repository must have plugin json file. <a href=\"http://extensions.boxbilling.com/article/getting-started\" target=\"_blank\">More information</a></li>
                        <li>Login to <a href=\"http://extensions.boxbilling.com/\" target=\"_blank\">BoxBilling extensions site</a> with github account.</li>
                        <li>If your repository contains valid json file, it can be registered in extensions site.</li>
                        <li>Registered extensions can be visible in every BoxBilling admin area.</li>
                    </ul>
                </div>

                <h2 class=\"pt20\">Supported extension types</h2>
                <div class=\"pt20 list arrowGrey\">
                    <ul>
                        <li>Payment gateways</li>
                        <li>Server managers</li>
                        <li>Domain registrars</li>
                        <li>Client area themes</li>
                        <li>Admin area themes</li>
                        <li>Translations for client and admin areas</li>
                        <li>Event hooks - Hooks can be injected into the process, change its behaviour, stop executing actions</li>
                        <li>API module - External program which uses BoxBilling API</li>
                    </ul>
                </div>

                <h2 class=\"pt20\">Extension support</h2>
                <p>Contact extensions developers directly for support. You can find issue tracker on extension site.</p>
            </div>
        </div>
    </div>
</div>

";
    }

    // line 174
    public function block_js($context, array $blocks = array())
    {
        // line 175
        echo "<script type=\"text/javascript\">
    function onAfterUpdate(result) {
    
    }

    function onAfterModuleActivated(result) {
        if(result.redirect && result.type == 'mod') {
            bb.redirect(\"";
        // line 182
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("");
        echo "/\" + result.id);
        } else if(result.has_settings) {
            bb.redirect(\"";
        // line 184
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("extension/settings");
        echo "/\"+result.id);
        } else {
            bb.reload();
        }
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_extension_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 184,  368 => 182,  359 => 175,  356 => 174,  312 => 133,  308 => 132,  295 => 124,  291 => 123,  281 => 116,  277 => 115,  270 => 111,  263 => 107,  259 => 106,  251 => 100,  241 => 96,  235 => 93,  231 => 91,  227 => 90,  219 => 85,  215 => 84,  207 => 78,  205 => 77,  192 => 66,  184 => 63,  182 => 62,  178 => 60,  171 => 57,  161 => 55,  159 => 54,  156 => 53,  152 => 51,  149 => 50,  143 => 48,  135 => 46,  132 => 45,  130 => 44,  124 => 41,  120 => 40,  109 => 38,  103 => 37,  100 => 36,  95 => 35,  87 => 30,  83 => 29,  79 => 28,  70 => 22,  58 => 13,  54 => 12,  50 => 11,  46 => 10,  41 => 7,  38 => 6,  32 => 3,  27 => 4,  25 => 2,);
    }
}
