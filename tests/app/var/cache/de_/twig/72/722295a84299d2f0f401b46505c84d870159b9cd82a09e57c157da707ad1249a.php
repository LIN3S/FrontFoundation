<?php

/* node_modules/parsleyjs/src/i18n/ca.js */
class __TwigTemplate_3f3ca226f651cda54ee52071aed1c06df56c30c257717b03a3595c1e8930d2f0 extends Twig_Template
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
        $__internal_722a86b6f7f332714d2eec4187b5ea0cdd41438c485fe709432fd86c32f00b63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_722a86b6f7f332714d2eec4187b5ea0cdd41438c485fe709432fd86c32f00b63->enter($__internal_722a86b6f7f332714d2eec4187b5ea0cdd41438c485fe709432fd86c32f00b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/ca.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('ca', {
  defaultMessage: \"Aquest valor sembla ser invàlid.\",
  type: {
    email:        \"Aquest valor ha de ser una adreça de correu electrònic vàlida.\",
    url:          \"Aquest valor ha de ser una URL vàlida.\",
    number:       \"Aquest valor ha de ser un nombre vàlid.\",
    integer:      \"Aquest valor ha de ser un nombre enter vàlid.\",
    digits:       \"Aquest valor només pot contenir dígits.\",
    alphanum:     \"Aquest valor ha de ser alfanumèric.\"
  },
  notblank:       \"Aquest valor no pot ser buit.\",
  required:       \"Aquest valor és obligatori.\",
  pattern:        \"Aquest valor és incorrecte.\",
  min:            \"Aquest valor no pot ser menor que %s.\",
  max:            \"Aquest valor no pot ser major que %s.\",
  range:          \"Aquest valor ha d'estar entre %s i %s.\",
  minlength:      \"Aquest valor és massa curt. La longitud mínima és de %s caràcters.\",
  maxlength:      \"Aquest valor és massa llarg. La longitud màxima és de %s caràcters.\",
  length:         \"La longitud d'aquest valor ha de ser d'entre %s i %s caràcters.\",
  mincheck:       \"Has de marcar un mínim de %s opcions.\",
  maxcheck:       \"Has de marcar un màxim de %s opcions.\",
  check:          \"Has de marcar entre %s i %s opcions.\",
  equalto:        \"Aquest valor ha de ser el mateix.\"
});

Parsley.setLocale('ca');
";
        
        $__internal_722a86b6f7f332714d2eec4187b5ea0cdd41438c485fe709432fd86c32f00b63->leave($__internal_722a86b6f7f332714d2eec4187b5ea0cdd41438c485fe709432fd86c32f00b63_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/ca.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('ca', {
  defaultMessage: \"Aquest valor sembla ser invàlid.\",
  type: {
    email:        \"Aquest valor ha de ser una adreça de correu electrònic vàlida.\",
    url:          \"Aquest valor ha de ser una URL vàlida.\",
    number:       \"Aquest valor ha de ser un nombre vàlid.\",
    integer:      \"Aquest valor ha de ser un nombre enter vàlid.\",
    digits:       \"Aquest valor només pot contenir dígits.\",
    alphanum:     \"Aquest valor ha de ser alfanumèric.\"
  },
  notblank:       \"Aquest valor no pot ser buit.\",
  required:       \"Aquest valor és obligatori.\",
  pattern:        \"Aquest valor és incorrecte.\",
  min:            \"Aquest valor no pot ser menor que %s.\",
  max:            \"Aquest valor no pot ser major que %s.\",
  range:          \"Aquest valor ha d'estar entre %s i %s.\",
  minlength:      \"Aquest valor és massa curt. La longitud mínima és de %s caràcters.\",
  maxlength:      \"Aquest valor és massa llarg. La longitud màxima és de %s caràcters.\",
  length:         \"La longitud d'aquest valor ha de ser d'entre %s i %s caràcters.\",
  mincheck:       \"Has de marcar un mínim de %s opcions.\",
  maxcheck:       \"Has de marcar un màxim de %s opcions.\",
  check:          \"Has de marcar entre %s i %s opcions.\",
  equalto:        \"Aquest valor ha de ser el mateix.\"
});

Parsley.setLocale('ca');
", "node_modules/parsleyjs/src/i18n/ca.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/ca.js");
    }
}
