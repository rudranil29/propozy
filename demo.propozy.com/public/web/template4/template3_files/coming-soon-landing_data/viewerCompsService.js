define("viewerCompsService",["lodash","coreUtils","wix-ui-santa/viewerComponentService.bundle"],function(e,t,n){return function(e){var t={};function n(r){if(t[r])return t[r].exports;var o=t[r]={i:r,l:!1,exports:{}};return e[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}return n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)n.d(r,o,function(t){return e[t]}.bind(null,o));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=1904)}({0:function(t,n){t.exports=e},1904:function(e,t,n){var r,o,i=function(){function e(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}return function(t,n,r){return n&&e(t.prototype,n),r&&e(t,r),t}}();function s(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}r=[n(0),n(4),n(1905)],void 0===(o=function(e,t,n){"use strict";var r=t.getPackagesForComponent,o=t.allPackages,u=t.packagesToCallbacks,a=function(){function e(){s(this,e),this._comps={},this.STATUS={PENDING:"PENDING",LOADED:"LOADED",FAILURE:"FAILURE"}}return i(e,[{key:"markComponentAsPending",value:function(e){this._comps[e]||(this._comps[e]={status:this.STATUS.PENDING})}},{key:"isComponentLoaded",value:function(e){return this._comps[e]&&this._comps[e].status===this.STATUS.LOADED}},{key:"markComponentAsLoaded",value:function(e){this._comps[e].status=this.STATUS.LOADED}}]),e}(),c=function(e,t,n){var r=e.santaComponent,o=e.componentType,i=e.component,s=r||i;s&&t.register(o,s),s&&s.getComponentSkins&&n.addBatch(s.getComponentSkins())},f=function(){return requirejs.toUrl("wix-ui-santa")+"/"};return function(){function l(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};s(this,l),this.compRegistrar=e,this.siteAspectsRegistry=t,this.storeData=new a}return i(l,[{key:"isComponentLoaded",value:function(e){return this.storeData.isComponentLoaded(e)}},{key:"exists",value:function(e,t){return r(e,t).length>0||n.exists(e)}},{key:"prefetchComponents",value:function(o){t.loggingUtils.fedopsLogger.interactionStarted(t.loggingUtils.fedopsLogger.INTERACTIONS.VIEWER_COMPS_SERVICE.PREFETCH_START);var i=o.filter(n.exists),s=o.filter(function(t){return!e.includes(i,t)});i.forEach(function(e){return n.load(e,f())});var u=e(s).flatMap(function(e){return r(e)}).uniq().value();u.length>0&&requirejs(u,e.noop),t.loggingUtils.fedopsLogger.interactionStarted(t.loggingUtils.fedopsLogger.INTERACTIONS.VIEWER_COMPS_SERVICE.PREFETCH_END)}},{key:"loadAndRegisterAll",value:function(){var e=this;return t.loggingUtils.fedopsLogger.interactionStarted(t.loggingUtils.fedopsLogger.INTERACTIONS.VIEWER_COMPS_SERVICE.LOAD_AND_REGISTER_All_START),new Promise(function(e){return requirejs(["skins"],e)}).then(function(t){return Promise.all([function(e,t,r){return n.loadAll(r).then(function(n){return n.forEach(function(n){return n.forEach(function(n){return c(n.default,t,e)})})})}(t.skinsMap,e.compRegistrar,f()),function(e,t,n){var r=o(),i=u(r);return new Promise(function(o){return requirejs(r,function(){for(var s=arguments.length,u=Array(s),a=0;a<s;a++)u[a]=arguments[a];r.forEach(function(r,o){return i[r](u[o],t.register,n.registerHostLibsAspect,e.addBatch)}),o()})})}(t.skinsMap,e.compRegistrar,e.siteAspectsRegistry)])}).then(function(){return t.loggingUtils.fedopsLogger.interactionStarted(t.loggingUtils.fedopsLogger.INTERACTIONS.VIEWER_COMPS_SERVICE.LOAD_AND_REGISTER_All_END)})}},{key:"loadAndRegister",value:function(e,o){var i=this;return t.loggingUtils.fedopsLogger.interactionStarted(t.loggingUtils.fedopsLogger.INTERACTIONS.VIEWER_COMPS_SERVICE.LOAD_AND_REGISTER_START),this.storeData.markComponentAsPending(e),new Promise(function(e){return requirejs(["skins"],e)}).then(function(t){return n.exists(e)?function(e,t,r,o){return n.load(e,o).then(function(e){return e.forEach(function(e){return c(e.default,r,t)})})}(e,t.skinsMap,i.compRegistrar,f()):function(e,t,n,r){var o=u(e);return new Promise(function(i){return requirejs(e,function(){for(var s=arguments.length,u=Array(s),a=0;a<s;a++)u[a]=arguments[a];e.forEach(function(e,i){return o[e](u[i],n.register,r.registerHostLibsAspect,t.addBatch)}),i()})})}(r(e,o),t.skinsMap,i.compRegistrar,i.siteAspectsRegistry)}).then(function(){i.storeData.markComponentAsLoaded(e),t.loggingUtils.fedopsLogger.interactionStarted(t.loggingUtils.fedopsLogger.INTERACTIONS.VIEWER_COMPS_SERVICE.LOAD_AND_REGISTER_END)})}}]),l}()}.apply(t,r))||(e.exports=o)},1905:function(e,t){e.exports=n},4:function(e,n){e.exports=t}})});
//# sourceMappingURL=viewerCompsService.min.js.map