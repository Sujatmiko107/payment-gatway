<?php

/* partial_styles.phtml */
class __TwigTemplate_b76e0e0c8755ae3f2df274c346ba7fbdc8681f3b8a48baffbaca1a19145a3fef extends Twig_Template
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
        echo "    <link href=\"https://fonts.googleapis.com/css?family=Cuprum\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"css/min.css?v=";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_version"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />";
    }

    public function getTemplateName()
    {
        return "partial_styles.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  665 => 137,  657 => 131,  654 => 129,  652 => 128,  641 => 127,  623 => 123,  618 => 122,  613 => 119,  588 => 115,  577 => 114,  552 => 112,  536 => 108,  533 => 107,  530 => 106,  527 => 105,  524 => 104,  521 => 103,  518 => 102,  515 => 101,  512 => 100,  509 => 99,  506 => 98,  504 => 97,  501 => 96,  499 => 95,  496 => 94,  493 => 93,  484 => 90,  481 => 89,  469 => 88,  455 => 85,  452 => 84,  449 => 83,  446 => 82,  434 => 78,  431 => 77,  425 => 75,  419 => 73,  416 => 72,  388 => 67,  359 => 61,  348 => 57,  336 => 55,  331 => 52,  308 => 49,  277 => 41,  273 => 40,  269 => 39,  259 => 37,  257 => 36,  254 => 35,  249 => 34,  237 => 33,  213 => 26,  208 => 23,  199 => 22,  187 => 19,  170 => 17,  157 => 15,  143 => 14,  131 => 11,  114 => 9,  103 => 7,  77 => 5,  51 => 1,  46 => 126,  43 => 117,  40 => 113,  37 => 111,  31 => 70,  28 => 32,  25 => 21,  22 => 2,  19 => 1,  487 => 91,  482 => 132,  477 => 131,  470 => 125,  464 => 124,  461 => 123,  458 => 122,  448 => 114,  442 => 113,  437 => 79,  432 => 108,  427 => 20,  422 => 74,  417 => 151,  409 => 145,  407 => 144,  402 => 141,  400 => 140,  393 => 135,  389 => 133,  386 => 132,  384 => 131,  379 => 128,  377 => 122,  371 => 63,  369 => 117,  362 => 114,  356 => 112,  347 => 108,  344 => 107,  342 => 106,  325 => 96,  317 => 94,  315 => 93,  312 => 50,  299 => 90,  283 => 88,  280 => 87,  278 => 86,  275 => 85,  261 => 83,  258 => 82,  253 => 80,  239 => 78,  236 => 77,  234 => 76,  231 => 75,  217 => 27,  212 => 71,  201 => 67,  185 => 58,  167 => 53,  161 => 52,  155 => 50,  153 => 49,  150 => 48,  144 => 46,  140 => 45,  135 => 42,  130 => 39,  106 => 33,  92 => 6,  86 => 27,  80 => 25,  78 => 24,  73 => 21,  71 => 20,  62 => 2,  57 => 15,  54 => 14,  52 => 13,  41 => 7,  34 => 87,  32 => 2,  848 => 292,  844 => 291,  840 => 290,  836 => 289,  832 => 288,  825 => 283,  823 => 282,  820 => 281,  817 => 280,  812 => 277,  802 => 269,  793 => 265,  791 => 264,  786 => 261,  768 => 256,  760 => 255,  756 => 254,  744 => 253,  737 => 252,  718 => 251,  716 => 250,  708 => 244,  699 => 240,  697 => 239,  692 => 236,  674 => 231,  666 => 230,  662 => 229,  650 => 228,  643 => 227,  624 => 226,  622 => 225,  610 => 216,  606 => 215,  602 => 118,  600 => 212,  597 => 211,  587 => 204,  575 => 195,  563 => 186,  551 => 177,  539 => 109,  525 => 157,  517 => 156,  508 => 154,  500 => 149,  494 => 146,  490 => 92,  488 => 143,  485 => 142,  475 => 134,  466 => 131,  463 => 130,  453 => 117,  443 => 81,  440 => 80,  435 => 124,  428 => 76,  424 => 119,  415 => 113,  404 => 71,  395 => 101,  392 => 100,  378 => 97,  370 => 96,  365 => 115,  360 => 113,  353 => 111,  349 => 109,  338 => 83,  334 => 82,  328 => 97,  326 => 77,  324 => 76,  321 => 75,  310 => 69,  304 => 68,  298 => 47,  292 => 43,  286 => 89,  282 => 64,  274 => 61,  268 => 60,  262 => 59,  256 => 81,  250 => 57,  246 => 56,  238 => 53,  232 => 52,  226 => 51,  220 => 50,  214 => 72,  210 => 48,  202 => 45,  196 => 44,  190 => 43,  184 => 42,  178 => 57,  174 => 40,  166 => 16,  160 => 36,  154 => 35,  148 => 47,  142 => 33,  138 => 32,  129 => 26,  125 => 25,  121 => 24,  117 => 37,  113 => 36,  109 => 8,  104 => 32,  101 => 17,  99 => 16,  93 => 15,  90 => 14,  88 => 13,  85 => 12,  66 => 18,  59 => 16,  42 => 7,  39 => 6,  36 => 4,  30 => 1,);
    }
}
