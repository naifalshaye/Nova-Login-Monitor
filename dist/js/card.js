!function(n){var e={};function t(o){if(e[o])return e[o].exports;var r=e[o]={i:o,l:!1,exports:{}};return n[o].call(r.exports,r,r.exports,t),r.l=!0,r.exports}t.m=n,t.c=e,t.d=function(n,e,o){t.o(n,e)||Object.defineProperty(n,e,{configurable:!1,enumerable:!0,get:o})},t.n=function(n){var e=n&&n.__esModule?function(){return n.default}:function(){return n};return t.d(e,"a",e),e},t.o=function(n,e){return Object.prototype.hasOwnProperty.call(n,e)},t.p="",t(t.s=0)}([function(n,e,t){t(1),n.exports=t(5)},function(n,e,t){Nova.booting(function(n,e){n.component("nova-login-monitor",t(2))})},function(n,e,t){var o=t(3)(t(4),null,!1,null,null,null);n.exports=o.exports},function(n,e){n.exports=function(n,e,t,o,r,i){var u,c=n=n||{},s=typeof n.default;"object"!==s&&"function"!==s||(u=n,c=n.default);var a,f="function"==typeof c?c.options:c;if(e&&(f.render=e.render,f.staticRenderFns=e.staticRenderFns,f._compiled=!0),t&&(f.functional=!0),r&&(f._scopeId=r),i?(a=function(n){(n=n||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext)||"undefined"==typeof __VUE_SSR_CONTEXT__||(n=__VUE_SSR_CONTEXT__),o&&o.call(this,n),n&&n._registeredComponents&&n._registeredComponents.add(i)},f._ssrRegister=a):o&&(a=o),a){var l=f.functional,d=l?f.render:f.beforeCreate;l?(f._injectStyles=a,f.render=function(n,e){return a.call(e),d(n,e)}):f.beforeCreate=d?[].concat(d,a):[a]}return{esModule:u,exports:c,options:f}}},function(n,e,t){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default={props:["card"],mounted:function(){Nova.request().get("/nova-vendor/nova-login-monitor/slack",{}).then(function(n){}).catch(function(n){})}}},function(n,e){}]);