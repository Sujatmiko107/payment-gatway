<?php

/* mod_kb_index.phtml */
class __TwigTemplate_02cdce25a82403ffb3b3a987f2de000bc376648635b8d81a93d7607e3f3b96b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ajax")) ? ("layout_blank.phtml") : ("layout_default.phtml")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Knowledge base");
    }

    // line 4
    public function block_breadcrumb($context, array $blocks = array())
    {
        echo gettext("Knowledge base");
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
    ";
        // line 8
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "q")) {
            // line 9
            echo "        ";
            $context["kbcategories"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "kb_category_get_list", array(0 => array("q" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "q"))), "method");
            // line 10
            echo "    ";
        } else {
            // line 11
            echo "        ";
            $context["kbcategories"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "kb_category_get_list");
            // line 12
            echo "    ";
        }
        // line 13
        echo "
<div class=\"content-block\" role=\"main\">
    <div class=\"row\">
        <article class=\" span12 data-block\">
            <div class=\"data-container\">
                <header>
                    <h1>";
        // line 19
        echo gettext("Knowledge base");
        echo "</h1><br/>
                    ";
        // line 20
        echo gettext("Please try to read related topics in knowledge base before contacting support.");
        // line 21
        echo "                    <form method=\"get\" action=\"\" class=\"form form-search pull-right\" style=\"background: none; border: 0px\">
                        <p>
                            <input class=\"\" name=\"_url\" type=\"hidden\" value=\"/kb\">
                            <input class=\"search-query text\" name=\"q\" type=\"text\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "q"), "html", null, true);
        echo "\" placeholder=\"";
        echo gettext("What are you looking for?");
        echo "\">
                            <input class=\"btn btn-primary\" value=\"";
        // line 25
        echo gettext("Search");
        echo "\" type=\"submit\">
                        </p>
                    </form>
                </header>
                <section>

                    <div class=\"row\" >
                        ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["kbcategories"]) ? $context["kbcategories"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["category"]) {
            // line 33
            echo "                        <article class=\"data-block\">
                            <div class=\"data-container\">
                                <header>
                                    <h2 id=\"category-";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id"), "html", null, true);
            echo "\"><a href=\"";
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("kb");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "title"), "html", null, true);
            echo "</a></h2>
                                </header>
                                <section>
                                    <ul>
                                        ";
            // line 40
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "articles"));
            foreach ($context['_seq'] as $context["i"] => $context["article"]) {
                // line 41
                echo "                                        <li><a href=\"";
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/kb");
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "category"), "slug"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "slug"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title"), "html", null, true);
                echo "</a></li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                                    </ul>
                                </section>
                            </div>
                        </article>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 48
            echo "                        <p class=\"alert alert-block alert-danger\">
                            ";
            // line 49
            echo gettext("Try using other keyword. No matches found for keyword:");
            // line 50
            echo "                            <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "q"), "html", null, true);
            echo "</strong>
                        </p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                    </div>
                </section>
            </div>
        </article>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "mod_kb_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 53,  151 => 50,  149 => 49,  146 => 48,  137 => 43,  122 => 41,  118 => 40,  105 => 36,  100 => 33,  95 => 32,  85 => 25,  79 => 24,  74 => 21,  72 => 20,  68 => 19,  60 => 13,  57 => 12,  54 => 11,  51 => 10,  48 => 9,  46 => 8,  43 => 7,  40 => 6,  34 => 4,  28 => 3,);
    }
}
