<?php

/* ./base.twig */
class __TwigTemplate_f2460ba3452b1fd8022779e8f4d2682ef2d7a4a7670705816a9dc99c8a0bbb33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 9
        echo "</head>
<body>

<div id=\"content\">
    ";
        // line 13
        $this->displayBlock('content', $context, $blocks);
        // line 15
        echo "</div>

<div id=\"footer\">
    ";
        // line 18
        $this->displayBlock('footer', $context, $blocks);
        // line 20
        echo "</div>";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <meta charset=\"UTF-8\">
        <link rel=\"stylesheet\" href=\"/static/css/main.css\" type=\"text/css\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo " - FastPhp</title>
    ";
    }

    public function block_title($context, array $blocks = array())
    {
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "    ";
    }

    // line 18
    public function block_footer($context, array $blocks = array())
    {
        // line 19
        echo "    ";
    }

    public function getTemplateName()
    {
        return "./base.twig";
    }

    public function getDebugInfo()
    {
        return array (  76 => 19,  73 => 18,  69 => 14,  66 => 13,  56 => 7,  52 => 5,  49 => 4,  45 => 20,  43 => 18,  38 => 15,  36 => 13,  30 => 9,  28 => 4,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     {% block head %}*/
/*         <meta charset="UTF-8">*/
/*         <link rel="stylesheet" href="/static/css/main.css" type="text/css" />*/
/*         <title>{% block title %}{% endblock %} - FastPhp</title>*/
/*     {% endblock %}*/
/* </head>*/
/* <body>*/
/* */
/* <div id="content">*/
/*     {% block content %}*/
/*     {% endblock %}*/
/* </div>*/
/* */
/* <div id="footer">*/
/*     {% block footer %}*/
/*     {% endblock %}*/
/* </div>*/
