<?php

/* node_modules/parsleyjs/bower_components/bootstrap/less/theme.less */
class __TwigTemplate_db9c42b89a68ced3bde816ada25bea92fb66f087d6aeba280823e91324453019 extends Twig_Template
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
        $__internal_54239a5cce2bdff946255d5f44076775bb071ac770c21f75d595fdd078af6d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54239a5cce2bdff946255d5f44076775bb071ac770c21f75d595fdd078af6d30->enter($__internal_54239a5cce2bdff946255d5f44076775bb071ac770c21f75d595fdd078af6d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/bootstrap/less/theme.less"));

        // line 1
        echo "
//
// Load core variables and mixins
// --------------------------------------------------

@import \"variables.less\";
@import \"mixins.less\";



//
// Buttons
// --------------------------------------------------

// Common styles
.btn-default,
.btn-primary,
.btn-success,
.btn-info,
.btn-warning,
.btn-danger {
  text-shadow: 0 -1px 0 rgba(0,0,0,.2);
  @shadow: inset 0 1px 0 rgba(255,255,255,.15), 0 1px 1px rgba(0,0,0,.075);
  .box-shadow(@shadow);

  // Reset the shadow
  &:active,
  &.active {
    .box-shadow(inset 0 3px 5px rgba(0,0,0,.125));
  }
}

// Mixin for generating new styles
.btn-styles(@btn-color: #555) {
  #gradient > .vertical(@start-color: @btn-color; @end-color: darken(@btn-color, 12%));
  .reset-filter(); // Disable gradients for IE9 because filter bleeds through rounded corners
  background-repeat: repeat-x;
  border-color: darken(@btn-color, 14%);

  &:hover,
  &:focus  {
    background-color: darken(@btn-color, 12%);
    background-position: 0 -15px;
  }

  &:active,
  &.active {
    background-color: darken(@btn-color, 12%);
    border-color: darken(@btn-color, 14%);
  }
}

// Common styles
.btn {
  // Remove the gradient for the pressed/active state
  &:active,
  &.active {
    background-image: none;
  }
}

// Apply the mixin to the buttons
.btn-default { .btn-styles(@btn-default-bg); text-shadow: 0 1px 0 #fff; border-color: #ccc; }
.btn-primary { .btn-styles(@btn-primary-bg); }
.btn-success { .btn-styles(@btn-success-bg); }
.btn-warning { .btn-styles(@btn-warning-bg); }
.btn-danger  { .btn-styles(@btn-danger-bg); }
.btn-info    { .btn-styles(@btn-info-bg); }



//
// Images
// --------------------------------------------------

.thumbnail,
.img-thumbnail {
  .box-shadow(0 1px 2px rgba(0,0,0,.075));
}



//
// Dropdowns
// --------------------------------------------------

.dropdown-menu > li > a:hover,
.dropdown-menu > li > a:focus {
  #gradient > .vertical(@start-color: @dropdown-link-hover-bg; @end-color: darken(@dropdown-link-hover-bg, 5%));
  background-color: darken(@dropdown-link-hover-bg, 5%);
}
.dropdown-menu > .active > a,
.dropdown-menu > .active > a:hover,
.dropdown-menu > .active > a:focus {
  #gradient > .vertical(@start-color: @dropdown-link-active-bg; @end-color: darken(@dropdown-link-active-bg, 5%));
  background-color: darken(@dropdown-link-active-bg, 5%);
}



//
// Navbar
// --------------------------------------------------

// Default navbar
.navbar-default {
  #gradient > .vertical(@start-color: lighten(@navbar-default-bg, 10%); @end-color: @navbar-default-bg);
  .reset-filter(); // Remove gradient in IE<10 to fix bug where dropdowns don't get triggered
  border-radius: @navbar-border-radius;
  @shadow: inset 0 1px 0 rgba(255,255,255,.15), 0 1px 5px rgba(0,0,0,.075);
  .box-shadow(@shadow);

  .navbar-nav > .active > a {
    #gradient > .vertical(@start-color: darken(@navbar-default-bg, 5%); @end-color: darken(@navbar-default-bg, 2%));
    .box-shadow(inset 0 3px 9px rgba(0,0,0,.075));
  }
}
.navbar-brand,
.navbar-nav > li > a {
  text-shadow: 0 1px 0 rgba(255,255,255,.25);
}

// Inverted navbar
.navbar-inverse {
  #gradient > .vertical(@start-color: lighten(@navbar-inverse-bg, 10%); @end-color: @navbar-inverse-bg);
  .reset-filter(); // Remove gradient in IE<10 to fix bug where dropdowns don't get triggered

  .navbar-nav > .active > a {
    #gradient > .vertical(@start-color: @navbar-inverse-bg; @end-color: lighten(@navbar-inverse-bg, 2.5%));
    .box-shadow(inset 0 3px 9px rgba(0,0,0,.25));
  }

  .navbar-brand,
  .navbar-nav > li > a {
    text-shadow: 0 -1px 0 rgba(0,0,0,.25);
  }
}

// Undo rounded corners in static and fixed navbars
.navbar-static-top,
.navbar-fixed-top,
.navbar-fixed-bottom {
  border-radius: 0;
}



//
// Alerts
// --------------------------------------------------

// Common styles
.alert {
  text-shadow: 0 1px 0 rgba(255,255,255,.2);
  @shadow: inset 0 1px 0 rgba(255,255,255,.25), 0 1px 2px rgba(0,0,0,.05);
  .box-shadow(@shadow);
}

// Mixin for generating new styles
.alert-styles(@color) {
  #gradient > .vertical(@start-color: @color; @end-color: darken(@color, 7.5%));
  border-color: darken(@color, 15%);
}

// Apply the mixin to the alerts
.alert-success    { .alert-styles(@alert-success-bg); }
.alert-info       { .alert-styles(@alert-info-bg); }
.alert-warning    { .alert-styles(@alert-warning-bg); }
.alert-danger     { .alert-styles(@alert-danger-bg); }



//
// Progress bars
// --------------------------------------------------

// Give the progress background some depth
.progress {
  #gradient > .vertical(@start-color: darken(@progress-bg, 4%); @end-color: @progress-bg)
}

// Mixin for generating new styles
.progress-bar-styles(@color) {
  #gradient > .vertical(@start-color: @color; @end-color: darken(@color, 10%));
}

// Apply the mixin to the progress bars
.progress-bar            { .progress-bar-styles(@progress-bar-bg); }
.progress-bar-success    { .progress-bar-styles(@progress-bar-success-bg); }
.progress-bar-info       { .progress-bar-styles(@progress-bar-info-bg); }
.progress-bar-warning    { .progress-bar-styles(@progress-bar-warning-bg); }
.progress-bar-danger     { .progress-bar-styles(@progress-bar-danger-bg); }



//
// List groups
// --------------------------------------------------

.list-group {
  border-radius: @border-radius-base;
  .box-shadow(0 1px 2px rgba(0,0,0,.075));
}
.list-group-item.active,
.list-group-item.active:hover,
.list-group-item.active:focus {
  text-shadow: 0 -1px 0 darken(@list-group-active-bg, 10%);
  #gradient > .vertical(@start-color: @list-group-active-bg; @end-color: darken(@list-group-active-bg, 7.5%));
  border-color: darken(@list-group-active-border, 7.5%);
}



//
// Panels
// --------------------------------------------------

// Common styles
.panel {
  .box-shadow(0 1px 2px rgba(0,0,0,.05));
}

// Mixin for generating new styles
.panel-heading-styles(@color) {
  #gradient > .vertical(@start-color: @color; @end-color: darken(@color, 5%));
}

// Apply the mixin to the panel headings only
.panel-default > .panel-heading   { .panel-heading-styles(@panel-default-heading-bg); }
.panel-primary > .panel-heading   { .panel-heading-styles(@panel-primary-heading-bg); }
.panel-success > .panel-heading   { .panel-heading-styles(@panel-success-heading-bg); }
.panel-info > .panel-heading      { .panel-heading-styles(@panel-info-heading-bg); }
.panel-warning > .panel-heading   { .panel-heading-styles(@panel-warning-heading-bg); }
.panel-danger > .panel-heading    { .panel-heading-styles(@panel-danger-heading-bg); }



//
// Wells
// --------------------------------------------------

.well {
  #gradient > .vertical(@start-color: darken(@well-bg, 5%); @end-color: @well-bg);
  border-color: darken(@well-bg, 10%);
  @shadow: inset 0 1px 3px rgba(0,0,0,.05), 0 1px 0 rgba(255,255,255,.1);
  .box-shadow(@shadow);
}
";
        
        $__internal_54239a5cce2bdff946255d5f44076775bb071ac770c21f75d595fdd078af6d30->leave($__internal_54239a5cce2bdff946255d5f44076775bb071ac770c21f75d595fdd078af6d30_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/bootstrap/less/theme.less";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
//
// Load core variables and mixins
// --------------------------------------------------

@import \"variables.less\";
@import \"mixins.less\";



//
// Buttons
// --------------------------------------------------

// Common styles
.btn-default,
.btn-primary,
.btn-success,
.btn-info,
.btn-warning,
.btn-danger {
  text-shadow: 0 -1px 0 rgba(0,0,0,.2);
  @shadow: inset 0 1px 0 rgba(255,255,255,.15), 0 1px 1px rgba(0,0,0,.075);
  .box-shadow(@shadow);

  // Reset the shadow
  &:active,
  &.active {
    .box-shadow(inset 0 3px 5px rgba(0,0,0,.125));
  }
}

// Mixin for generating new styles
.btn-styles(@btn-color: #555) {
  #gradient > .vertical(@start-color: @btn-color; @end-color: darken(@btn-color, 12%));
  .reset-filter(); // Disable gradients for IE9 because filter bleeds through rounded corners
  background-repeat: repeat-x;
  border-color: darken(@btn-color, 14%);

  &:hover,
  &:focus  {
    background-color: darken(@btn-color, 12%);
    background-position: 0 -15px;
  }

  &:active,
  &.active {
    background-color: darken(@btn-color, 12%);
    border-color: darken(@btn-color, 14%);
  }
}

// Common styles
.btn {
  // Remove the gradient for the pressed/active state
  &:active,
  &.active {
    background-image: none;
  }
}

// Apply the mixin to the buttons
.btn-default { .btn-styles(@btn-default-bg); text-shadow: 0 1px 0 #fff; border-color: #ccc; }
.btn-primary { .btn-styles(@btn-primary-bg); }
.btn-success { .btn-styles(@btn-success-bg); }
.btn-warning { .btn-styles(@btn-warning-bg); }
.btn-danger  { .btn-styles(@btn-danger-bg); }
.btn-info    { .btn-styles(@btn-info-bg); }



//
// Images
// --------------------------------------------------

.thumbnail,
.img-thumbnail {
  .box-shadow(0 1px 2px rgba(0,0,0,.075));
}



//
// Dropdowns
// --------------------------------------------------

.dropdown-menu > li > a:hover,
.dropdown-menu > li > a:focus {
  #gradient > .vertical(@start-color: @dropdown-link-hover-bg; @end-color: darken(@dropdown-link-hover-bg, 5%));
  background-color: darken(@dropdown-link-hover-bg, 5%);
}
.dropdown-menu > .active > a,
.dropdown-menu > .active > a:hover,
.dropdown-menu > .active > a:focus {
  #gradient > .vertical(@start-color: @dropdown-link-active-bg; @end-color: darken(@dropdown-link-active-bg, 5%));
  background-color: darken(@dropdown-link-active-bg, 5%);
}



//
// Navbar
// --------------------------------------------------

// Default navbar
.navbar-default {
  #gradient > .vertical(@start-color: lighten(@navbar-default-bg, 10%); @end-color: @navbar-default-bg);
  .reset-filter(); // Remove gradient in IE<10 to fix bug where dropdowns don't get triggered
  border-radius: @navbar-border-radius;
  @shadow: inset 0 1px 0 rgba(255,255,255,.15), 0 1px 5px rgba(0,0,0,.075);
  .box-shadow(@shadow);

  .navbar-nav > .active > a {
    #gradient > .vertical(@start-color: darken(@navbar-default-bg, 5%); @end-color: darken(@navbar-default-bg, 2%));
    .box-shadow(inset 0 3px 9px rgba(0,0,0,.075));
  }
}
.navbar-brand,
.navbar-nav > li > a {
  text-shadow: 0 1px 0 rgba(255,255,255,.25);
}

// Inverted navbar
.navbar-inverse {
  #gradient > .vertical(@start-color: lighten(@navbar-inverse-bg, 10%); @end-color: @navbar-inverse-bg);
  .reset-filter(); // Remove gradient in IE<10 to fix bug where dropdowns don't get triggered

  .navbar-nav > .active > a {
    #gradient > .vertical(@start-color: @navbar-inverse-bg; @end-color: lighten(@navbar-inverse-bg, 2.5%));
    .box-shadow(inset 0 3px 9px rgba(0,0,0,.25));
  }

  .navbar-brand,
  .navbar-nav > li > a {
    text-shadow: 0 -1px 0 rgba(0,0,0,.25);
  }
}

// Undo rounded corners in static and fixed navbars
.navbar-static-top,
.navbar-fixed-top,
.navbar-fixed-bottom {
  border-radius: 0;
}



//
// Alerts
// --------------------------------------------------

// Common styles
.alert {
  text-shadow: 0 1px 0 rgba(255,255,255,.2);
  @shadow: inset 0 1px 0 rgba(255,255,255,.25), 0 1px 2px rgba(0,0,0,.05);
  .box-shadow(@shadow);
}

// Mixin for generating new styles
.alert-styles(@color) {
  #gradient > .vertical(@start-color: @color; @end-color: darken(@color, 7.5%));
  border-color: darken(@color, 15%);
}

// Apply the mixin to the alerts
.alert-success    { .alert-styles(@alert-success-bg); }
.alert-info       { .alert-styles(@alert-info-bg); }
.alert-warning    { .alert-styles(@alert-warning-bg); }
.alert-danger     { .alert-styles(@alert-danger-bg); }



//
// Progress bars
// --------------------------------------------------

// Give the progress background some depth
.progress {
  #gradient > .vertical(@start-color: darken(@progress-bg, 4%); @end-color: @progress-bg)
}

// Mixin for generating new styles
.progress-bar-styles(@color) {
  #gradient > .vertical(@start-color: @color; @end-color: darken(@color, 10%));
}

// Apply the mixin to the progress bars
.progress-bar            { .progress-bar-styles(@progress-bar-bg); }
.progress-bar-success    { .progress-bar-styles(@progress-bar-success-bg); }
.progress-bar-info       { .progress-bar-styles(@progress-bar-info-bg); }
.progress-bar-warning    { .progress-bar-styles(@progress-bar-warning-bg); }
.progress-bar-danger     { .progress-bar-styles(@progress-bar-danger-bg); }



//
// List groups
// --------------------------------------------------

.list-group {
  border-radius: @border-radius-base;
  .box-shadow(0 1px 2px rgba(0,0,0,.075));
}
.list-group-item.active,
.list-group-item.active:hover,
.list-group-item.active:focus {
  text-shadow: 0 -1px 0 darken(@list-group-active-bg, 10%);
  #gradient > .vertical(@start-color: @list-group-active-bg; @end-color: darken(@list-group-active-bg, 7.5%));
  border-color: darken(@list-group-active-border, 7.5%);
}



//
// Panels
// --------------------------------------------------

// Common styles
.panel {
  .box-shadow(0 1px 2px rgba(0,0,0,.05));
}

// Mixin for generating new styles
.panel-heading-styles(@color) {
  #gradient > .vertical(@start-color: @color; @end-color: darken(@color, 5%));
}

// Apply the mixin to the panel headings only
.panel-default > .panel-heading   { .panel-heading-styles(@panel-default-heading-bg); }
.panel-primary > .panel-heading   { .panel-heading-styles(@panel-primary-heading-bg); }
.panel-success > .panel-heading   { .panel-heading-styles(@panel-success-heading-bg); }
.panel-info > .panel-heading      { .panel-heading-styles(@panel-info-heading-bg); }
.panel-warning > .panel-heading   { .panel-heading-styles(@panel-warning-heading-bg); }
.panel-danger > .panel-heading    { .panel-heading-styles(@panel-danger-heading-bg); }



//
// Wells
// --------------------------------------------------

.well {
  #gradient > .vertical(@start-color: darken(@well-bg, 5%); @end-color: @well-bg);
  border-color: darken(@well-bg, 10%);
  @shadow: inset 0 1px 3px rgba(0,0,0,.05), 0 1px 0 rgba(255,255,255,.1);
  .box-shadow(@shadow);
}
", "node_modules/parsleyjs/bower_components/bootstrap/less/theme.less", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/bootstrap/less/theme.less");
    }
}
