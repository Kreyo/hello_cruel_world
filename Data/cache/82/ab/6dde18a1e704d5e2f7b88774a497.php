<?php

/* form.php.twig */
class __TwigTemplate_82ab6dde18a1e704d5e2f7b88774a497 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "About";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <?php
    \$emailRecorded = false;

    if (isset(\$_POST['emaily'])) {
        \$emailRecorded = true;

    }
    ?>
    <?php if (\$emailRecorded) { ?>
        <h3>Thanks!</h3>
        <?php \$title='Thank you!' ?>
    <?php }?>

    <form method=\"post\" action=\"/contactform-submit\">
        <input type=\"text\" name=\"emaily\" placeholder=\"Your email here\">
        <input type=\"submit\" value=\"Submit!\">
    </form>
";
    }

    public function getTemplateName()
    {
        return "form.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  35 => 3,  29 => 2,);
    }
}
