// import external dependencies
import 'jquery';
import AOS from 'aos';

// Import everything from autoload
import './autoload/**/*';

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

import Example from './components/example';
import toggleMenu from './components/hamburger';
import toggleDescription from './components/description';


/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => {
  routes.loadEvents();
  toggleMenu.init();
  toggleDescription.init();
  AOS.init();

  // Example init of scripts
  // remove it when add 1st component
  Example.init();
});
