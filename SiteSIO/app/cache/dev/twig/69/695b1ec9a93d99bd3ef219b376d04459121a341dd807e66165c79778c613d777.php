<?php

/* SIOBundle:Default:index2.html.twig */
class __TwigTemplate_7e5522231c4dca6b0c7c927ee3b0e33d4c1cd8d01a009f00c42b18cb245a77b6 extends Twig_Template
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
        $__internal_8f08b9970ed3aad559dcd08d64dd2697066ffd5806f721da122a5c4e6e9fab15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f08b9970ed3aad559dcd08d64dd2697066ffd5806f721da122a5c4e6e9fab15->enter($__internal_8f08b9970ed3aad559dcd08d64dd2697066ffd5806f721da122a5c4e6e9fab15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIOBundle:Default:index2.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_8f08b9970ed3aad559dcd08d64dd2697066ffd5806f721da122a5c4e6e9fab15->leave($__internal_8f08b9970ed3aad559dcd08d64dd2697066ffd5806f721da122a5c4e6e9fab15_prof);

    }

    public function getTemplateName()
    {
        return "SIOBundle:Default:index2.html.twig";
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
        return new Twig_Source("Hello World!
", "SIOBundle:Default:index2.html.twig", "C:\\wamp64\\projets\\LP_SIO\\SiteSIO\\src\\SIOBundle/Resources/views/Default/index2.html.twig");
    }
}
