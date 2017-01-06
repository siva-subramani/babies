<?php

/* PrestaShopBundle:Admin/Module/Includes:grid_notification_configure.html.twig */
class __TwigTemplate_0d4510e4f351d0c6bbbdb5f286d30ca80422c844a019d27ed48a718fd741976e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:grid.html.twig", "PrestaShopBundle:Admin/Module/Includes:grid_notification_configure.html.twig", 25);
        $this->blocks = array(
            'addon_card' => array($this, 'block_addon_card'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Module/Includes:grid.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_addon_card($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:card_notification_configure.html.twig", "PrestaShopBundle:Admin/Module/Includes:grid_notification_configure.html.twig", 28)->display(array_merge($context, array("module" =>         // line 30
(isset($context["module"]) ? $context["module"] : null), "display_type" =>         // line 31
(isset($context["display_type"]) ? $context["display_type"] : null), "origin" => ((        // line 32
array_key_exists("origin", $context)) ? (_twig_default_filter((isset($context["origin"]) ? $context["origin"] : null), "none")) : ("none")))));
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module/Includes:grid_notification_configure.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 32,  34 => 31,  33 => 30,  31 => 28,  28 => 27,  11 => 25,);
    }

    public function getSource()
    {
        return "";
    }
}
