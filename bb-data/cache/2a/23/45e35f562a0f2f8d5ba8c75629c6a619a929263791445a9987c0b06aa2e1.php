<?php

/* partial_pending_messages.phtml */
class __TwigTemplate_2a2345e35f562a0f2f8d5ba8c75629c6a619a929263791445a9987c0b06aa2e1 extends Twig_Template
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
        $context["pending_messages"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_get_pending_messages");
        // line 2
        if ((isset($context["pending_messages"]) ? $context["pending_messages"] : null)) {
            // line 3
            echo "<script>
    ";
            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pending_messages"]) ? $context["pending_messages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 5
                echo "        bb.msg('";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
                echo "');
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "</script>
";
        }
    }

    public function getTemplateName()
    {
        return "partial_pending_messages.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 5,  23 => 3,  21 => 2,  816 => 193,  811 => 192,  806 => 191,  799 => 174,  796 => 173,  791 => 176,  789 => 173,  783 => 172,  780 => 171,  777 => 170,  766 => 265,  761 => 262,  757 => 260,  751 => 258,  749 => 257,  746 => 256,  740 => 253,  737 => 252,  734 => 251,  731 => 249,  727 => 247,  719 => 245,  711 => 243,  709 => 242,  706 => 241,  703 => 240,  699 => 238,  691 => 236,  683 => 234,  681 => 233,  678 => 232,  675 => 231,  671 => 229,  662 => 226,  654 => 224,  652 => 223,  649 => 222,  646 => 221,  642 => 219,  634 => 217,  626 => 215,  624 => 214,  621 => 213,  618 => 212,  614 => 210,  606 => 208,  598 => 206,  596 => 205,  593 => 204,  591 => 203,  584 => 201,  581 => 200,  579 => 199,  572 => 194,  569 => 193,  566 => 192,  564 => 191,  561 => 190,  559 => 189,  556 => 188,  553 => 187,  551 => 181,  543 => 178,  540 => 170,  538 => 169,  532 => 165,  524 => 160,  520 => 159,  514 => 156,  511 => 155,  505 => 152,  501 => 151,  498 => 150,  496 => 149,  493 => 148,  482 => 142,  476 => 141,  454 => 136,  450 => 134,  448 => 133,  444 => 131,  442 => 130,  435 => 126,  428 => 121,  425 => 120,  419 => 118,  417 => 117,  411 => 115,  395 => 109,  392 => 108,  389 => 107,  382 => 103,  372 => 100,  369 => 99,  364 => 97,  354 => 94,  348 => 92,  340 => 89,  324 => 84,  321 => 83,  319 => 82,  303 => 75,  293 => 73,  290 => 72,  287 => 71,  283 => 70,  272 => 65,  267 => 62,  261 => 60,  258 => 59,  250 => 55,  245 => 52,  243 => 51,  241 => 50,  235 => 48,  233 => 47,  230 => 46,  225 => 41,  204 => 12,  198 => 7,  193 => 281,  186 => 280,  180 => 278,  178 => 277,  169 => 274,  167 => 273,  164 => 272,  162 => 46,  150 => 43,  148 => 42,  144 => 41,  137 => 38,  135 => 37,  126 => 34,  122 => 33,  118 => 32,  114 => 31,  110 => 30,  97 => 26,  88 => 23,  84 => 22,  80 => 21,  76 => 20,  71 => 18,  65 => 15,  61 => 14,  57 => 13,  53 => 12,  48 => 10,  44 => 9,  39 => 7,  384 => 85,  374 => 80,  357 => 71,  351 => 93,  339 => 58,  337 => 88,  334 => 87,  329 => 54,  326 => 53,  323 => 52,  320 => 51,  318 => 50,  316 => 81,  304 => 47,  281 => 41,  276 => 66,  265 => 37,  251 => 34,  240 => 33,  215 => 37,  201 => 25,  189 => 24,  151 => 15,  134 => 13,  130 => 35,  121 => 11,  107 => 10,  95 => 7,  78 => 5,  73 => 19,  67 => 3,  34 => 36,  28 => 27,  25 => 22,  22 => 17,  19 => 1,  558 => 221,  549 => 180,  546 => 179,  534 => 214,  526 => 213,  521 => 212,  516 => 157,  508 => 206,  497 => 197,  488 => 194,  485 => 193,  471 => 139,  463 => 138,  458 => 188,  453 => 187,  445 => 182,  430 => 170,  426 => 169,  422 => 168,  418 => 167,  414 => 116,  410 => 165,  399 => 110,  393 => 158,  387 => 106,  375 => 146,  371 => 145,  367 => 98,  363 => 143,  359 => 142,  355 => 141,  344 => 135,  338 => 134,  332 => 131,  317 => 119,  313 => 48,  309 => 76,  305 => 116,  301 => 115,  297 => 114,  286 => 42,  280 => 105,  268 => 96,  264 => 61,  260 => 94,  256 => 58,  252 => 56,  248 => 91,  237 => 85,  231 => 82,  226 => 29,  224 => 78,  220 => 38,  210 => 18,  200 => 64,  196 => 62,  183 => 58,  179 => 57,  175 => 276,  171 => 55,  163 => 19,  159 => 45,  155 => 52,  152 => 51,  147 => 50,  140 => 39,  136 => 45,  132 => 44,  128 => 43,  124 => 42,  120 => 41,  111 => 35,  105 => 28,  103 => 30,  101 => 27,  98 => 28,  96 => 27,  93 => 25,  85 => 23,  81 => 22,  77 => 21,  74 => 20,  72 => 19,  69 => 18,  66 => 17,  58 => 2,  52 => 9,  49 => 8,  46 => 7,  43 => 1,  37 => 45,  31 => 1,  26 => 4,);
    }
}
