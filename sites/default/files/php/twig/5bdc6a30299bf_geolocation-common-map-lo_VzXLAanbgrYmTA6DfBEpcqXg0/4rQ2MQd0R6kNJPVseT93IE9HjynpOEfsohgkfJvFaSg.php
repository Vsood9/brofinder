<?php

/* modules/geolocation/templates/geolocation-common-map-location.html.twig */
class __TwigTemplate_046c94b8b3e8cd4d697c11a701be2ad171a1782b4f693895196232827760bb83 extends Twig_Template
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
        $tags = array("if" => 15);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 10
        echo "<div
    class=\"geolocation\"
    data-lat=\"";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["position"] ?? null), "lat", array()), "html", null, true));
        echo "\"
    data-lng=\"";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["position"] ?? null), "lng", array()), "html", null, true));
        echo "\"
    typeof=\"Place\"
    ";
        // line 15
        if ( !twig_test_empty(($context["location_id"] ?? null))) {
            echo " data-location-id=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["location_id"] ?? null), "html", null, true));
            echo "\" ";
        }
        // line 16
        echo "    ";
        if (twig_test_empty(($context["disable_marker"] ?? null))) {
            // line 17
            echo "        data-set-marker=\"true\"
        ";
            // line 18
            if ( !twig_test_empty(($context["icon"] ?? null))) {
                echo " data-icon=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["icon"] ?? null), "html", null, true));
                echo "\" ";
            }
            // line 19
            echo "        ";
            if ( !twig_test_empty(($context["marker_label"] ?? null))) {
                echo " data-marker-label=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["marker_label"] ?? null), "html", null, true));
                echo "\" ";
            }
            // line 20
            echo "    ";
        }
        // line 21
        echo ">
    <span property=\"geo\" typeof=\"GeoCoordinates\">
        <meta property=\"latitude\" content=\"";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["position"] ?? null), "lat", array()), "html", null, true));
        echo "\" />
        <meta property=\"longitude\" content=\"";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["position"] ?? null), "lng", array()), "html", null, true));
        echo "\" />
    </span>
    <h2 class=\"location-title\" property=\"name\">";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</h2>
    <div class=\"location-content\">";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "</div>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/geolocation/templates/geolocation-common-map-location.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 27,  97 => 26,  92 => 24,  88 => 23,  84 => 21,  81 => 20,  74 => 19,  68 => 18,  65 => 17,  62 => 16,  56 => 15,  51 => 13,  47 => 12,  43 => 10,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/geolocation/templates/geolocation-common-map-location.html.twig", "C:\\xampp\\htdocs\\modules\\geolocation\\templates\\geolocation-common-map-location.html.twig");
    }
}
