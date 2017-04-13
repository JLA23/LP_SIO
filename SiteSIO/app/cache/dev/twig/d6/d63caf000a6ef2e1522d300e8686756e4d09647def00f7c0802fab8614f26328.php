<?php

/* SIOBundle:Default:about.html.twig */
class __TwigTemplate_84ca152ba9baa66aeea3cd89609f4b97176857ead63a01f9cd3d30f183091c16 extends Twig_Template
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
        $__internal_799255975a4f97719f0cba87cd029b302549eaf38d6f7efdffa6d9f1229698f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_799255975a4f97719f0cba87cd029b302549eaf38d6f7efdffa6d9f1229698f2->enter($__internal_799255975a4f97719f0cba87cd029b302549eaf38d6f7efdffa6d9f1229698f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIOBundle:Default:about.html.twig"));

        // line 1
        echo "# Page a propos (about)";
        
        $__internal_799255975a4f97719f0cba87cd029b302549eaf38d6f7efdffa6d9f1229698f2->leave($__internal_799255975a4f97719f0cba87cd029b302549eaf38d6f7efdffa6d9f1229698f2_prof);

    }

    public function getTemplateName()
    {
        return "SIOBundle:Default:about.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("# Page a propos (about)", "SIOBundle:Default:about.html.twig", "C:\\xampp\\htdocs\\LP_SIO\\SiteSIO\\src\\SIOBundle/Resources/views/Default/about.html.twig");
    }
}
