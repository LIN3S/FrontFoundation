<?php

/* node_modules/parsleyjs/bower_components/bootstrap/less/forms.less */
class __TwigTemplate_5855ac0e85f88cf155e41b7cbb5598f2e780933310dd30fe7e461a0ba8b77cce extends Twig_Template
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
        $__internal_5a38cc08d21b71dc84bfbfc7c57edf06bd80c47a1b4ca9d3832165a39ae3fb59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a38cc08d21b71dc84bfbfc7c57edf06bd80c47a1b4ca9d3832165a39ae3fb59->enter($__internal_5a38cc08d21b71dc84bfbfc7c57edf06bd80c47a1b4ca9d3832165a39ae3fb59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/bootstrap/less/forms.less"));

        // line 1
        echo "//
// Forms
// --------------------------------------------------


// Normalize non-controls
//
// Restyle and baseline non-control form elements.

fieldset {
  padding: 0;
  margin: 0;
  border: 0;
}

legend {
  display: block;
  width: 100%;
  padding: 0;
  margin-bottom: @line-height-computed;
  font-size: (@font-size-base * 1.5);
  line-height: inherit;
  color: @legend-color;
  border: 0;
  border-bottom: 1px solid @legend-border-color;
}

label {
  display: inline-block;
  margin-bottom: 5px;
  font-weight: bold;
}


// Normalize form controls

// Override content-box in Normalize (* isn't specific enough)
input[type=\"search\"] {
  .box-sizing(border-box);
}

// Position radios and checkboxes better
input[type=\"radio\"],
input[type=\"checkbox\"] {
  margin: 4px 0 0;
  margin-top: 1px \\9; /* IE8-9 */
  line-height: normal;
}

// Set the height of select and file controls to match text inputs
input[type=\"file\"] {
  display: block;
}

// Make multiple select elements height not fixed
select[multiple],
select[size] {
  height: auto;
}

// Fix optgroup Firefox bug per https://github.com/twbs/bootstrap/issues/7611
select optgroup {
  font-size: inherit;
  font-style: inherit;
  font-family: inherit;
}

// Focus for select, file, radio, and checkbox
input[type=\"file\"]:focus,
input[type=\"radio\"]:focus,
input[type=\"checkbox\"]:focus {
  .tab-focus();
}

// Fix for Chrome number input
// Setting certain font-sizes causes the `I` bar to appear on hover of the bottom increment button.
// See https://github.com/twbs/bootstrap/issues/8350 for more.
input[type=\"number\"] {
  &::-webkit-outer-spin-button,
  &::-webkit-inner-spin-button {
    height: auto;
  }
}

// Adjust output element
output {
  display: block;
  padding-top: (@padding-base-vertical + 1);
  font-size: @font-size-base;
  line-height: @line-height-base;
  color: @input-color;
  vertical-align: middle;
}


// Common form controls
//
// Shared size and type resets for form controls. Apply `.form-control` to any
// of the following form controls:
//
// select
// textarea
// input[type=\"text\"]
// input[type=\"password\"]
// input[type=\"datetime\"]
// input[type=\"datetime-local\"]
// input[type=\"date\"]
// input[type=\"month\"]
// input[type=\"time\"]
// input[type=\"week\"]
// input[type=\"number\"]
// input[type=\"email\"]
// input[type=\"url\"]
// input[type=\"search\"]
// input[type=\"tel\"]
// input[type=\"color\"]

.form-control {
  display: block;
  width: 100%;
  height: @input-height-base; // Make inputs at least the height of their button counterpart (base line-height + padding + border)
  padding: @padding-base-vertical @padding-base-horizontal;
  font-size: @font-size-base;
  line-height: @line-height-base;
  color: @input-color;
  vertical-align: middle;
  background-color: @input-bg;
  background-image: none; // Reset unusual Firefox-on-Android default style; see https://github.com/necolas/normalize.css/issues/214
  border: 1px solid @input-border;
  border-radius: @input-border-radius;
  .box-shadow(inset 0 1px 1px rgba(0,0,0,.075));
  .transition(~\"border-color ease-in-out .15s, box-shadow ease-in-out .15s\");

  // Customize the `:focus` state to imitate native WebKit styles.
  .form-control-focus();

  // Placeholder
  //
  // Placeholder text gets special styles because when browsers invalidate entire
  // lines if it doesn't understand a selector/
  .placeholder();

  // Disabled and read-only inputs
  // Note: HTML5 says that controls under a fieldset > legend:first-child won't
  // be disabled if the fieldset is disabled. Due to implementation difficulty,
  // we don't honor that edge case; we style them as disabled anyway.
  &[disabled],
  &[readonly],
  fieldset[disabled] & {
    cursor: not-allowed;
    background-color: @input-bg-disabled;
  }

  // Reset height for `textarea`s
  textarea& {
    height: auto;
  }
}


// Form groups
//
// Designed to help with the organization and spacing of vertical forms. For
// horizontal forms, use the predefined grid classes.

.form-group {
  margin-bottom: 15px;
}


// Checkboxes and radios
//
// Indent the labels to position radios/checkboxes as hanging controls.

.radio,
.checkbox {
  display: block;
  min-height: @line-height-computed; // clear the floating input if there is no label text
  margin-top: 10px;
  margin-bottom: 10px;
  padding-left: 20px;
  vertical-align: middle;
  label {
    display: inline;
    margin-bottom: 0;
    font-weight: normal;
    cursor: pointer;
  }
}
.radio input[type=\"radio\"],
.radio-inline input[type=\"radio\"],
.checkbox input[type=\"checkbox\"],
.checkbox-inline input[type=\"checkbox\"] {
  float: left;
  margin-left: -20px;
}
.radio + .radio,
.checkbox + .checkbox {
  margin-top: -5px; // Move up sibling radios or checkboxes for tighter spacing
}

// Radios and checkboxes on same line
.radio-inline,
.checkbox-inline {
  display: inline-block;
  padding-left: 20px;
  margin-bottom: 0;
  vertical-align: middle;
  font-weight: normal;
  cursor: pointer;
}
.radio-inline + .radio-inline,
.checkbox-inline + .checkbox-inline {
  margin-top: 0;
  margin-left: 10px; // space out consecutive inline controls
}

// Apply same disabled cursor tweak as for inputs
//
// Note: Neither radios nor checkboxes can be readonly.
input[type=\"radio\"],
input[type=\"checkbox\"],
.radio,
.radio-inline,
.checkbox,
.checkbox-inline {
  &[disabled],
  fieldset[disabled] & {
    cursor: not-allowed;
  }
}

// Form control sizing
.input-sm {
  .input-size(@input-height-small; @padding-small-vertical; @padding-small-horizontal; @font-size-small; @line-height-small; @border-radius-small);
}

.input-lg {
  .input-size(@input-height-large; @padding-large-vertical; @padding-large-horizontal; @font-size-large; @line-height-large; @border-radius-large);
}


// Form control feedback states
//
// Apply contextual and semantic states to individual form controls.

// Warning
.has-warning {
  .form-control-validation(@state-warning-text; @state-warning-text; @state-warning-bg);
}
// Error
.has-error {
  .form-control-validation(@state-danger-text; @state-danger-text; @state-danger-bg);
}
// Success
.has-success {
  .form-control-validation(@state-success-text; @state-success-text; @state-success-bg);
}


// Static form control text
//
// Apply class to a `p` element to make any string of text align with labels in
// a horizontal form layout.

.form-control-static {
  margin-bottom: 0; // Remove default margin from `p`
}


// Help text
//
// Apply to any element you wish to create light text for placement immediately
// below a form control. Use for general help, formatting, or instructional text.

.help-block {
  display: block; // account for any element using help-block
  margin-top: 5px;
  margin-bottom: 10px;
  color: lighten(@text-color, 25%); // lighten the text some for contrast
}



// Inline forms
//
// Make forms appear inline(-block) by adding the `.form-inline` class. Inline
// forms begin stacked on extra small (mobile) devices and then go inline when
// viewports reach <768px.
//
// Requires wrapping inputs and labels with `.form-group` for proper display of
// default HTML form controls and our custom form controls (e.g., input groups).
//
// Heads up! This is mixin-ed into `.navbar-form` in navbars.less.

.form-inline {

  // Kick in the inline
  @media (min-width: @screen-sm) {
    // Inline-block all the things for \"inline\"
    .form-group  {
      display: inline-block;
      margin-bottom: 0;
      vertical-align: middle;
    }

    // In navbar-form, allow folks to *not* use `.form-group`
    .form-control {
      display: inline-block;
    }

    // Override `width: 100%;` when not within a `.form-group`
    select.form-control {
      width: auto;
    }

    // Remove default margin on radios/checkboxes that were used for stacking, and
    // then undo the floating of radios and checkboxes to match (which also avoids
    // a bug in WebKit: https://github.com/twbs/bootstrap/issues/1969).
    .radio,
    .checkbox {
      display: inline-block;
      margin-top: 0;
      margin-bottom: 0;
      padding-left: 0;
    }
    .radio input[type=\"radio\"],
    .checkbox input[type=\"checkbox\"] {
      float: none;
      margin-left: 0;
    }
  }
}


// Horizontal forms
//
// Horizontal forms are built on grid classes and allow you to create forms with
// labels on the left and inputs on the right.

.form-horizontal {

  // Consistent vertical alignment of labels, radios, and checkboxes
  .control-label,
  .radio,
  .checkbox,
  .radio-inline,
  .checkbox-inline {
    margin-top: 0;
    margin-bottom: 0;
    padding-top: (@padding-base-vertical + 1); // Default padding plus a border
  }
  // Account for padding we're adding to ensure the alignment and of help text
  // and other content below items
  .radio,
  .checkbox {
    min-height: @line-height-computed + (@padding-base-vertical + 1);
  }

  // Make form groups behave like rows
  .form-group {
    .make-row();
  }

  .form-control-static {
    padding-top: (@padding-base-vertical + 1);
  }

  // Only right align form labels here when the columns stop stacking
  @media (min-width: @screen-sm-min) {
    .control-label {
      text-align: right;
    }
  }
}
";
        
        $__internal_5a38cc08d21b71dc84bfbfc7c57edf06bd80c47a1b4ca9d3832165a39ae3fb59->leave($__internal_5a38cc08d21b71dc84bfbfc7c57edf06bd80c47a1b4ca9d3832165a39ae3fb59_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/bootstrap/less/forms.less";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("//
// Forms
// --------------------------------------------------


// Normalize non-controls
//
// Restyle and baseline non-control form elements.

fieldset {
  padding: 0;
  margin: 0;
  border: 0;
}

legend {
  display: block;
  width: 100%;
  padding: 0;
  margin-bottom: @line-height-computed;
  font-size: (@font-size-base * 1.5);
  line-height: inherit;
  color: @legend-color;
  border: 0;
  border-bottom: 1px solid @legend-border-color;
}

label {
  display: inline-block;
  margin-bottom: 5px;
  font-weight: bold;
}


// Normalize form controls

// Override content-box in Normalize (* isn't specific enough)
input[type=\"search\"] {
  .box-sizing(border-box);
}

// Position radios and checkboxes better
input[type=\"radio\"],
input[type=\"checkbox\"] {
  margin: 4px 0 0;
  margin-top: 1px \\9; /* IE8-9 */
  line-height: normal;
}

// Set the height of select and file controls to match text inputs
input[type=\"file\"] {
  display: block;
}

// Make multiple select elements height not fixed
select[multiple],
select[size] {
  height: auto;
}

// Fix optgroup Firefox bug per https://github.com/twbs/bootstrap/issues/7611
select optgroup {
  font-size: inherit;
  font-style: inherit;
  font-family: inherit;
}

// Focus for select, file, radio, and checkbox
input[type=\"file\"]:focus,
input[type=\"radio\"]:focus,
input[type=\"checkbox\"]:focus {
  .tab-focus();
}

// Fix for Chrome number input
// Setting certain font-sizes causes the `I` bar to appear on hover of the bottom increment button.
// See https://github.com/twbs/bootstrap/issues/8350 for more.
input[type=\"number\"] {
  &::-webkit-outer-spin-button,
  &::-webkit-inner-spin-button {
    height: auto;
  }
}

// Adjust output element
output {
  display: block;
  padding-top: (@padding-base-vertical + 1);
  font-size: @font-size-base;
  line-height: @line-height-base;
  color: @input-color;
  vertical-align: middle;
}


// Common form controls
//
// Shared size and type resets for form controls. Apply `.form-control` to any
// of the following form controls:
//
// select
// textarea
// input[type=\"text\"]
// input[type=\"password\"]
// input[type=\"datetime\"]
// input[type=\"datetime-local\"]
// input[type=\"date\"]
// input[type=\"month\"]
// input[type=\"time\"]
// input[type=\"week\"]
// input[type=\"number\"]
// input[type=\"email\"]
// input[type=\"url\"]
// input[type=\"search\"]
// input[type=\"tel\"]
// input[type=\"color\"]

.form-control {
  display: block;
  width: 100%;
  height: @input-height-base; // Make inputs at least the height of their button counterpart (base line-height + padding + border)
  padding: @padding-base-vertical @padding-base-horizontal;
  font-size: @font-size-base;
  line-height: @line-height-base;
  color: @input-color;
  vertical-align: middle;
  background-color: @input-bg;
  background-image: none; // Reset unusual Firefox-on-Android default style; see https://github.com/necolas/normalize.css/issues/214
  border: 1px solid @input-border;
  border-radius: @input-border-radius;
  .box-shadow(inset 0 1px 1px rgba(0,0,0,.075));
  .transition(~\"border-color ease-in-out .15s, box-shadow ease-in-out .15s\");

  // Customize the `:focus` state to imitate native WebKit styles.
  .form-control-focus();

  // Placeholder
  //
  // Placeholder text gets special styles because when browsers invalidate entire
  // lines if it doesn't understand a selector/
  .placeholder();

  // Disabled and read-only inputs
  // Note: HTML5 says that controls under a fieldset > legend:first-child won't
  // be disabled if the fieldset is disabled. Due to implementation difficulty,
  // we don't honor that edge case; we style them as disabled anyway.
  &[disabled],
  &[readonly],
  fieldset[disabled] & {
    cursor: not-allowed;
    background-color: @input-bg-disabled;
  }

  // Reset height for `textarea`s
  textarea& {
    height: auto;
  }
}


// Form groups
//
// Designed to help with the organization and spacing of vertical forms. For
// horizontal forms, use the predefined grid classes.

.form-group {
  margin-bottom: 15px;
}


// Checkboxes and radios
//
// Indent the labels to position radios/checkboxes as hanging controls.

.radio,
.checkbox {
  display: block;
  min-height: @line-height-computed; // clear the floating input if there is no label text
  margin-top: 10px;
  margin-bottom: 10px;
  padding-left: 20px;
  vertical-align: middle;
  label {
    display: inline;
    margin-bottom: 0;
    font-weight: normal;
    cursor: pointer;
  }
}
.radio input[type=\"radio\"],
.radio-inline input[type=\"radio\"],
.checkbox input[type=\"checkbox\"],
.checkbox-inline input[type=\"checkbox\"] {
  float: left;
  margin-left: -20px;
}
.radio + .radio,
.checkbox + .checkbox {
  margin-top: -5px; // Move up sibling radios or checkboxes for tighter spacing
}

// Radios and checkboxes on same line
.radio-inline,
.checkbox-inline {
  display: inline-block;
  padding-left: 20px;
  margin-bottom: 0;
  vertical-align: middle;
  font-weight: normal;
  cursor: pointer;
}
.radio-inline + .radio-inline,
.checkbox-inline + .checkbox-inline {
  margin-top: 0;
  margin-left: 10px; // space out consecutive inline controls
}

// Apply same disabled cursor tweak as for inputs
//
// Note: Neither radios nor checkboxes can be readonly.
input[type=\"radio\"],
input[type=\"checkbox\"],
.radio,
.radio-inline,
.checkbox,
.checkbox-inline {
  &[disabled],
  fieldset[disabled] & {
    cursor: not-allowed;
  }
}

// Form control sizing
.input-sm {
  .input-size(@input-height-small; @padding-small-vertical; @padding-small-horizontal; @font-size-small; @line-height-small; @border-radius-small);
}

.input-lg {
  .input-size(@input-height-large; @padding-large-vertical; @padding-large-horizontal; @font-size-large; @line-height-large; @border-radius-large);
}


// Form control feedback states
//
// Apply contextual and semantic states to individual form controls.

// Warning
.has-warning {
  .form-control-validation(@state-warning-text; @state-warning-text; @state-warning-bg);
}
// Error
.has-error {
  .form-control-validation(@state-danger-text; @state-danger-text; @state-danger-bg);
}
// Success
.has-success {
  .form-control-validation(@state-success-text; @state-success-text; @state-success-bg);
}


// Static form control text
//
// Apply class to a `p` element to make any string of text align with labels in
// a horizontal form layout.

.form-control-static {
  margin-bottom: 0; // Remove default margin from `p`
}


// Help text
//
// Apply to any element you wish to create light text for placement immediately
// below a form control. Use for general help, formatting, or instructional text.

.help-block {
  display: block; // account for any element using help-block
  margin-top: 5px;
  margin-bottom: 10px;
  color: lighten(@text-color, 25%); // lighten the text some for contrast
}



// Inline forms
//
// Make forms appear inline(-block) by adding the `.form-inline` class. Inline
// forms begin stacked on extra small (mobile) devices and then go inline when
// viewports reach <768px.
//
// Requires wrapping inputs and labels with `.form-group` for proper display of
// default HTML form controls and our custom form controls (e.g., input groups).
//
// Heads up! This is mixin-ed into `.navbar-form` in navbars.less.

.form-inline {

  // Kick in the inline
  @media (min-width: @screen-sm) {
    // Inline-block all the things for \"inline\"
    .form-group  {
      display: inline-block;
      margin-bottom: 0;
      vertical-align: middle;
    }

    // In navbar-form, allow folks to *not* use `.form-group`
    .form-control {
      display: inline-block;
    }

    // Override `width: 100%;` when not within a `.form-group`
    select.form-control {
      width: auto;
    }

    // Remove default margin on radios/checkboxes that were used for stacking, and
    // then undo the floating of radios and checkboxes to match (which also avoids
    // a bug in WebKit: https://github.com/twbs/bootstrap/issues/1969).
    .radio,
    .checkbox {
      display: inline-block;
      margin-top: 0;
      margin-bottom: 0;
      padding-left: 0;
    }
    .radio input[type=\"radio\"],
    .checkbox input[type=\"checkbox\"] {
      float: none;
      margin-left: 0;
    }
  }
}


// Horizontal forms
//
// Horizontal forms are built on grid classes and allow you to create forms with
// labels on the left and inputs on the right.

.form-horizontal {

  // Consistent vertical alignment of labels, radios, and checkboxes
  .control-label,
  .radio,
  .checkbox,
  .radio-inline,
  .checkbox-inline {
    margin-top: 0;
    margin-bottom: 0;
    padding-top: (@padding-base-vertical + 1); // Default padding plus a border
  }
  // Account for padding we're adding to ensure the alignment and of help text
  // and other content below items
  .radio,
  .checkbox {
    min-height: @line-height-computed + (@padding-base-vertical + 1);
  }

  // Make form groups behave like rows
  .form-group {
    .make-row();
  }

  .form-control-static {
    padding-top: (@padding-base-vertical + 1);
  }

  // Only right align form labels here when the columns stop stacking
  @media (min-width: @screen-sm-min) {
    .control-label {
      text-align: right;
    }
  }
}
", "node_modules/parsleyjs/bower_components/bootstrap/less/forms.less", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/bootstrap/less/forms.less");
    }
}
