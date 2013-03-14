<?php

/* base.html.twig */
class __TwigTemplate_66c1bb1be81fba286ce73fa5e6c8207b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
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
        // line 8
        echo "</head>
<body>
    ";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        // line 11
        echo "    <img src=\"templates/assets/img_1.jpg\" id=\"img_center\">
    <div id=\"footer\">
        <p>Submit your email to be the first !</p>
        <ul>
            <li><a href='index.php/about'>About</a></li>
            <li>Privacy policy</li>
            <li><a href='index.php/contact'>Contact us</a></li>

        </ul>

    </div>

</body>
</html>";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "    <link rel=\"stylesheet\" href=\"templates/assets/style.css\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - Hey there</title>
    ";
    }

    public function block_title($context, array $blocks = array())
    {
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  68 => 10,  58 => 6,  55 => 5,  52 => 4,  33 => 10,  27 => 4,  22 => 1,  35 => 11,  29 => 8,);
    }
}
