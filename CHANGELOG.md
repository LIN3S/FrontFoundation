# CHANGELOG

This changelog references the relevant changes done between versions.

To get the diff for a specific change, go to https://github.com/LIN3S/FrontFoundation/commit/XXX where XXX is the change hash
To get the diff between two versions, go to https://github.com/LIN3S/FrontFoundation/compare/v0.5.0...v0.6.0
* 0.18.12
    * Radio group name added to reference it directly
* 0.18.11
    * Fixed form group radio data validate
* 0.18.10
    * Fixed form group radio macro title
* 0.18.9
    * Added `disabled` (if !`enabled`) prop to the `FormGroupInput` component's inner input.
* 0.18.8
    * Added `enabled` prop for the `FormGroupInput` component.
* 0.18.7
    * Added `selectedOption` prop for the `FormGroupSelect` component and `FormSelect` atom.
* 0.18.6
    * Added `setBoundsOffsets` method to the GMap component to offset the default map bounds (if multiple markers are provided).
* 0.18.5
    * Fixed `dispatchNativeEvent` bug on modern browsers. Refactored event dispatching implementation.
* 0.18.4
* 0.18.3
    * Added `placeholder` and `value` props to the `FormGroupInput` React component.
* 0.18.2
* 0.18.1
    * Removed `GMap` console log.
* 0.18.0
    * Updated the Gmap component's event-bus implementation. It does now publish a `GMapGeocodeEvent`, with the `status` and `results` of the response.
    * Added `ESC` keydown listener for closing the `Modal` component.
* 0.17.3
    * Updated the `validatory` dependency to the v0.2.4 solving the form submission and event blocking bug.
* 0.17.2
    * Updated the `validatory` dependency to the v0.2.3 solving a validation bug (no-required).
* 0.17.1
    * Fixed missing parameter. (`_mixin/_form-validation.scss`)
* 0.17.0
    * Updated the `validatory` dependency and refactored all related code (twig, js, scss).
* 0.16.2
    * Updated `lin3s-event-bus` dependency and updated `onNodeAdded` related implementations.
* 0.16.1
* 0.16.0
    * Implemented the `Validatory` library bridge. Events, subscriptions and initialization.
    * Added `Cookies` component to read and write document.cookie. Created also related events.
    * Added `value` param in input and textarea. Corrected some docs.
    * Refactored `Gmap` component. Parameterized cluster enabled|not, cluster's text-color and size, and the text's offsets.
    * Refactored `modal` component. `Close content button` as an optional block.
    * Refactored twig bool values for int values (0/1).
    * Fixed `modal` component's parameterization.
    * Fixed `select_outside_click_to_close_enabled` in form select.
    * Fixed `FormSelect` not opening properly when `select_is_filterable` is 0.
    * Fixed `FormSelect` focus bug.
* 0.15.2
    * Add input_name parameter to `FormInput`, take id as default. Update macros to accept input_name
* 0.15.1
    * Removed unnecessary blur listener from the React `FormSelect` implementation. Fixed associated bug.
* 0.15.0
    * Implemented `Modal` component.
    * Fixed `FormSelect` atom bugs (both implementations, React and vanilla).
    * Fixed `AsideSticky`'s z-index bug.
    * Added examples for each Ui-architecture element on the demo app.
    * Updated demo app dependencies.
    * Refactored demo app styles.
* 0.14.0
    * Implemented `AsideSticky` layout.
    * Integrated `validatory` with the `FormGroupRadio`.
    * Implemented `FormRadio` atom and `FormGroupRadio` component.
    * Removed unnecessary required propTypes. (FormSelect and FormGroupSelect)
    * Refactor/form atoms and components to accept always id and name. Added `value` param in input and textarea.
    * Corrected and update docs.
* 0.13.2
    * Updated both FormGroupSelect and FormGroupInput to extend React.Component instead of Reac.PureComponent due to
        the shouldComponentUpdate method addition.
    * Fixed FormSelect's filtering bug when inserting new html.
    * Fixed FormSelect's focus/trigger related IE bugs.
    * Updated formInput atom's border transition on :focus state.
    * Fixed bug in the tests/app webpack config.
* 0.13.1
    * `FormSelect` and `FormGroupSelect` bug fixes and optimizations
    * Refactored exported bundle configurations.
* 0.13.0
    * Removed all `ParsleyJS` and `jQuery` dependencies.
    * Added `validatory` for form validation.
* 0.12.0
    * Added back `parsleyWebpackContextReplacementPlugin` Webpack plugin to `config`.
* 0.11.4
    * Fixed focus/blur bug on the `FormSelect` react atom.
* 0.11.3
* 0.11.2
* 0.11.1
    * Refactored custom parsleyjs validator definitions.
    * Parsley validation bugs fixed.
* 0.11.0
    * Added parsleyjs validation both to the `FormSelect` react and vanilla atoms implementations.
    * Added parsleyjs validation to the `FormGroupInput` react component (required, email, phone).
    * Added required prop to the `FormGroupInput` react component.
* 0.10.0
    * Added full keyboard integration to the `FormSelect` vanilla js atom.
    * Fixed tabindex prop name in the `FormSelect` react atom.
* 0.9.0
    * Added full keyboard integration to the `FormSelect` react atom.
    * Added type prop to the `FormGroupInput` react component.
* 0.8.5
* 0.8.4
    * Fixed `waitImagesLoadInDomNode` bug.
* 0.8.3
    * Fixed keyboard/mouseover bug on the `FormSelect`.
* 0.8.2
    * Fixed some bugs on the `FormSelect` implementations and general improvements implemented.
    * Unified `form_` atoms' api.
    * Refactored `waitImagesLoadInDomNode` to work with `picture` elements as well.
* 0.8.1
    * Refactored Parsley locale catalog loading strategy.
* 0.8.0
    * Upgraded minor requirement to v0.7.0 from lin3s-event-bus.
    * Removed Bower support.
    * Added `parsleyWebpackContextReplacementPlugin` Webpack plugin to `config`.
    * Exported bundle has been separated into `dist` and `config` directories.
    * Refactored GMapMarkerDetail's style and it's associated view's DOM.
* 0.7.0
    * Added React `FormGroupInput` component to the *Ui* package
    * Added React `FormGroupSelect` component to the *Ui* package
    * Added React `FormSelect` atom to the *Ui* package
    * Added React `Loader` atom to the *Ui* package
    * Added React `ResizeAware` HOC to the *Ui* package
    * Added React `ArrowDown` svg to the *Ui* package
    * Added `FormError` atom to the *Ui* package
    * Added `FormLabel` atom to the *Ui* package
    * Added `FormInput` atom to the *Ui* package
    * Added `FormSelect` atom to the *Ui* package
    * Added `GMap` component to the *Ui* package.
    * Added `getHtmlLang` method to the *Dom* package.
    * Added `injectScript` helper method to the *Dom* package.
    * Added `loadScript` helper method to the *Dom* package.
    * Added `waitImagesLoadInDomNode` helper method to the *Dom* package.
    * Added `isIE11` helper method to *Browser* package.
    * Added `cancelablePromise` Promise wrapper to *Async* package.
    * Renamed the *app* package to *Ui*.
    * Renamed the *promises* package to *Async*.
    * Added dynamic parsley locale modules loading by env configuration.
    * Updated distributable configuration.
* 0.6.1
    * Made locale conditional based on HTML lang.
* 0.6.0
    * Parsley instance is not exposed, so you need to use it from window global object.
    * Major refactor of the `js` directory.
    * Added test app, fixed some broken imports and change miscellaneous folder with Parsley.
    * Added `twig` template directory.
    * Renamed `_parsley-form-error.scss` to `_parsley.scss` to keep naming consistency.
    * Improved `_reset` and `_common` scss files.
* 0.5.0
    * Included Parsley as dependency.
