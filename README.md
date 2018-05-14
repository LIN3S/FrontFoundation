# LIN3S Front Foundation

> Base CSS and JS files for building views in LIN3S way.

## Installation

The recommended and the most suitable way to install is through *Yarn*:
```bash
$ yarn add lin3s-front-foundation
```
or alternatively through *NPM*:
```bash
$ npm install --save lin3s-front-foundation
```

---
---
## Usage - Available features

### Async

This package will provide all asynchronous related implementations. For instance, Promise related ones.

#### Async.cancelablePromise( promise )

This method will wrap a Promise object and provide a cancel() method for canceling the inner Promise. We will access 
the original promise throught the promise property.
```js
import {Async} from 'lin3s-front-foundation';
 
const aPromise = new Promise((resolve, reject) => {
  // ...
});
 
const aCancelablePromise = Async.cancelablePromise(aPromise);
 
aCancelablePromise.promise.then(resolvedObject => {
  // ...
});
 
aCancelablePromise.cancel();
// aCancelablePromise.promise has been rejected right after calling the cancel() method.
```

---
### Browser

This package will provide all browser related implementations.

#### Browser.isIE11()

This method will tell us if the browser is Internet Explorer 11.

```js
import {Browser} from 'lin3s-front-foundation';
 
const isIE11 = Browser.isIE11();
```

---
### Dom

This package will provide all Dom related implementations.
```js
import {Dom} from 'lin3s-front-foundation';

const currentHtmlLang = Dom.getHtmlLang();

console.log(currentHtmlLang);
```

#### Dom.getHtmlLang()

This method will return the html tag's *lang* attribute.

#### Dom.loadScript( scriptPath )

This method will load an script by the provided scriptPath and return us a Promise object. This promise will be 
resolved one the script has been loaded.

```js
import {Dom} from 'lin3s-front-foundation';
 
const scriptPath = 'https://yourdomain.com/script-path.js';
 
const scriptLoadPromise = Dom.loadScript(scriptPath);

scriptLoadPromise.then(() => {
  // Our script has been loaded!
});
```

#### Dom.injectScript( scriptCode, domNode = document.body )

This method will inject the specified *scriptCode* at the passed *domNode*. *domNode* will be the document's body by 
default. Provided *scriptCode* will be wrapped with an [IIFE][3]

```js
import {Dom} from 'lin3s-front-foundation';
 
const 
  mainDomNode = document.querySelector('.main'),
  testScriptA = `console.log('This is the injected script A');`,
  testScriptB = `console.log('This is the injected script B');`;

Dom.injectScript(testScriptA);
Dom.injectScript(testScriptB, mainDomNode);
```

#### Dom.waitImagesLoadInDomNode( domNode )

This method will return us a Promise object that will be resolved once all the images contained in the provided domNode 
have been loaded.

```js
import {Dom} from 'lin3s-front-foundation';
 
const imagesCollection = document.querySelector('.images__collection');
 
const imagesLoadPromise = Dom.waitImagesLoadInDomNode(imagesCollection);
 
imagesLoadPromise.then(() => {
  // All images have been loaded!
});
```

#### Dom.scrollToElement( selector, {duration = 500, offset = 0, callback = null} )

This method will scroll to the given element's positions minus offset in the given duration (in milliseconds).
A callback can be provided that will trigger once the animation has finished.

```js
import {Dom} from 'lin3s-front-foundation';

const callback = () => console.log('Scroll to element done!');

Dom.scrollToElement('.some-selector', {duration: 2000, offset: 10, callback});
```

### Dom - Utilities / Helpers

#### Dom.isDomNodeDescendantOfDomNode( needleDomNode, mainDomNode )

This method will return true if the passed `needleDomNode` y a descendant of the `mainDomNode`.

#### Dom.getDomNodeIndex( domNode, selector = null )

This method will return the index of the provided `domNode`, optinally filtered by a css selector. It is a native
alternative to the jQuery's [`.index()`][7] method.

#### Dom.removeDomNodes( domNodes )

This method will remove the passed `domNodes` from their parents. It will work with a single node as well. It is a
native alternative to the jQuery's [`.remove()`][8] method.

#### Dom.addSelectorFilteredEventListener( domNode, eventName, selector, event => {} )

This method will add an event listener for the `eventName` to the passed `domNode`, filtering the event.target with the
defined `selector`. It is a native alternative to the jQuery's [`.on(eventName, selector, callback)`][9] method when
filtering it's targets by a selector.

#### Dom.dispatchNativeEvent( domNode, eventName )

This method will dispatch a DOMElement native event. It's a native alternative to the jQuery's
[`.trigger(eventName)`][10] method.

#### Dom.scrollToElement( selector, {duration = 500, offset = 0, callback = null} )

This method will help us scrolling to a document node's position. It allows defining a duration (default 500ms), an 
offset (default 0) and a complete callback (default null).

```js
import {Dom} from 'lin3s-front-foundation';
  
const links = document.querySelectorAll('.menu__list .menu__link');
  
const handleClick = event => Dom.scrollToElement(event.target.hash, {duration: 250, offset: 10});
  
Array.from(links, link => {
  link.addEventListener('click', handleClick, false);
});
```

---
### Cookies

This package will provide all `document.cookie` related implementations.

#### Cookies.read

This method will return the value of a cookie by its name.

```js
import {Cookies} from 'lin3s-front-foundation';

const cookieValue = Cookies.read('some-name');
```

#### Cookies.write

This method will write a cookie. Accepts an object with names parameters for name, value, expiration, domain and path.

```js
import {Cookies} from 'lin3s-front-foundation';

Cookies.write({
  name: 'some-name',
  value: 'my value',
  expiration: 3600000, // 1 hour in milliseconds
  domain: 'example.com',
  path: '/'
});
```

The list of the available parameters, their type and default values are as follows:

| Parameter                 | Type                  | Required  | Default value     |
|-------------------------- |:----------------------|:----------|:------------------|
| name                      | string                | yes       | -                 |
| value                     | string                | no        | ''                |
| expiration                | int (milliseconds)    | no        | *                 |
| domain                    | string                | no        | location.hostname |
| path                      | string                | no        | /                 |

\* It will set cookie expiration to 'Session'

#### Cookies - EventBus events

`Cookies.write` will publish `CookieWrittenEvent` through the EventBus. We will subscribe to this event using some
exported helper methods:

```js
import {EventBus} from 'lin3s-front-foundation';

EventBus.onCookieWritten(({cookie}) => {
  const myCookieName = cookie.name;
  const myCookieValue = cookie.value;
});
```

---
---
## Usage - Available UI components

### GMap

This component will provide all the necessary implementations for displaying a Google Map, setting it's markers, setting 
a clusterer, use the Google Map geocoding feature and displaying the MarkerDetail view.

#### GMap - Styles

The GMap component comes with some default styles. You must include them in order to correctly render it.

```scss
@import './node_modules/lin3s-front-foundation/dist/scss/ui/components/gmap';
@import './node_modules/lin3s-front-foundation/dist/scss/ui/components/gmap-marker-detail';
```

#### GMap - Basic setup

In order to setup the GMap component, we will define every required parameter while including the twig template. It 
will automatically fetch the needed js files and will init the Google Maps map instance. 

The list of the available parameters, their type and default values are as follows:

| Parameter                 | Type    | Required | Default value |
|-------------------------- |:--------|:---------|:--------------|
| gmap_api_key              | string  | yes      | -             |
| gmap_center_lat           | float   | yes      | -             |
| gmap_center_lng           | float   | yes      | -             |
| gmap_initial_zoom         | int     | no       | 8             |
| gmap_max_zoom             | int     | no       | 12            |
| gmap_marker_default_path  | string  | yes      | -             |
| gmap_marker_selected_path | string  | yes      | -             |
| gmap_marker_group_path    | string  | yes      | -             |
| gmap_marker_width         | int     | yes      | -             |
| gmap_marker_height        | int     | yes      | -             |
| gmap_cluster_enabled      | int     | no       | 1 \[0,1\]     |
| gmap_cluster_text_offset_x| int     | no       | 0             |
| gmap_cluster_text_offset_y| int     | no       | 0             |
| gmap_cluster_text_color   | string  | no       | '#ffffff'     |
| gmap_cluster_text_size    | int     | no       | 18            |
| gmap_style                | string  | no       | [view][1]**   |

** In order to generate the Google Map custom styles, we could use any available tool. For instance the [snazzy maps][2] 
online platform.

The marker images will be required to be served both on *.png* and *.svg* formats. 

The marker paths must be defined without the file extensions, as the GMap component will get the *.png* or *.svg* files 
based on the client browser. 

This is a basic setup example:

```twig
{% include '@lin3s_front_foundation/components/gmap.html.twig' with {
    gmap_api_key: 'AIzaSyDQaCE_7C5iAmpwr_y1C1DHbtZsqag74Sk',
    gmap_center_lat: '43.2631394',
    gmap_center_lng: '-2.9275847',
    gmap_initial_zoom: 12,
    gmap_max_zoom: 16,
    gmap_marker_default_path: '/images/gmap/marker-default',
    gmap_marker_selected_path: '/images/gmap/marker-selected',
    gmap_marker_group_path: '/images/gmap/marker-group',
    gmap_marker_width: 40,
    gmap_marker_height: 60,
    gmap_cluster_enabled: 1,
    gmap_cluster_text_size: 14,
    gmap_cluster_text_color: '#222222'
} %}
```

#### GMap - JS API

These are the mostly used methods available on the GMap component's instance.

| Name                           | Parameters            | Returned value    | Description |
|--------------------------------|:----------------------|:------------------|:------------|
| setCenterOffsets               | { <br/>&nbsp;&nbsp;&nbsp;&nbsp; x: 0, <br>&nbsp;&nbsp;&nbsp;&nbsp; y: 0<br> }  | undefined (void)  | This method will set the instance's center's offset (in pixels) |
| setMarkers                     | markers: \[{ <br>&nbsp;&nbsp;&nbsp;&nbsp; id: 0, <br>&nbsp;&nbsp;&nbsp;&nbsp; lat: 43.2631394, <br>&nbsp;&nbsp;&nbsp;&nbsp; lng: -2.9275847, <br>&nbsp;&nbsp;&nbsp;&nbsp; // your properties... <br>}, <br> //... <br>]               | undefined (void)  | This method will display the passed markers on the map. It will generate the clusters automatically. <br><br> Each marker object must, at least, have the *lat*, *lng* and *id* properties. |
| showMarkerDetailView           | markerId, markerDetailHtmlContent | undefined (void) | This method will render and display the passed markerDetailHtmlContent centered on the correspondingn marker. |
| hideMarkerDetailView           | -                     | undefined (void)  | This method will hide the currently visible marker detail view. |
| geocodeAddress                 | address: String       | undefined (void)  | This method will geocode the passed address (Address, town, ZIP code, city...) and center the map on the result's location. <br><br> If no result matches the passed address, it will publish an event through the EventBus. |
| resetMapZoomAndCenterToDefault | -                     | undefined (void)  | This method will reset the instance's center and zoom to the default values. |

#### GMap - EventBus events

Each GMap instance will publish these events through the EventBus. We will subscribe to these events using some exported
helper methods:

```js
import {EventBus} from 'lin3s-front-foundation';

const domNode = document.querySelector('.my-map');

EventBus.onGMapInitialized(domNode, gmapInitializedEvent => {
  const gmapInstance = gmapInitializedEvent.gmapInstance;
});

EventBus.onGMapGeocode(domNode, gmapGeocodeEvent => {
  console.log(gmapGeocodeEvent.status);
  console.log(gmapGeocodeEvent.results);
});

EventBus.onGMapMarkerSelected(domNode, gmapMarkerSelectedEvent => {
  const selectedMarker = gmapMarkerSelectedEvent.marker;
});
```

| Type                           | Properties              |
|--------------------------------|:------------------------|
| GMapInitializedEvent           | gmapInstance: GMap      |
| GMapMarkerSelectedEvent        | gmapInstance: GMap<br/>marker: Your marker object representation |
| GMapGeocodeEvent               | gmapInstance: GMap<br/>status: response status<br/>results: geociding results |

#### GMap - Advanced features

If we need to work with the initialized GMap component instance, we must subscribe to the GMapInitializedEvent, that 
will be published through the event-bus once the gmap component has been initialized.

```js
import {EventBus} from 'lin3s-front-foundation';

const domNode = document.querySelector('.my-map');

EventBus.onGMapInitialized(domNode, gmapInitializedEvent => {
  const gmapInstance = gmapInitializedEvent.gmapInstance;
  // whatever...
});
```

We will set the GMap component's markers calling the *setMarkers(markers)* method.

If we want to use the built-in geocoding feature, we will call the *geocodeAddress(address)* of the GMap instance. 

The GMap component also comes with methods for displaying/hiding the marker detail view (
*showMarkerDetailView(markerId, markerDetailContentHtml)* and *hideMarkerDetailView()*).

This is a complete example of the component's features:

```js
import {EventBus} from 'lin3s-front-foundation';

class GMapTest {
  constructor(domNode) {
    this.domNode = domNode;
  
    EventBus.onGMapInitialized(this.domNode, gmapInitializedEvent => {
      const gmapInstance = gmapInitializedEvent.gmap;
      this.setupMarkers();
      this.init();
    });
  }
  
  setupMarkers() {
    const markers = [{
      id: 0,
      lat: 43.2631394,
      lng: -2.9275847
    }];

    this.gmapInstance.setMarkers(markers);
  }
  
  init() {
    this.filterInput = document.querySelector('.my-input-class'); 
    this.filterInput.addEventListener('input', () => {
      this.gmapInstance.geocodeAddress(this.filterInput.value);
    });
    
    EventBus.onGMapGeocode(this.domNode, gmapGeocodeEvent => {
      console.log(gmapGeocodeEvent.status);
      console.log(gmapGeocodeEvent.results);
    });
    
    EventBus.onGMapMarkerSelected(this.domNode, gmapMarkerSelectedEvent => {
      this.onMarkerSelected(gmapMarkerSelectedEvent.marker);
    });
  }
  
  onMarkerSelected(marker) {
    if (marker === undefined) {
      this.gmapInstance.hideMarkerDetailView();
    } else {
      this.gmapInstance.showMarkerDetailView(
        marker.id,
        `<h3>This is the marker detail's inner html content</h3>
         <p>Marker <b>lat</b>: ${marker.lat}</p>
         <p>Marker <b>lng</b>: ${marker.lng}</p>`
      );
    }
  }
}

onDomReady(() => {
  new GMapTest();
});
```

---
### FormGroupInput

The component is composed by the FormLabel, FormInput and the FormError atoms.

#### FormGroupInput - Styles

The FormGroupInput component and it's associated atoms come with some default styles. You must include them in order 
to correctly render them.

```scss
@import './node_modules/lin3s-front-foundation/dist/scss/ui/atoms/form-label';
@import './node_modules/lin3s-front-foundation/dist/scss/ui/atoms/form-error';
@import './node_modules/lin3s-front-foundation/dist/scss/ui/atoms/form-input';
@import './node_modules/lin3s-front-foundation/dist/scss/ui/components/form-group-input';
```

#### FormGroupInput - Basic setup

In order to setup the FormGroupInput component, we will define every required parameter while including the twig 
template. 

The list of the available parameters, their type and default values are as follows:

| Parameter                | Type          | Required | Default value |
|------------------------- |:--------------|:---------|:--------------|
| input_id                 | string        | yes      |               |
| input_name               | string        | no       | null          |
| input_value              | string        | no       | null          |
| input_required           | int           | no       | 0             |
| input_validate           | int           | no       | 0             |
| input_validation_pattern | string        | no       | ''            |
| input_validation_type    | string        | no       | ''            |
| input_type               | string        | no       | 'text'        |
| input_placeholder        | string        | yes      | -             |
| input_label_class_name   | string        | no       | null          |
| input_label_modifiers    | string        | no       | null          |
| input_label_content      | html          | no       | null          |
| input_errors             | array<br/>{<br/>&nbsp;&nbsp;&nbsp;&nbsp;content: string*, <br/>&nbsp;&nbsp;&nbsp;&nbsp;modifiers: string<br/>} | no       | null          |
| input_class_name         | string        | no       | null          |
| input_modifiers          | string        | no       | null          |
| input_spinner            | int           | no       | 0             |


This is a common setup example:

```twig
{% include '@lin3s_front_foundation/components/form_group_input.html.twig' with {
    input_id: 'my-form-user-name',
    input_required: 1,
    input_validate: 1,
    input_validation_type: 'phone',
    input_type: 'text',
    input_placeholder: 'Enter some data...',
    input_label_content: 'Your user name',
    input_errors: [{
        content: 'This field is required',
        modifiers: 'form-error--not-filled'
    }, {
        content: 'Entered phone is not a 9 digit valid phone',
        modifiers: 'form-error--not-valid'
    }],
    input_spinner: 1
} %}
```

---
### FormGroupSelect

This component and it's associated FormSelect atom will build a custom rich select component. The component is composed 
by the FormSelect, FormLabel, FormInput and the FormError atoms.

#### FormGroupSelect / FormSelect - Styles

The FormGroupSelect component and it's associated atoms come with some default styles. You must include them in order 
to correctly render them.

```scss
@import './node_modules/lin3s-front-foundation/dist/scss/ui/atoms/form-label';
@import './node_modules/lin3s-front-foundation/dist/scss/ui/atoms/form-error';
@import './node_modules/lin3s-front-foundation/dist/scss/ui/atoms/form-input';
@import './node_modules/lin3s-front-foundation/dist/scss/ui/atoms/form-select';
@import './node_modules/lin3s-front-foundation/dist/scss/ui/components/form-group-select';
```

#### FormGroupSelect - Basic setup

In order to setup the FormGroupSelect component, we will define every required parameter while including the twig 
template. 

The list of the available parameters, their type and default values are as follows:

| Parameter                 | Type          | Required | Default value | Purpose       |
|-------------------------- |:--------------|:---------|:--------------|:--------------|
| select_id                 | string        | yes      |               |               |
| select_name               | string        | no       | null          |               |
| select_required           | int           | no       | 0             |               |
| select_validate           | int           | no       | 0             |               |
| select_validation_pattern | string        | no       | ''            | Any valid *RegExp* pattern |
| select_validation_type    | string        | no       | ''            | Built-in *validatory* validation types ['email', 'phone', 'any'] |
| select_mobile_breakpoint  | int           | no       | 1024          |               |
| select_max_height_mobile  | int           | no       | 260           |               |
| select_max_height_desktop | int           | no       | 420           |               |
| select_is_filterable      | int           | no       | 1             |               |
| select_filter_placeholder | string        | no       | null          |               |
| select_filter_order_by    | string        | no       | 'value'       | If you set 'label' as this parameter, the component will order it's items by the 'label' while filtering it's options. |
| select_label_modifiers    | string        | no       | null          |               |
| select_label_content      | html          | no       | null          |               |
| select_errors             | array<br/>{<br/>&nbsp;&nbsp;&nbsp;&nbsp;content: string*, <br/>&nbsp;&nbsp;&nbsp;&nbsp;modifiers: string<br/>} | no       | null          |               |
| select_select_modifiers   | string        | no       | null          |               |
| select_no_selection_label | string        | no       | '--'          |               |
| select_no_selection_value | string        | no       | '--'          |               |
| select_options            | array         | yes      |               | These are the component's options. Each option must have, at least, this shape: <br/>{<br/>&nbsp;&nbsp;&nbsp;&nbsp;value: string\*<br/>&nbsp;&nbsp;&nbsp;&nbsp;label: string\*<br/>&nbsp;&nbsp;&nbsp;&nbsp;selected: int=0<br/>} |
| select_outside_click_to_close_enabled            | int           | no       | 1             |               |

This is a full setup example:

```twig
{% set my_select_options = [{
    label: Male,
    value: 0,
    selected: 1
}, {
    label: Female,
    value: 1
}] %}

{% include '@lin3s_front_foundation/components/form_group_select.html.twig' with {
    select_id: 'my-select',
    select_required: 1,
    select_validate: 1,
    select_validation_pattern: '^(?!.*--).*$',
    select_mobile_breakpoint: 768,
    select_max_height_mobile: 260,
    select_max_height_desktop: 420,
    select_is_filterable: 1,
    select_filter_placeholder: 'Type to filter...',
    select_filter_order_by: 'label',
    select_label_modifiers: null,
    select_label_content: 'My select\'s label',
    select_errors: [{
        content: 'This field is required',
        modifiers: 'form-error--not-filled'
    }, {
        content: 'You cannot select the default value',
        modifiers: 'form-error--not-valid'
    }],
    select_select_modifiers: null,
    select_no_selection_label: '--',
    select_no_selection_value: '--',
    select_options: my_select_options
} %}
```

#### FormSelect - JS API

These are the mostly used methods available on the FormSelect atom's instance.

| Name                           | Parameters            | Returned value    | Description |
|--------------------------------|:----------------------|:------------------|:------------|
| open                           | -                     | undefined (void)  | This method will open the select |
| close                          | -                     | undefined (void)  | This method will close the select |
| update                         | {<br/>&nbsp;&nbsp;&nbsp;&nbsp;options,<br/>&nbsp;&nbsp;&nbsp;&nbsp;publishEvent: true<br/>} | undefined (void)  | This method will update the FormSelect's options with the provided ones. By default it will publish the FormSelectOptionSelectedEvent. Each option object must, at least, have the *label* and *value* properties. |
| enable                         | -                     | undefined (void)  | This method will enable the select |
| disable                        | -                     | undefined (void)  | This method will disable the select |

#### FormSelect - EventBus events

Each FormSelect instance will publish these events through the EventBus. We will subscribe to these events using some 
exported helper methods:

```js
import {EventBus} from 'lin3s-front-foundation';

const domNode = document.querySelector('.my-form-select');

EventBus.onFormSelectInitialized(domNode, formSelectInitializedEvent => {
  const formSelectInstance = formSelectInitializedEvent.formSelectInstance;
});

EventBus.onFormSelectOptionSelected(domNode, formSelectOptionSelectedEvent => {
  const selectedValue = formSelectOptionSelectedEvent.optionValue;
});

EventBus.onFormSelectStateChanged(domNode, formSelectStateChangedEvent => {
  const formSelectState = formSelectStateChangedEvent.state;
});
```

| Type                           | Properties                     |
|--------------------------------|:-------------------------------|
| FormSelectInitializedEvent     | formSelectInstance: FormSelect |
| FormSelectOptionSelectedEvent  | formSelectInstance: FormSelect<br/>marker: Your marker object representation |
| FormSelectStateChangedEvent    | formSelectInstance: FormSelect<br/>state: \[FormSelect.STATE.OPENED \| FormSelect.STATE.CLOSED\] |


---
### FormGroupTextarea

The component is composed by the FormTextarea, FormLabel and the FormError atoms.

#### FormGroupTextarea - Styles

The FormGroupTextarea component and it's associated atoms come with some default styles. You must include them in order 
to correctly render them.

```scss
@import './node_modules/lin3s-front-foundation/dist/scss/ui/atoms/form-label';
@import './node_modules/lin3s-front-foundation/dist/scss/ui/atoms/form-error';
@import './node_modules/lin3s-front-foundation/dist/scss/ui/atoms/form-textarea';
@import './node_modules/lin3s-front-foundation/dist/scss/ui/components/form-group-textarea';
```

#### FormGroupTextarea - Setup

In order to setup the FormGroupTextarea component, we will define every required parameter while including the twig 
template. 

The list of the available parameters, their type and default values are as follows:

| Parameter                   | Type          | Required | Default value | Purpose       |
|---------------------------- |:--------------|:---------|:--------------|:--------------|
| class_name                  | string        | no       | null          |               |
| modifiers                   | string        | no       | null          |               |
| textarea_id                 | string        | no       | null          |               |
| textarea_name               | string        | no       | null          |               |
| textarea_value              | string        | no       | null          |               |
| textarea_required           | int           | no       | 0             |               |
| textarea_validate           | int           | no       | 0             |               |
| textarea_validation_pattern | string        | no       | ''            | Any valid *RegExp* pattern |
| textarea_validation_type    | string        | no       | ''            | Built-in *validatory* validation types ['email', 'phone', 'any'] |
| textarea_label_class_name   | string        | no       | ''            |               |
| textarea_label_modifiers    | string        | no       | ''            |               |
| textarea_label_content      | html          | no       | null          |               |
| textarea_errors             | array<br/>{<br/>&nbsp;&nbsp;&nbsp;&nbsp;content: string*, <br/>&nbsp;&nbsp;&nbsp;&nbsp;modifiers: string<br/>} | no       | null          |               |
| textarea_modifiers          | string        | no       | ''            |               |
| textarea_placeholder        | string        | no       | ''            |               |
| textarea_spinner            | int           | no       | 0             |               |

This is a full setup example:

```twig
{% include '@lin3s_front_foundation/components/form_group_textarea.html.twig' with {
    textarea_id: 'palindrome',
    textarea_required: 1,
    textarea_validate: 1,
    textarea_validation_pattern: '\\b(\\w)?(\\w)\\w?\\2\\1', {# Note that backslashes must be escaped (\ -> \\) #},
    textarea_label_content: '2-5 letter palindrome',
    textarea_errors: [{
        content: 'This field is required',
        modifiers: 'form-error--not-filled'
    }, {
        content: 'Entered text does not include a valid 2-5 letter palindrome',
        modifiers: 'form-error--not-valid'
    }],
    textarea_spinner: 1
} %}
```

---
### FormGroupCheckbox

The component is composed by the FormCheckbox, FormLabel and the FormError atoms.

#### FormGroupCheckbox - Styles

The FormGroupCheckbox component and it's associated atoms come with some default styles. You must include them in order 
to correctly render them.

```scss
@import './node_modules/lin3s-front-foundation/dist/scss/ui/atoms/form-label';
@import './node_modules/lin3s-front-foundation/dist/scss/ui/atoms/form-error';
@import './node_modules/lin3s-front-foundation/dist/scss/ui/atoms/form-checkbox';
@import './node_modules/lin3s-front-foundation/dist/scss/ui/components/form-group-checkbox';
```

#### FormGroupCheckbox - Setup

In order to setup the FormGroupCheckbox component, we will define every required parameter while including the twig 
template. 

The list of the available parameters, their type and default values are as follows:

| Parameter                   | Type          | Required | Default value | Purpose       |
|---------------------------- |:--------------|:---------|:--------------|:--------------|
| class_name                  | string        | no       | null          |               |
| modifiers                   | string        | no       | null          |               |
| checkbox_id                 | string        | no       | null          |               |
| checkbox_name               | string        | no       | null          |               |
| checkbox_required           | int           | no       | 0             |               |
| checkbox_validate           | int           | no       | 0             |               |
| checkbox_label_class_name   | string        | no       | ''            |               |
| checkbox_label_modifiers    | string        | no       | ''            |               |
| checkbox_label_content      | html          | no       | null          |               |
| checkbox_errors             | array<br/>{<br/>&nbsp;&nbsp;&nbsp;&nbsp;content: string*, <br/>&nbsp;&nbsp;&nbsp;&nbsp;modifiers: string<br/>} | no       | null          |               |
| checkbox_modifiers          | string        | no       | ''            |               |
| checkbox_content            | string        | yes      |               |               |

This is a full setup example:

```twig
{% include '@lin3s_front_foundation/components/form_group_checkbox.html.twig' with {
    checkbox_id: 'palindrome',
    checkbox_required: 1,
    checkbox_validate: 1,
    checkbox_content: 'I hace read and accept the terms and conditions',
    textarea_errors: [{
        content: 'Yout must accept the terms and conditions',
        modifiers: 'form-error--not-filled'
    }]
} %}
```

---
---
## Usage - Available UI (React) components

### FormGroupSelect (React) component

This React component will build a FormGroupSelect (vanilla) counterpart. 

#### FormGroupSelect (React) - Basic setup

This is a [controlled component][4]. For a full initialization example, take a look at the provided example [initialization][5] and [FormGroupSelect use case][6].


---
---
## Usage - Available UI atoms

### FormLabel

This atom will render an html `<label>` with some custom attributes.

The list of the available parameters, their type and default values are as follows:

| Parameter                 | Type          | Required | Default value |
|-------------------------- |:--------------|:---------|:--------------|
| label_for                 | string        | no       | null          | 
| label_required            | int           | no       | 0             |
| label_class_name          | string        | no       | null          |
| label_modifiers           | string        | no       | null          |
| label_content             | html          | yes      | -             |

This is a common setup example:

```twig
{% include '@lin3s_front_foundation/atoms/form_label.html.twig' with {
    label_for: 'user-email',
    label_required: 1,
    label_content: 'Email:'
} %}
```

#### FormLabel - Customization

In order to customize the atom's appearance, you should define these variables before importing the involved scss file.

```scss
$form-label-text-color: #222 !default;
$form-label-text-color-required: #f00 !default;
$form-label-font-family: sans-serif !default;
$form-label-font-size: 16px !default;
$form-label-font-weight: bold !default;
$form-label-line-height: 20px !default;

@import './node_modules/lin3s-front-foundation/dist/scss/ui/atoms/form-label';
```

---
### FormError

This atom will render a form-input associated error.

The list of the available parameters, their type and default values are as follows:

| Parameter                 | Type          | Required | Default value |
|-------------------------- |:--------------|:---------|:--------------|
| error_content             | string        | yes      | -             | 
| error_class_name          | string        | no       | null          |

This is a common setup example:

```twig
{% include '@lin3s_front_foundation/atoms/form_error.html.twig' with {
    error_content: 'This field is required.'
} %}
```

#### FormError - Customization

In order to customize the atom's appearance, you should define these variables before importing the involved scss file.

```scss
$form-error-background-color: #f2b8c2 !default;
$form-error-text-color: #b20008 !default;
$form-error-border-color: rgba($form-error-text-color, .5) !default;
$form-error-animation: $animation-vertical-node-in !default;
$form-error-font-family: sans-serif !default;
$form-error-font-size: 14px !default;
$form-error-font-weight: normal !default;
$form-error-line-height: 18px !default;

@import './node_modules/lin3s-front-foundation/dist/scss/ui/atoms/form-error';
```

---
### FormInput

This atom will render a form input.

The list of the available parameters, their type and default values are as follows:

| Parameter                 | Type          | Required | Default value |
|-------------------------- |:--------------|:---------|:--------------|
| input_id                  | string        | no       | -             |
| input_name                | string        | no       | null          |
| input_value               | string        | no       | null          |
| input_required            | int           | no       | 0             |
| input_type                | string        | no       | 'text'        |
| input_placeholder         | string        | no       | null          |
| input_class_name          | string        | no       | null          |
| input_modifiers           | string        | no       | null          |
| input_validate            | int           | no       | 0             |
| input_validation_pattern  | string        | no       | null          |
| input_validation_type     | string        | no       | null          |
| input_focusable           | int           | no       | 1             |

This is a common setup example:

```twig
{% include '@lin3s_front_foundation/atoms/form_input.html.twig' with {
    input_placeholder: 'Enter some data...'
} %}
```

#### FormInput - Customization

In order to customize the atom's appearance, you should define these variables before importing the involved scss file.

```scss
$form-input-border-color: #d1d1d1 !default;
$form-input-border-color-hover: #0e8fff !default;
$form-input-placeholder-text-color: rgba(#444, .8) !default;
$form-input-font-family: sans-serif !default;
$form-input-font-size: 16px !default;
$form-input-font-size-small: 14px !default;
$form-input-font-weight: normal !default;
$form-input-line-height: 20px !default;
$form-input-line-height-small: 18px !default;

@import './node_modules/lin3s-front-foundation/dist/scss/ui/atoms/form-input';
```

---
### FormSelect

This atom will render a custom rich form select.

The list of the available parameters, their type and default values are as follows:

| Parameter                 | Type          | Required | Default value |
|-------------------------- |:--------------|:---------|:--------------|
| select_id                 | string        | no       | -             |
| select_name               | string        | no       | null          |
| select_required           | int           | no       | 0             |
| select_class_name         | string        | no       | null          |
| select_modifiers          | string        | no       | null          |
| select_no_selection_label | string        | no       | '--'          |
| select_no_selection_value | string        | no       | '--'          |
| select_mobile_breakpoint  | int           | no       | 1024          |
| select_max_height_mobile  | int           | no       | 260           |
| select_max_height_desktop | int           | no       | 420           |
| select_is_filterable      | bool          | no       | 1             |
| select_filter_placeholder | string        | no       | null          |
| select_filter_order_by    | string ('label'\|'value')| no | 'value'  |
| select_options            | array         | yes      | These are the atom's options. Each option must have, at least, this shape: <br/>{<br/>&nbsp;&nbsp;&nbsp;&nbsp;value: string\*<br/>&nbsp;&nbsp;&nbsp;&nbsp;label: string\*<br/>&nbsp;&nbsp;&nbsp;&nbsp;selected: int=0<br/>}           |
| select_is_filterable      | int           | no       | 1             |
| select_outside_click_to_close_enabled            | int           | no       | 1             |
| select_validate           | int           | no       | 0             |
| select_validation_pattern | string        | no       | null          |
| select_validation_type    | string        | no       | null          |

This is a common setup example:

```twig
{% set my_select_options = [{
    label: Male,
    value: 0,
    selected: 1
}, {
    label: Female,
    value: 1
}] %}

{% include '@lin3s_front_foundation/atoms/form_select.html.twig' with {
    select_class_name: 'form-select-demo',
    select_id: 'form-select-1',
    select_required: 1,
    select_filter_placeholder: 'Type to filter...',
    select_outside_click_to_close_enabled: 1,
    select_options: my_select_options
} %}
```

#### FormSelect - Customization

In order to customize the atom's appearance, you should define these variables before importing the involved scss file.

```scss
$form-select-background-color: #fff !default;
$form-select-background-color-disabled: #eee !default;
$form-select-border-color: #d1d1d1 !default;
$form-select-font-family: sans-serif !default;
$form-select-font-size: 16px !default;
$form-select-font-weight: normal !default;
$form-select-line-height: 20px !default;
$form-select-label-text-color: #222 !default;
$form-select-label-text-color-opened: rgba($form-select-label-text-color, .5) !default;
$form-select-options-box-shadow: 0 5px 30px -10px rgba(#222, .25) !default;
$form-select-option-text-color: #222 !default;
$form-select-option-text-color-active: #fff !default;
$form-select-option-background-color-active: #0e8fff !default;
$form-select-option-background-color-hover: #eee !default;
$form-select-option-background-color-hover-and-active: rgba($form-select-option-background-color-active, .8) !default;

@import './node_modules/lin3s-front-foundation/dist/scss/ui/atoms/form-select';
```

---
### Picture

This atom will render a picture element with different sources depending on browser size and orientation.

The list of the available parameters, their type and default values are as follows:

| Parameter                 | Type          | Required | Default value |
|-------------------------- |:--------------|:---------|:--------------|
| picture_class_name        | string        | no       | null          |
| picture_image_class_name  | string        | no       | null          |
| picture_alt               | string        | no       | null          |
| picture_src_small         | string        | yes      | -             |
| picture_src_medium        | string        | yes      | -             |
| picture_src_large         | string        | yes      | -             |
| picture_src_xlarge        | string        | yes      | -             |
| picture_src_xxlarge       | string        | yes      | -             |
| picture_small_breakpoint  | int           | no       | 640           |
| picture_medium_breakpoint | int           | no       | 1024          |
| picture_large_breakpoint  | int           | no       | 1200          |
| picture_xlarge_breakpoint | int           | no       | 1440          |
| picture_custom_srcset     | html          | no       | null          |

This is a common setup example:

```twig
{% embed '@lin3s_front_foundation/atoms/picture.html.twig' with {
    picture_class_name: 'my-picture',
    picture_image_class_name: 'my-picture__image',
    picture_alt: 'Some alt text',
    picture_src_small: 'http://mydomain.com/small-image.jpg',
    picture_src_medium: 'http://mydomain.com/medium-image.jpg',
    picture_src_large: 'http://mydomain.com/large-image.jpg',
    picture_src_xlarge: 'http://mydomain.com/xlarge-image.jpg',
    picture_src_xxlarge: 'http://mydomain.com/xxlarge-image.jpg',
    picture_small_breakpoint: 768,
} %}
    {% block custom_srcset %}
        <source srcset="http://mydomain.com/xsmall-image.jpg" media="(max-width: 540px)">
    {% endblock %}
{% endembed %}
```

---
---
## Usage - Available macros
The library provides you opinionated macros for rendering the form components with pre-defined parameters.

### Atoms - form_inputs
```twig
{% macro required(type, id, placeholder, name) %}
{% macro email(id, placeholder, name) %}
{% macro requiredEmail(id, placeholder, name) %}
{% macro phone(id, placeholder, name) %}
{% macro requiredPhone(id, placeholder, name) %}
```

---
### Components - form_group_checkboxes
```twig
{% macro required(id, label, content, errors) %}
```

---
### Components - form_group_inputs
```twig
{% macro required(type, id, placeholder, label, errors, name) %}
{% macro email(id, placeholder, label, errors, name) %}
{% macro requiredEmail(id, placeholder, label, errors, name) %}
{% macro phone(id, placeholder, label, errors, name) %}
{% macro requiredPhone(id, placeholder, label, errors, name) %}
```

---
### Components - form_group_selects
```twig
{% macro required(id, filter_placeholder, label, options, errors) %}
{% macro requiredAndNot(id, filter_placeholder, label, not_valid_value, options, errors) %}
```

---
### Components - form_group_textareas
```twig
{% macro required(id, placeholder, label, errors) %}
{% macro requiredWithPattern(id, placeholder, label, pattern, errors) %}
```

---
---
## Validatory

FrontFoundation provides `js` and `scss` utility/helper code to work with the [validatory][11] librar to make easier 
our initialization or style customization.

### Validatory - initWithEvents & EventBus subscriptions

FrontFoundation library provides an utility method `EventBus.validatory.initWithEvents` for initializing the 
[validatory][11] library coupled to the [lin3s-event-bus][11] library, so our app can be notified when a form, or any 
of it's element's validation state changes using the exposed `EventBus.validatory.onFormStateChanged` and 
`EventBus.validatory.onFormElementStateChanged` subscriptions.

```js
import {EventBus} from 'lin3s-front-foundation';

EventBus.validatory.initWithEvents({
  formSelector: '#validatory-form',
  formElementSelector: '#validatory-form input, #validatory-form select, #validatory-form textarea'
});

// Event subscriptions through the event-bus

const myForm = document.getElementById('validatory-form');

EventBus.validatory.onFormStateChanged(myForm, stateChangedEvent => {
  // Do what you want with the provided payload object
  console.log(stateChangedEvent.formValidatorInstance);
});

const myFormElement = document.querySelector('#validatory-form .zip-code');

EventBus.validatory.onFormElementStateChanged(myFormElement, stateChangedEvent => {
  // Do what you want with the provided payload object
  console.log(stateChangedEvent.formElementValidatorInstance);
});
```

### Validatory - custom validators and UI customization

In order to build and append a custom validator, we must first prepare the twig markup, then write our custom validator, 
and add some needed scss.

Note that we are adding some custom validation error messages/markup. (`form-error--not-valid-zip-code`, `form-error--not-valid-no-service`).
These custom errors will match the custom validator's resolved `errorCode`s.

```twig
{% include '@lin3s_front_foundation/components/form_group_input.html.twig' with {
    input_id: 'zip-code',
    input_required: 1,
    input_validate: 1,
    input_validation_type: 'phone',
    input_placeholder: 'Enter your zip code',
    input_label_content: 'Zip code',
    input_errors: [{
        content: 'This field is required',
        modifiers: 'form-error--not-filled'
    }, {
        content: 'The entered value does not seem ot be a valid zip code',
        modifiers: 'form-error--not-valid-zip-code'
    }, , {
        content: 'Sorry, we are not providing service in the entered zip code's area.',
        modifiers: 'form-error--not-valid-no-service'
    }],
    input_spinner: 1
} %}
```

```js
import debounce from 'es6-promise-debounce';
import {validatorRegistry, Validator, asyncValidation} from 'validatory';

const
  debouncedValidation = debounce(node => {
    console.log('Asynchronous validation started');

    const validZipCode = /^\d{5}$/.test(node.value); // zip code format validation

    if (!validZipCode) {
      return {valid: false, errorCode: 'zip-code'}; // will match the DOM markup's .form-error--not-valid-zip-code
    }

    return asyncValidation(fetch('https://jsonplaceholder.typicode.com/posts/1'), response => {
      const valid = node.value === '01005';

      return valid ? {valid} : {valid: false, errorCode: 'no-service'}; // will match the DOM markup's .form-error--not-valid-no-service
    });
  }, 500),
  asyncValidator = new Validator({
    supports: node => node.id === 'async',
    isEmpty: node => node.value === '',
    isValid: node => debouncedValidation(node),
  });

validatorRegistry.add(asyncValidator);
```

```scss
@import './../../node_modules/lin3s-front-foundation/dist/scss/_mixins/form-validation';

@include form_group_custom_error('.form-group-input__errors', 'zip-code');
@include form_group_custom_error('.form-group-input__errors', 'no-service');
```

---

[1]: https://github.com/LIN3S/FrontFoundation/blob/master/src/templates/twig/components/gmap.html.twig#L26
[2]: https://snazzymaps.com/
[3]: https://developer.mozilla.org/en-US/docs/Glossary/IIFE
[4]: https://facebook.github.io/react/docs/forms.html#controlled-components
[5]: https://github.com/LIN3S/FrontFoundation/blob/master/tests/app/src/js/React/init.js
[6]: https://github.com/LIN3S/FrontFoundation/blob/master/tests/app/src/js/React/ReactFormSelect.js
[7]: https://api.jquery.com/index/
[8]: https://api.jquery.com/remove/
[9]: http://api.jquery.com/on/
[10]: http://api.jquery.com/trigger/
[11]: https://github.com/FriendsOfECMAScript/Validatory
[12]: https://github.com/LIN3S/EventBusJS
