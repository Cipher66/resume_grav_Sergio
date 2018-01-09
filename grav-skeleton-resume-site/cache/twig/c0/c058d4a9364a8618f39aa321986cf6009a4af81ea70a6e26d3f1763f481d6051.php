<?php

/* partials/footer.html.twig */
class __TwigTemplate_47a9e155ec0bedb33083e749e807a51e3799022e2a9d8c8fd5c5b313b62b1a5e extends Twig_Template
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
        echo "<div class=\"row footer\">
   <div class=\"large-12 small-12 medium-12 text-center \">
    <div class=\"border text-center \"></div>
    <p class=\"copyright\">Design by <a href=\"https://www.behance.net/fbaezb\">Fernando Baez</a>. Coding & Implementation by <a href=\"http://www.getgrav.org\">GRAV</a> team.</p>
   </div>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row footer\">
   <div class=\"large-12 small-12 medium-12 text-center \">
    <div class=\"border text-center \"></div>
    <p class=\"copyright\">Design by <a href=\"https://www.behance.net/fbaezb\">Fernando Baez</a>. Coding & Implementation by <a href=\"http://www.getgrav.org\">GRAV</a> team.</p>
   </div>
</div>", "partials/footer.html.twig", "/home/sergio/public_html/grav-skeleton-resume-site/user/themes/resume/templates/partials/footer.html.twig");
    }
}
