<?php

/* mod_cron_settings.phtml */
class __TwigTemplate_ad87fd889bf0f06c650337800434629c219e981a8a5cf5f90702e7d7c8703982 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
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
        $context["active_menu"] = "system";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Cron settings");
    }

    // line 6
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 7
        echo "<ul>
    <li class=\"firstB\"><a href=\"";
        // line 8
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/");
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
    <li><a href=\"";
        // line 9
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("system");
        echo "\">";
        echo gettext("Settings");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 10
        echo gettext("Cron settings");
        echo "</li>
</ul>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "
<div class=\"widget\">
    <div class=\"head\">
        <h5 class=\"iCog\">";
        // line 18
        echo gettext("Cron settings");
        echo "</h5>
    </div>

    <div class=\"help\">
        <h3>";
        // line 22
        echo gettext("Setup scheduled tasks to be executed once a day");
        echo "</h3>
        <p>";
        // line 23
        echo gettext("Scheduled tasks must be enabled immediately after installation. Cron is responsible for sending your clients reminder about payments, domain renewal notices and many more.");
        echo "</p>
    </div>

    ";
        // line 26
        $context["cron"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "cron_info");
        // line 27
        echo "    <table class=\"tableStatic wide\">
        <tbody>
            <tr class=\"noborder\">
                <td>";
        // line 30
        echo gettext("Timezone");
        echo "</td>
                <td align=\"right\">";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "e"), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <td>";
        // line 35
        echo gettext("Time on server");
        echo "</td>
                <td align=\"right\">";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 39
        echo gettext("Last time scheduled tasks were executed");
        echo "</td>
                <td align=\"right\">
                    ";
        // line 41
        if ($this->getAttribute((isset($context["cron"]) ? $context["cron"] : null), "last_cron_exec")) {
            // line 42
            echo "                        ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cron"]) ? $context["cron"] : null), "last_cron_exec"), "Y-m-d H:i:s"), "html", null, true);
            echo "
                        (";
            // line 43
            echo twig_escape_filter($this->env, twig_timeago_filter($this->getAttribute((isset($context["cron"]) ? $context["cron"] : null), "last_cron_exec")), "html", null, true);
            echo " ago)
                    ";
        } else {
            // line 45
            echo "                        ";
            echo gettext("Scheduled tasks were never executed");
            // line 46
            echo "                    ";
        }
        // line 47
        echo "                </td>
            </tr>
            <tr>
                <td>";
        // line 50
        echo gettext("Unix crontab setup:");
        echo "</td>
                <td align=\"right\"><pre>*/5 * * * * php ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cron"]) ? $context["cron"] : null), "cron_path"), "html", null, true);
        echo "</pre></td>
            </tr>
            <tr>
                <td>";
        // line 54
        echo gettext("Execute scheduled tasks from browser");
        echo "</td>
                <td align=\"right\"><pre>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cron"]) ? $context["cron"] : null), "cron_url"), "html", null, true);
        echo "</pre></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan=\"2\">
                    <div class=\"aligncenter\">
                    <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cron"]) ? $context["cron"] : null), "cron_url"), "html", null, true);
        echo "\" title=\"\" class=\"btn55 mr10\" target=\"_blank\"><img src=\"images/icons/middlenav/airplane.png\" alt=\"\"><span>";
        echo gettext("Execute now");
        echo "</span></a>
                    </div>
                </td>
            </tr>
        </tfoot>
    </table>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_cron_settings.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 62,  158 => 55,  154 => 54,  148 => 51,  144 => 50,  139 => 47,  136 => 46,  133 => 45,  128 => 43,  123 => 42,  121 => 41,  116 => 39,  110 => 36,  106 => 35,  99 => 31,  95 => 30,  90 => 27,  88 => 26,  82 => 23,  78 => 22,  71 => 18,  66 => 15,  63 => 14,  56 => 10,  50 => 9,  44 => 8,  41 => 7,  38 => 6,  32 => 3,  27 => 4,  25 => 2,);
    }
}
