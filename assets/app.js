
import './sass/style.scss'

// Bootstrap - The most popular framework uses as the foundation. Learn more: http://getbootstrap.com
window.bootstrap = require('bootstrap');

// Popper.js - Tooltip & Popover Positioning Engine used by Bootstrap. Learn more: https://popper.js.org
window.Popper = require('@popperjs/core');

// Wnumb - Number & Money formatting. Learn more: https://refreshless.com/wnumb/
window.wNumb = require('wnumb');

// Moment - Parse, validate, manipulate, and display dates and times in JavaScript. Learn more: https://momentjs.com/
window.moment = require('moment');

// Keenthemes' plugins
window.KTUtil = require('./js/components/util.js');
window.KTBlockUI = require('./js/components/blockui.js');
window.KTCookie = require('./js/components/cookie.js');
window.KTDialer = require('./js/components/dialer.js');
window.KTEventHandler = require('./js/components/event-handler.js');
window.KTDrawer = require('./js/components/drawer.js');
window.KTFeedback = require('./js/components/feedback.js');
window.KTImageInput = require('./js/components/image-input.js');
window.KTMenu = require('./js/components/menu.js');
window.KTPasswordMeter = require('./js/components/password-meter.js');
window.KTScroll = require('./js/components/scroll.js');
window.KTScrolltop = require('./js/components/scrolltop.js');
window.KTSearch = require('./js/components/search.js');
window.KTStepper = require('./js/components/stepper.js');
window.KTSticky = require('./js/components/sticky.js');
window.KTSwapper = require('./js/components/swapper.js');
window.KTToggle = require('./js/components/toggle.js');

// Layout base js
window.KTApp = require('./js/layout/app.js');
window.KTLayoutExplore = require('./js/layout/explore.js');
window.KTLayoutSearch = require('./js/layout/search.js');
window.KTLayoutToolbar = require('./js/layout/toolbar.js');


// start the Stimulus application
import './bootstrap'

