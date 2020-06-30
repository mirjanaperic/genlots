'use strict';

$ = require('jquery');

const Navigation = require('./core/navigation');
//const example = require('./site/example');
const Tabs = require('./site/tabs');
const Faq = require('./site/faq');
// const Global = require('./site/global');
const Slick = require('./site/slick');
const ChangeOrder = require('./site/changeOrder');
// const StickyScroll = require('./site/stickyScroll');


jQuery( function(){

  /**
   * Initialize site navigation
   */
  Navigation.init();

  /**
   * Initialize tabs module
   */
  Tabs.init();

  /**
   * Initialize FAQ
   */
  Faq.init();

  /**
   * Initialize FAQ
   */
//   Global.init();

  /**
   * Initialize Slick
   */
  Slick.init();
  /**
   * Initialize ChangeOrder
   */
  ChangeOrder.init();

  /**
   * Initialize StickyScroll
   */
//   StickyScroll.init();


});