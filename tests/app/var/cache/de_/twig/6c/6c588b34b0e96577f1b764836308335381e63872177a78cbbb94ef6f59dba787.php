<?php

/* node_modules/jquery/src/queue.js */
class __TwigTemplate_286bbbe48d171b0a7179575b4c64cdf447c07e3f4fed7b95ce40221da8ff31f6 extends Twig_Template
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
        $__internal_761b8790dea368590a3e79e1827f4bc5e4cb02a38bce6520b685c888be53c325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_761b8790dea368590a3e79e1827f4bc5e4cb02a38bce6520b685c888be53c325->enter($__internal_761b8790dea368590a3e79e1827f4bc5e4cb02a38bce6520b685c888be53c325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/queue.js"));

        // line 1
        echo "define( [
\t\"./core\",
\t\"./data/var/dataPriv\",
\t\"./deferred\",
\t\"./callbacks\"
], function( jQuery, dataPriv ) {

\"use strict\";

jQuery.extend( {
\tqueue: function( elem, type, data ) {
\t\tvar queue;

\t\tif ( elem ) {
\t\t\ttype = ( type || \"fx\" ) + \"queue\";
\t\t\tqueue = dataPriv.get( elem, type );

\t\t\t// Speed up dequeue by getting out quickly if this is just a lookup
\t\t\tif ( data ) {
\t\t\t\tif ( !queue || Array.isArray( data ) ) {
\t\t\t\t\tqueue = dataPriv.access( elem, type, jQuery.makeArray( data ) );
\t\t\t\t} else {
\t\t\t\t\tqueue.push( data );
\t\t\t\t}
\t\t\t}
\t\t\treturn queue || [];
\t\t}
\t},

\tdequeue: function( elem, type ) {
\t\ttype = type || \"fx\";

\t\tvar queue = jQuery.queue( elem, type ),
\t\t\tstartLength = queue.length,
\t\t\tfn = queue.shift(),
\t\t\thooks = jQuery._queueHooks( elem, type ),
\t\t\tnext = function() {
\t\t\t\tjQuery.dequeue( elem, type );
\t\t\t};

\t\t// If the fx queue is dequeued, always remove the progress sentinel
\t\tif ( fn === \"inprogress\" ) {
\t\t\tfn = queue.shift();
\t\t\tstartLength--;
\t\t}

\t\tif ( fn ) {

\t\t\t// Add a progress sentinel to prevent the fx queue from being
\t\t\t// automatically dequeued
\t\t\tif ( type === \"fx\" ) {
\t\t\t\tqueue.unshift( \"inprogress\" );
\t\t\t}

\t\t\t// Clear up the last queue stop function
\t\t\tdelete hooks.stop;
\t\t\tfn.call( elem, next, hooks );
\t\t}

\t\tif ( !startLength && hooks ) {
\t\t\thooks.empty.fire();
\t\t}
\t},

\t// Not public - generate a queueHooks object, or return the current one
\t_queueHooks: function( elem, type ) {
\t\tvar key = type + \"queueHooks\";
\t\treturn dataPriv.get( elem, key ) || dataPriv.access( elem, key, {
\t\t\tempty: jQuery.Callbacks( \"once memory\" ).add( function() {
\t\t\t\tdataPriv.remove( elem, [ type + \"queue\", key ] );
\t\t\t} )
\t\t} );
\t}
} );

jQuery.fn.extend( {
\tqueue: function( type, data ) {
\t\tvar setter = 2;

\t\tif ( typeof type !== \"string\" ) {
\t\t\tdata = type;
\t\t\ttype = \"fx\";
\t\t\tsetter--;
\t\t}

\t\tif ( arguments.length < setter ) {
\t\t\treturn jQuery.queue( this[ 0 ], type );
\t\t}

\t\treturn data === undefined ?
\t\t\tthis :
\t\t\tthis.each( function() {
\t\t\t\tvar queue = jQuery.queue( this, type, data );

\t\t\t\t// Ensure a hooks for this queue
\t\t\t\tjQuery._queueHooks( this, type );

\t\t\t\tif ( type === \"fx\" && queue[ 0 ] !== \"inprogress\" ) {
\t\t\t\t\tjQuery.dequeue( this, type );
\t\t\t\t}
\t\t\t} );
\t},
\tdequeue: function( type ) {
\t\treturn this.each( function() {
\t\t\tjQuery.dequeue( this, type );
\t\t} );
\t},
\tclearQueue: function( type ) {
\t\treturn this.queue( type || \"fx\", [] );
\t},

\t// Get a promise resolved when queues of a certain type
\t// are emptied (fx is the type by default)
\tpromise: function( type, obj ) {
\t\tvar tmp,
\t\t\tcount = 1,
\t\t\tdefer = jQuery.Deferred(),
\t\t\telements = this,
\t\t\ti = this.length,
\t\t\tresolve = function() {
\t\t\t\tif ( !( --count ) ) {
\t\t\t\t\tdefer.resolveWith( elements, [ elements ] );
\t\t\t\t}
\t\t\t};

\t\tif ( typeof type !== \"string\" ) {
\t\t\tobj = type;
\t\t\ttype = undefined;
\t\t}
\t\ttype = type || \"fx\";

\t\twhile ( i-- ) {
\t\t\ttmp = dataPriv.get( elements[ i ], type + \"queueHooks\" );
\t\t\tif ( tmp && tmp.empty ) {
\t\t\t\tcount++;
\t\t\t\ttmp.empty.add( resolve );
\t\t\t}
\t\t}
\t\tresolve();
\t\treturn defer.promise( obj );
\t}
} );

return jQuery;
} );
";
        
        $__internal_761b8790dea368590a3e79e1827f4bc5e4cb02a38bce6520b685c888be53c325->leave($__internal_761b8790dea368590a3e79e1827f4bc5e4cb02a38bce6520b685c888be53c325_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/queue.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"./core\",
\t\"./data/var/dataPriv\",
\t\"./deferred\",
\t\"./callbacks\"
], function( jQuery, dataPriv ) {

\"use strict\";

jQuery.extend( {
\tqueue: function( elem, type, data ) {
\t\tvar queue;

\t\tif ( elem ) {
\t\t\ttype = ( type || \"fx\" ) + \"queue\";
\t\t\tqueue = dataPriv.get( elem, type );

\t\t\t// Speed up dequeue by getting out quickly if this is just a lookup
\t\t\tif ( data ) {
\t\t\t\tif ( !queue || Array.isArray( data ) ) {
\t\t\t\t\tqueue = dataPriv.access( elem, type, jQuery.makeArray( data ) );
\t\t\t\t} else {
\t\t\t\t\tqueue.push( data );
\t\t\t\t}
\t\t\t}
\t\t\treturn queue || [];
\t\t}
\t},

\tdequeue: function( elem, type ) {
\t\ttype = type || \"fx\";

\t\tvar queue = jQuery.queue( elem, type ),
\t\t\tstartLength = queue.length,
\t\t\tfn = queue.shift(),
\t\t\thooks = jQuery._queueHooks( elem, type ),
\t\t\tnext = function() {
\t\t\t\tjQuery.dequeue( elem, type );
\t\t\t};

\t\t// If the fx queue is dequeued, always remove the progress sentinel
\t\tif ( fn === \"inprogress\" ) {
\t\t\tfn = queue.shift();
\t\t\tstartLength--;
\t\t}

\t\tif ( fn ) {

\t\t\t// Add a progress sentinel to prevent the fx queue from being
\t\t\t// automatically dequeued
\t\t\tif ( type === \"fx\" ) {
\t\t\t\tqueue.unshift( \"inprogress\" );
\t\t\t}

\t\t\t// Clear up the last queue stop function
\t\t\tdelete hooks.stop;
\t\t\tfn.call( elem, next, hooks );
\t\t}

\t\tif ( !startLength && hooks ) {
\t\t\thooks.empty.fire();
\t\t}
\t},

\t// Not public - generate a queueHooks object, or return the current one
\t_queueHooks: function( elem, type ) {
\t\tvar key = type + \"queueHooks\";
\t\treturn dataPriv.get( elem, key ) || dataPriv.access( elem, key, {
\t\t\tempty: jQuery.Callbacks( \"once memory\" ).add( function() {
\t\t\t\tdataPriv.remove( elem, [ type + \"queue\", key ] );
\t\t\t} )
\t\t} );
\t}
} );

jQuery.fn.extend( {
\tqueue: function( type, data ) {
\t\tvar setter = 2;

\t\tif ( typeof type !== \"string\" ) {
\t\t\tdata = type;
\t\t\ttype = \"fx\";
\t\t\tsetter--;
\t\t}

\t\tif ( arguments.length < setter ) {
\t\t\treturn jQuery.queue( this[ 0 ], type );
\t\t}

\t\treturn data === undefined ?
\t\t\tthis :
\t\t\tthis.each( function() {
\t\t\t\tvar queue = jQuery.queue( this, type, data );

\t\t\t\t// Ensure a hooks for this queue
\t\t\t\tjQuery._queueHooks( this, type );

\t\t\t\tif ( type === \"fx\" && queue[ 0 ] !== \"inprogress\" ) {
\t\t\t\t\tjQuery.dequeue( this, type );
\t\t\t\t}
\t\t\t} );
\t},
\tdequeue: function( type ) {
\t\treturn this.each( function() {
\t\t\tjQuery.dequeue( this, type );
\t\t} );
\t},
\tclearQueue: function( type ) {
\t\treturn this.queue( type || \"fx\", [] );
\t},

\t// Get a promise resolved when queues of a certain type
\t// are emptied (fx is the type by default)
\tpromise: function( type, obj ) {
\t\tvar tmp,
\t\t\tcount = 1,
\t\t\tdefer = jQuery.Deferred(),
\t\t\telements = this,
\t\t\ti = this.length,
\t\t\tresolve = function() {
\t\t\t\tif ( !( --count ) ) {
\t\t\t\t\tdefer.resolveWith( elements, [ elements ] );
\t\t\t\t}
\t\t\t};

\t\tif ( typeof type !== \"string\" ) {
\t\t\tobj = type;
\t\t\ttype = undefined;
\t\t}
\t\ttype = type || \"fx\";

\t\twhile ( i-- ) {
\t\t\ttmp = dataPriv.get( elements[ i ], type + \"queueHooks\" );
\t\t\tif ( tmp && tmp.empty ) {
\t\t\t\tcount++;
\t\t\t\ttmp.empty.add( resolve );
\t\t\t}
\t\t}
\t\tresolve();
\t\treturn defer.promise( obj );
\t}
} );

return jQuery;
} );
", "node_modules/jquery/src/queue.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/queue.js");
    }
}
