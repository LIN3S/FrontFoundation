<?php

/* node_modules/parsleyjs/bower_components/bootstrap/less/carousel.less */
class __TwigTemplate_33d0cec15429fe1c3bf4e6fdbee991758c347c62120b0bec2d8e91276124de75 extends Twig_Template
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
        $__internal_eca0d6762c5d326d7b20195b54155cdc6fba8911d3e715a6a6823aa6700c8716 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eca0d6762c5d326d7b20195b54155cdc6fba8911d3e715a6a6823aa6700c8716->enter($__internal_eca0d6762c5d326d7b20195b54155cdc6fba8911d3e715a6a6823aa6700c8716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/bootstrap/less/carousel.less"));

        // line 1
        echo "//
// Carousel
// --------------------------------------------------


// Wrapper for the slide container and indicators
.carousel {
  position: relative;
}

.carousel-inner {
  position: relative;
  overflow: hidden;
  width: 100%;

  > .item {
    display: none;
    position: relative;
    .transition(.6s ease-in-out left);

    // Account for jankitude on images
    > img,
    > a > img {
      .img-responsive();
      line-height: 1;
    }
  }

  > .active,
  > .next,
  > .prev { display: block; }

  > .active {
    left: 0;
  }

  > .next,
  > .prev {
    position: absolute;
    top: 0;
    width: 100%;
  }

  > .next {
    left: 100%;
  }
  > .prev {
    left: -100%;
  }
  > .next.left,
  > .prev.right {
    left: 0;
  }

  > .active.left {
    left: -100%;
  }
  > .active.right {
    left: 100%;
  }

}

// Left/right controls for nav
// ---------------------------

.carousel-control {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  width: @carousel-control-width;
  .opacity(@carousel-control-opacity);
  font-size: @carousel-control-font-size;
  color: @carousel-control-color;
  text-align: center;
  text-shadow: @carousel-text-shadow;
  // We can't have this transition here because WebKit cancels the carousel
  // animation if you trip this while in the middle of another animation.

  // Set gradients for backgrounds
  &.left {
    #gradient > .horizontal(@start-color: rgba(0,0,0,.5); @end-color: rgba(0,0,0,.0001));
  }
  &.right {
    left: auto;
    right: 0;
    #gradient > .horizontal(@start-color: rgba(0,0,0,.0001); @end-color: rgba(0,0,0,.5));
  }

  // Hover/focus state
  &:hover,
  &:focus {
    outline: none;
    color: @carousel-control-color;
    text-decoration: none;
    .opacity(.9);
  }

  // Toggles
  .icon-prev,
  .icon-next,
  .glyphicon-chevron-left,
  .glyphicon-chevron-right {
    position: absolute;
    top: 50%;
    z-index: 5;
    display: inline-block;
  }
  .icon-prev,
  .glyphicon-chevron-left {
    left: 50%;
  }
  .icon-next,
  .glyphicon-chevron-right {
    right: 50%;
  }
  .icon-prev,
  .icon-next {
    width:  20px;
    height: 20px;
    margin-top: -10px;
    margin-left: -10px;
    font-family: serif;
  }

  .icon-prev {
    &:before {
      content: '\\2039';// SINGLE LEFT-POINTING ANGLE QUOTATION MARK (U+2039)
    }
  }
  .icon-next {
    &:before {
      content: '\\203a';// SINGLE RIGHT-POINTING ANGLE QUOTATION MARK (U+203A)
    }
  }
}

// Optional indicator pips
//
// Add an unordered list with the following class and add a list item for each
// slide your carousel holds.

.carousel-indicators {
  position: absolute;
  bottom: 10px;
  left: 50%;
  z-index: 15;
  width: 60%;
  margin-left: -30%;
  padding-left: 0;
  list-style: none;
  text-align: center;

  li {
    display: inline-block;
    width:  10px;
    height: 10px;
    margin: 1px;
    text-indent: -999px;
    border: 1px solid @carousel-indicator-border-color;
    border-radius: 10px;
    cursor: pointer;

    // IE8-9 hack for event handling
    //
    // Internet Explorer 8-9 does not support clicks on elements without a set
    // `background-color`. We cannot use `filter` since that's not viewed as a
    // background color by the browser. Thus, a hack is needed.
    //
    // For IE8, we set solid black as it doesn't support `rgba()`. For IE9, we
    // set alpha transparency for the best results possible.
    background-color: #000 \\9; // IE8
    background-color: rgba(0,0,0,0); // IE9
  }
  .active {
    margin: 0;
    width:  12px;
    height: 12px;
    background-color: @carousel-indicator-active-bg;
  }
}

// Optional captions
// -----------------------------
// Hidden by default for smaller viewports
.carousel-caption {
  position: absolute;
  left: 15%;
  right: 15%;
  bottom: 20px;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: @carousel-caption-color;
  text-align: center;
  text-shadow: @carousel-text-shadow;
  & .btn {
    text-shadow: none; // No shadow for button elements in carousel-caption
  }
}


// Scale up controls for tablets and up
@media screen and (min-width: @screen-sm-min) {

  // Scale up the controls a smidge
  .carousel-control {
    .glyphicons-chevron-left,
    .glyphicons-chevron-right,
    .icon-prev,
    .icon-next {
      width: 30px;
      height: 30px;
      margin-top: -15px;
      margin-left: -15px;
      font-size: 30px;
    }
  }

  // Show and left align the captions
  .carousel-caption {
    left: 20%;
    right: 20%;
    padding-bottom: 30px;
  }

  // Move up the indicators
  .carousel-indicators {
    bottom: 20px;
  }
}
";
        
        $__internal_eca0d6762c5d326d7b20195b54155cdc6fba8911d3e715a6a6823aa6700c8716->leave($__internal_eca0d6762c5d326d7b20195b54155cdc6fba8911d3e715a6a6823aa6700c8716_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/bootstrap/less/carousel.less";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("//
// Carousel
// --------------------------------------------------


// Wrapper for the slide container and indicators
.carousel {
  position: relative;
}

.carousel-inner {
  position: relative;
  overflow: hidden;
  width: 100%;

  > .item {
    display: none;
    position: relative;
    .transition(.6s ease-in-out left);

    // Account for jankitude on images
    > img,
    > a > img {
      .img-responsive();
      line-height: 1;
    }
  }

  > .active,
  > .next,
  > .prev { display: block; }

  > .active {
    left: 0;
  }

  > .next,
  > .prev {
    position: absolute;
    top: 0;
    width: 100%;
  }

  > .next {
    left: 100%;
  }
  > .prev {
    left: -100%;
  }
  > .next.left,
  > .prev.right {
    left: 0;
  }

  > .active.left {
    left: -100%;
  }
  > .active.right {
    left: 100%;
  }

}

// Left/right controls for nav
// ---------------------------

.carousel-control {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  width: @carousel-control-width;
  .opacity(@carousel-control-opacity);
  font-size: @carousel-control-font-size;
  color: @carousel-control-color;
  text-align: center;
  text-shadow: @carousel-text-shadow;
  // We can't have this transition here because WebKit cancels the carousel
  // animation if you trip this while in the middle of another animation.

  // Set gradients for backgrounds
  &.left {
    #gradient > .horizontal(@start-color: rgba(0,0,0,.5); @end-color: rgba(0,0,0,.0001));
  }
  &.right {
    left: auto;
    right: 0;
    #gradient > .horizontal(@start-color: rgba(0,0,0,.0001); @end-color: rgba(0,0,0,.5));
  }

  // Hover/focus state
  &:hover,
  &:focus {
    outline: none;
    color: @carousel-control-color;
    text-decoration: none;
    .opacity(.9);
  }

  // Toggles
  .icon-prev,
  .icon-next,
  .glyphicon-chevron-left,
  .glyphicon-chevron-right {
    position: absolute;
    top: 50%;
    z-index: 5;
    display: inline-block;
  }
  .icon-prev,
  .glyphicon-chevron-left {
    left: 50%;
  }
  .icon-next,
  .glyphicon-chevron-right {
    right: 50%;
  }
  .icon-prev,
  .icon-next {
    width:  20px;
    height: 20px;
    margin-top: -10px;
    margin-left: -10px;
    font-family: serif;
  }

  .icon-prev {
    &:before {
      content: '\\2039';// SINGLE LEFT-POINTING ANGLE QUOTATION MARK (U+2039)
    }
  }
  .icon-next {
    &:before {
      content: '\\203a';// SINGLE RIGHT-POINTING ANGLE QUOTATION MARK (U+203A)
    }
  }
}

// Optional indicator pips
//
// Add an unordered list with the following class and add a list item for each
// slide your carousel holds.

.carousel-indicators {
  position: absolute;
  bottom: 10px;
  left: 50%;
  z-index: 15;
  width: 60%;
  margin-left: -30%;
  padding-left: 0;
  list-style: none;
  text-align: center;

  li {
    display: inline-block;
    width:  10px;
    height: 10px;
    margin: 1px;
    text-indent: -999px;
    border: 1px solid @carousel-indicator-border-color;
    border-radius: 10px;
    cursor: pointer;

    // IE8-9 hack for event handling
    //
    // Internet Explorer 8-9 does not support clicks on elements without a set
    // `background-color`. We cannot use `filter` since that's not viewed as a
    // background color by the browser. Thus, a hack is needed.
    //
    // For IE8, we set solid black as it doesn't support `rgba()`. For IE9, we
    // set alpha transparency for the best results possible.
    background-color: #000 \\9; // IE8
    background-color: rgba(0,0,0,0); // IE9
  }
  .active {
    margin: 0;
    width:  12px;
    height: 12px;
    background-color: @carousel-indicator-active-bg;
  }
}

// Optional captions
// -----------------------------
// Hidden by default for smaller viewports
.carousel-caption {
  position: absolute;
  left: 15%;
  right: 15%;
  bottom: 20px;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: @carousel-caption-color;
  text-align: center;
  text-shadow: @carousel-text-shadow;
  & .btn {
    text-shadow: none; // No shadow for button elements in carousel-caption
  }
}


// Scale up controls for tablets and up
@media screen and (min-width: @screen-sm-min) {

  // Scale up the controls a smidge
  .carousel-control {
    .glyphicons-chevron-left,
    .glyphicons-chevron-right,
    .icon-prev,
    .icon-next {
      width: 30px;
      height: 30px;
      margin-top: -15px;
      margin-left: -15px;
      font-size: 30px;
    }
  }

  // Show and left align the captions
  .carousel-caption {
    left: 20%;
    right: 20%;
    padding-bottom: 30px;
  }

  // Move up the indicators
  .carousel-indicators {
    bottom: 20px;
  }
}
", "node_modules/parsleyjs/bower_components/bootstrap/less/carousel.less", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/bootstrap/less/carousel.less");
    }
}
