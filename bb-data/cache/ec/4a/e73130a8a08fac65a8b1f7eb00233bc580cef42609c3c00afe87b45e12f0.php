<?php

/* partial_pagination.phtml */
class __TwigTemplate_ec4ae73130a8a08fac65a8b1f7eb00233bc580cef42609c3c00afe87b45e12f0 extends Twig_Template
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
        if (($this->getAttribute((isset($context["list"]) ? $context["list"] : null), "pages") > 1)) {
            // line 2
            $context["page"] = $this->getAttribute((isset($context["list"]) ? $context["list"] : null), "page");
            // line 3
            echo "
<div class=\"pagination pagination-centered\">
    <ul>
        <li ";
            // line 6
            if (((!$this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page")) || ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page") == 1))) {
                echo "class=\"disabled\"";
            }
            echo ">
            <a href=\"";
            // line 7
            if (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page") && ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page") != 1))) {
                echo "?";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_merge(twig_array_merge(array(), (isset($context["request"]) ? $context["request"] : null)), array("page" => 1)));
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
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    echo twig_escape_filter($this->env, (isset($context["k"]) ? $context["k"] : null), "html", null, true);
                    echo "=";
                    echo twig_escape_filter($this->env, (isset($context["v"]) ? $context["v"] : null), "html", null, true);
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last") == false)) {
                        echo "&";
                    }
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            } else {
                echo "#";
            }
            echo "\">«</a>
        </li>

        <li ";
            // line 10
            if (((!$this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page")) || ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page") == 1))) {
                echo "class=\"disabled\"";
            }
            echo ">
        <a href=\"";
            // line 11
            if (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page") && ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page") != "1"))) {
                echo "?";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_merge(twig_array_merge(array(), (isset($context["request"]) ? $context["request"] : null)), array("page" => ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page") - 1))));
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
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    echo twig_escape_filter($this->env, (isset($context["k"]) ? $context["k"] : null), "html", null, true);
                    echo "=";
                    echo twig_escape_filter($this->env, (isset($context["v"]) ? $context["v"] : null), "html", null, true);
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last") == false)) {
                        echo "&";
                    }
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            } else {
                echo "#";
            }
            echo "\"> <span class=\"awe-arrow-left\"></span> </a>
        </li>

        ";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["list"]) ? $context["list"] : null), "pages")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 15
                echo "            <li  ";
                if (((isset($context["i"]) ? $context["i"] : null) == (isset($context["page"]) ? $context["page"] : null))) {
                    echo "class=\"active\" ";
                }
                echo ">
            ";
                // line 16
                if ((((isset($context["i"]) ? $context["i"] : null) == $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page")) || ((!$this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page")) && ((isset($context["i"]) ? $context["i"] : null) == 1)))) {
                    // line 17
                    echo "                <a href=\"#\" onclick=\"return false;\">";
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                    echo "</a>
            ";
                } else {
                    // line 19
                    echo "                <a href=\"?";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_merge(twig_array_merge(array(), (isset($context["request"]) ? $context["request"] : null)), array("page" => (isset($context["i"]) ? $context["i"] : null))));
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
                    foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                        echo twig_escape_filter($this->env, (isset($context["k"]) ? $context["k"] : null), "html", null, true);
                        echo "=";
                        echo twig_escape_filter($this->env, (isset($context["v"]) ? $context["v"] : null), "html", null, true);
                        if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last") == false)) {
                            echo "&";
                        }
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                    echo "</a>
            ";
                }
                // line 21
                echo "            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "
        <li ";
            // line 24
            if (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page") == $this->getAttribute((isset($context["list"]) ? $context["list"] : null), "pages"))) {
                echo "class=\"disabled\"";
            }
            echo ">
            <a href=\"";
            // line 25
            if (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page") && ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page") != $this->getAttribute((isset($context["list"]) ? $context["list"] : null), "pages")))) {
                echo "?";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_merge(twig_array_merge(array(), (isset($context["request"]) ? $context["request"] : null)), array("page" => ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page") + 1))));
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
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    echo twig_escape_filter($this->env, (isset($context["k"]) ? $context["k"] : null), "html", null, true);
                    echo "=";
                    echo twig_escape_filter($this->env, (isset($context["v"]) ? $context["v"] : null), "html", null, true);
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last") == false)) {
                        echo "&";
                    }
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            } elseif ((!$this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page"))) {
                echo "?";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_merge(twig_array_merge(array(), (isset($context["request"]) ? $context["request"] : null)), array("page" => 2)));
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
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    echo twig_escape_filter($this->env, (isset($context["k"]) ? $context["k"] : null), "html", null, true);
                    echo "=";
                    echo twig_escape_filter($this->env, (isset($context["v"]) ? $context["v"] : null), "html", null, true);
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last") == false)) {
                        echo "&";
                    }
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            } else {
                echo "#";
            }
            echo "\"><span class=\"awe-arrow-right\"></span> </a>
        </li>

        <li ";
            // line 28
            if (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page") == $this->getAttribute((isset($context["list"]) ? $context["list"] : null), "pages"))) {
                echo "class=\"disabled\"";
            }
            echo ">
            <a href=\"";
            // line 29
            if (((!$this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page")) || ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page") != $this->getAttribute((isset($context["list"]) ? $context["list"] : null), "pages")))) {
                echo "?";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_merge(twig_array_merge(array(), (isset($context["request"]) ? $context["request"] : null)), array("page" => $this->getAttribute((isset($context["list"]) ? $context["list"] : null), "pages"))));
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
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    echo twig_escape_filter($this->env, (isset($context["k"]) ? $context["k"] : null), "html", null, true);
                    echo "=";
                    echo twig_escape_filter($this->env, (isset($context["v"]) ? $context["v"] : null), "html", null, true);
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last") == false)) {
                        echo "&";
                    }
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            } else {
                echo "#";
            }
            echo "\">»</a>
        </li>
    </ul>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partial_pagination.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 29,  284 => 28,  204 => 25,  198 => 24,  195 => 23,  188 => 21,  141 => 17,  139 => 16,  132 => 15,  128 => 14,  84 => 11,  78 => 10,  23 => 3,  21 => 2,  19 => 1,  153 => 38,  151 => 37,  147 => 19,  140 => 33,  120 => 30,  117 => 29,  111 => 27,  105 => 25,  103 => 24,  97 => 21,  89 => 20,  81 => 18,  62 => 17,  60 => 16,  54 => 13,  50 => 12,  43 => 7,  40 => 6,  34 => 7,  28 => 6,);
    }
}
