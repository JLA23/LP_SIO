<?php

/* SIOBundle:Default:index.html.twig */
class __TwigTemplate_d49a9beac532c9138ea7d1ba91efe63c4e4e92c8382f50e6fa8c81db0df7d3d7 extends Twig_Template
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
        $__internal_9102bfdbfd1487f89e9af46f52b08d1056a8f25273e00b6aca26398c59215958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9102bfdbfd1487f89e9af46f52b08d1056a8f25273e00b6aca26398c59215958->enter($__internal_9102bfdbfd1487f89e9af46f52b08d1056a8f25273e00b6aca26398c59215958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIOBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["base_dir"]) ? $context["base_dir"] : $this->getContext($context, "base_dir")), "html", null, true);
        
        $__internal_9102bfdbfd1487f89e9af46f52b08d1056a8f25273e00b6aca26398c59215958->leave($__internal_9102bfdbfd1487f89e9af46f52b08d1056a8f25273e00b6aca26398c59215958_prof);

    }

    public function getTemplateName()
    {
        return "SIOBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
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
{{ base_dir }}", "SIOBundle:Default:index.html.twig", "C:\\wamp64\\projets\\LP_SIO\\SiteSIO\\src\\SIOBundle/Resources/views/Default/index.html.twig");
    }
}
