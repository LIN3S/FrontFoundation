<?php

/* node_modules/parsleyjs/bower_components/bootstrap/less/button-groups.less */
class __TwigTemplate_b6cd1b4bb39f53fd41b80e5504ec02229b88e2247b06bd6b57973fd139e66046 extends Twig_Template
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
        $__internal_6993eed886a617a21068cd448add4985096cbc4244c0ef2a073eec98937c6f8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6993eed886a617a21068cd448add4985096cbc4244c0ef2a073eec98937c6f8e->enter($__internal_6993eed886a617a21068cd448add4985096cbc4244c0ef2a073eec98937c6f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/bootstrap/less/button-groups.less"));

        // line 1
        echo "//
// Button groups
// --------------------------------------------------

// Make the div behave like a button
.btn-group,
.btn-group-vertical {
  position: relative;
  display: inline-block;
  vertical-align: middle; // match .btn alignment given font-size hack above
  > .btn {
    position: relative;
    float: left;
    // Bring the \"active\" button to the front
    &:hover,
    &:focus,
    &:active,
    &.active {
      z-index: 2;
    }
    &:focus {
      // Remove focus outline when dropdown JS adds it after closing the menu
      outline: none;
    }
  }
}

// Prevent double borders when buttons are next to each other
.btn-group {
  .btn + .btn,
  .btn + .btn-group,
  .btn-group + .btn,
  .btn-group + .btn-group {
    margin-left: -1px;
  }
}

// Optional: Group multiple button groups together for a toolbar
.btn-toolbar {
  .clearfix();

  .btn-group {
    float: left;
  }
  // Space out series of button groups
  > .btn,
  > .btn-group {
    + .btn,
    + .btn-group {
      margin-left: 5px;
    }
  }
}

.btn-group > .btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
  border-radius: 0;
}

// Set corners individual because sometimes a single button can be in a .btn-group and we need :first-child and :last-child to both match
.btn-group > .btn:first-child {
  margin-left: 0;
  &:not(:last-child):not(.dropdown-toggle) {
    .border-right-radius(0);
  }
}
// Need .dropdown-toggle since :last-child doesn't apply given a .dropdown-menu immediately after it
.btn-group > .btn:last-child:not(:first-child),
.btn-group > .dropdown-toggle:not(:first-child) {
  .border-left-radius(0);
}

// Custom edits for including btn-groups within btn-groups (useful for including dropdown buttons within a btn-group)
.btn-group > .btn-group {
  float: left;
}
.btn-group > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}
.btn-group > .btn-group:first-child {
  > .btn:last-child,
  > .dropdown-toggle {
    .border-right-radius(0);
  }
}
.btn-group > .btn-group:last-child > .btn:first-child {
  .border-left-radius(0);
}

// On active and open, don't show outline
.btn-group .dropdown-toggle:active,
.btn-group.open .dropdown-toggle {
  outline: 0;
}


// Sizing
//
// Remix the default button sizing classes into new ones for easier manipulation.

.btn-group-xs > .btn { .btn-xs(); }
.btn-group-sm > .btn { .btn-sm(); }
.btn-group-lg > .btn { .btn-lg(); }


// Split button dropdowns
// ----------------------

// Give the line between buttons some depth
.btn-group > .btn + .dropdown-toggle {
  padding-left: 8px;
  padding-right: 8px;
}
.btn-group > .btn-lg + .dropdown-toggle {
  padding-left: 12px;
  padding-right: 12px;
}

// The clickable button for toggling the menu
// Remove the gradient and set the same inset shadow as the :active state
.btn-group.open .dropdown-toggle {
  .box-shadow(inset 0 3px 5px rgba(0,0,0,.125));

  // Show no shadow for `.btn-link` since it has no other button styles.
  &.btn-link {
    .box-shadow(none);
  }
}


// Reposition the caret
.btn .caret {
  margin-left: 0;
}
// Carets in other button sizes
.btn-lg .caret {
  border-width: @caret-width-large @caret-width-large 0;
  border-bottom-width: 0;
}
// Upside down carets for .dropup
.dropup .btn-lg .caret {
  border-width: 0 @caret-width-large @caret-width-large;
}


// Vertical button groups
// ----------------------

.btn-group-vertical {
  > .btn,
  > .btn-group,
  > .btn-group > .btn {
    display: block;
    float: none;
    width: 100%;
    max-width: 100%;
  }

  // Clear floats so dropdown menus can be properly placed
  > .btn-group {
    .clearfix();
    > .btn {
      float: none;
    }
  }

  > .btn + .btn,
  > .btn + .btn-group,
  > .btn-group + .btn,
  > .btn-group + .btn-group {
    margin-top: -1px;
    margin-left: 0;
  }
}

.btn-group-vertical > .btn {
  &:not(:first-child):not(:last-child) {
    border-radius: 0;
  }
  &:first-child:not(:last-child) {
    border-top-right-radius: @border-radius-base;
    .border-bottom-radius(0);
  }
  &:last-child:not(:first-child) {
    border-bottom-left-radius: @border-radius-base;
    .border-top-radius(0);
  }
}
.btn-group-vertical > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}
.btn-group-vertical > .btn-group:first-child {
  > .btn:last-child,
  > .dropdown-toggle {
    .border-bottom-radius(0);
  }
}
.btn-group-vertical > .btn-group:last-child > .btn:first-child {
  .border-top-radius(0);
}



// Justified button groups
// ----------------------

.btn-group-justified {
  display: table;
  width: 100%;
  table-layout: fixed;
  border-collapse: separate;
  > .btn,
  > .btn-group {
    float: none;
    display: table-cell;
    width: 1%;
  }
  > .btn-group .btn {
    width: 100%;
  }
}


// Checkbox and radio options
[data-toggle=\"buttons\"] > .btn > input[type=\"radio\"],
[data-toggle=\"buttons\"] > .btn > input[type=\"checkbox\"] {
  display: none;
}
";
        
        $__internal_6993eed886a617a21068cd448add4985096cbc4244c0ef2a073eec98937c6f8e->leave($__internal_6993eed886a617a21068cd448add4985096cbc4244c0ef2a073eec98937c6f8e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/bootstrap/less/button-groups.less";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("//
// Button groups
// --------------------------------------------------

// Make the div behave like a button
.btn-group,
.btn-group-vertical {
  position: relative;
  display: inline-block;
  vertical-align: middle; // match .btn alignment given font-size hack above
  > .btn {
    position: relative;
    float: left;
    // Bring the \"active\" button to the front
    &:hover,
    &:focus,
    &:active,
    &.active {
      z-index: 2;
    }
    &:focus {
      // Remove focus outline when dropdown JS adds it after closing the menu
      outline: none;
    }
  }
}

// Prevent double borders when buttons are next to each other
.btn-group {
  .btn + .btn,
  .btn + .btn-group,
  .btn-group + .btn,
  .btn-group + .btn-group {
    margin-left: -1px;
  }
}

// Optional: Group multiple button groups together for a toolbar
.btn-toolbar {
  .clearfix();

  .btn-group {
    float: left;
  }
  // Space out series of button groups
  > .btn,
  > .btn-group {
    + .btn,
    + .btn-group {
      margin-left: 5px;
    }
  }
}

.btn-group > .btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
  border-radius: 0;
}

// Set corners individual because sometimes a single button can be in a .btn-group and we need :first-child and :last-child to both match
.btn-group > .btn:first-child {
  margin-left: 0;
  &:not(:last-child):not(.dropdown-toggle) {
    .border-right-radius(0);
  }
}
// Need .dropdown-toggle since :last-child doesn't apply given a .dropdown-menu immediately after it
.btn-group > .btn:last-child:not(:first-child),
.btn-group > .dropdown-toggle:not(:first-child) {
  .border-left-radius(0);
}

// Custom edits for including btn-groups within btn-groups (useful for including dropdown buttons within a btn-group)
.btn-group > .btn-group {
  float: left;
}
.btn-group > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}
.btn-group > .btn-group:first-child {
  > .btn:last-child,
  > .dropdown-toggle {
    .border-right-radius(0);
  }
}
.btn-group > .btn-group:last-child > .btn:first-child {
  .border-left-radius(0);
}

// On active and open, don't show outline
.btn-group .dropdown-toggle:active,
.btn-group.open .dropdown-toggle {
  outline: 0;
}


// Sizing
//
// Remix the default button sizing classes into new ones for easier manipulation.

.btn-group-xs > .btn { .btn-xs(); }
.btn-group-sm > .btn { .btn-sm(); }
.btn-group-lg > .btn { .btn-lg(); }


// Split button dropdowns
// ----------------------

// Give the line between buttons some depth
.btn-group > .btn + .dropdown-toggle {
  padding-left: 8px;
  padding-right: 8px;
}
.btn-group > .btn-lg + .dropdown-toggle {
  padding-left: 12px;
  padding-right: 12px;
}

// The clickable button for toggling the menu
// Remove the gradient and set the same inset shadow as the :active state
.btn-group.open .dropdown-toggle {
  .box-shadow(inset 0 3px 5px rgba(0,0,0,.125));

  // Show no shadow for `.btn-link` since it has no other button styles.
  &.btn-link {
    .box-shadow(none);
  }
}


// Reposition the caret
.btn .caret {
  margin-left: 0;
}
// Carets in other button sizes
.btn-lg .caret {
  border-width: @caret-width-large @caret-width-large 0;
  border-bottom-width: 0;
}
// Upside down carets for .dropup
.dropup .btn-lg .caret {
  border-width: 0 @caret-width-large @caret-width-large;
}


// Vertical button groups
// ----------------------

.btn-group-vertical {
  > .btn,
  > .btn-group,
  > .btn-group > .btn {
    display: block;
    float: none;
    width: 100%;
    max-width: 100%;
  }

  // Clear floats so dropdown menus can be properly placed
  > .btn-group {
    .clearfix();
    > .btn {
      float: none;
    }
  }

  > .btn + .btn,
  > .btn + .btn-group,
  > .btn-group + .btn,
  > .btn-group + .btn-group {
    margin-top: -1px;
    margin-left: 0;
  }
}

.btn-group-vertical > .btn {
  &:not(:first-child):not(:last-child) {
    border-radius: 0;
  }
  &:first-child:not(:last-child) {
    border-top-right-radius: @border-radius-base;
    .border-bottom-radius(0);
  }
  &:last-child:not(:first-child) {
    border-bottom-left-radius: @border-radius-base;
    .border-top-radius(0);
  }
}
.btn-group-vertical > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}
.btn-group-vertical > .btn-group:first-child {
  > .btn:last-child,
  > .dropdown-toggle {
    .border-bottom-radius(0);
  }
}
.btn-group-vertical > .btn-group:last-child > .btn:first-child {
  .border-top-radius(0);
}



// Justified button groups
// ----------------------

.btn-group-justified {
  display: table;
  width: 100%;
  table-layout: fixed;
  border-collapse: separate;
  > .btn,
  > .btn-group {
    float: none;
    display: table-cell;
    width: 1%;
  }
  > .btn-group .btn {
    width: 100%;
  }
}


// Checkbox and radio options
[data-toggle=\"buttons\"] > .btn > input[type=\"radio\"],
[data-toggle=\"buttons\"] > .btn > input[type=\"checkbox\"] {
  display: none;
}
", "node_modules/parsleyjs/bower_components/bootstrap/less/button-groups.less", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/bootstrap/less/button-groups.less");
    }
}
