/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
(self["webpackChunk"] = self["webpackChunk"] || []).push([["/js/app"],{

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

eval("// require('./bootstrap');\n// wyeksportowanie globalnie biblioteki jQuery\nwindow.$ = window.jQuery = __webpack_require__(/*! jquery */ \"./node_modules/jquery/dist/jquery.js\");\nwindow.bootstrap = __webpack_require__(/*! bootstrap */ \"./node_modules/bootstrap/dist/js/bootstrap.esm.js\"); // dolozenie bootstrapa i zestawu ikon bootstrapa\n// require('bootstrap');//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvYXBwLmpzLmpzIiwibWFwcGluZ3MiOiJBQUFBO0FBRUE7QUFDQUEsTUFBTSxDQUFDQyxDQUFQLEdBQVdELE1BQU0sQ0FBQ0UsTUFBUCxHQUFnQkMsbUJBQU8sQ0FBQyxvREFBRCxDQUFsQztBQUNBSCxNQUFNLENBQUNJLFNBQVAsR0FBbUJELG1CQUFPLENBQUMsb0VBQUQsQ0FBMUIsQyxDQUVBO0FBQ0EiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvYXBwLmpzP2NlZDYiXSwic291cmNlc0NvbnRlbnQiOlsiLy8gcmVxdWlyZSgnLi9ib290c3RyYXAnKTtcblxuLy8gd3lla3Nwb3J0b3dhbmllIGdsb2JhbG5pZSBiaWJsaW90ZWtpIGpRdWVyeVxud2luZG93LiQgPSB3aW5kb3cualF1ZXJ5ID0gcmVxdWlyZSgnanF1ZXJ5Jyk7XG53aW5kb3cuYm9vdHN0cmFwID0gcmVxdWlyZSgnYm9vdHN0cmFwJyk7XG5cbi8vIGRvbG96ZW5pZSBib290c3RyYXBhIGkgemVzdGF3dSBpa29uIGJvb3RzdHJhcGFcbi8vIHJlcXVpcmUoJ2Jvb3RzdHJhcCcpO1xuIl0sIm5hbWVzIjpbIndpbmRvdyIsIiQiLCJqUXVlcnkiLCJyZXF1aXJlIiwiYm9vdHN0cmFwIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/app.js\n");

/***/ }),

/***/ "./resources/js/bootstrap.js":
/*!***********************************!*\
  !*** ./resources/js/bootstrap.js ***!
  \***********************************/
/***/ (() => {

eval("// window._ = require('lodash');\n// /**\n//  * We'll load the axios HTTP library which allows us to easily issue requests\n//  * to our Laravel back-end. This library automatically handles sending the\n//  * CSRF token as a header based on the value of the \"XSRF\" token cookie.\n//  */\n// window.axios = require('axios');\n// window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';\n// /**\n//  * Echo exposes an expressive API for subscribing to channels and listening\n//  * for events that are broadcast by Laravel. Echo and event broadcasting\n//  * allows your team to easily build robust real-time web applications.\n//  */\n// // import Echo from 'laravel-echo';\n// // window.Pusher = require('pusher-js');\n// // window.Echo = new Echo({\n// //     broadcaster: 'pusher',\n// //     key: process.env.MIX_PUSHER_APP_KEY,\n// //     cluster: process.env.MIX_PUSHER_APP_CLUSTER,\n// //     forceTLS: true\n// });//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvYm9vdHN0cmFwLmpzPzZkZTciXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7QUFJQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBRUE7QUFFQTtBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFFQTtBQUVBO0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBIiwic291cmNlc0NvbnRlbnQiOlsiLy8gd2luZG93Ll8gPSByZXF1aXJlKCdsb2Rhc2gnKTtcblxuXG5cbi8vIC8qKlxuLy8gICogV2UnbGwgbG9hZCB0aGUgYXhpb3MgSFRUUCBsaWJyYXJ5IHdoaWNoIGFsbG93cyB1cyB0byBlYXNpbHkgaXNzdWUgcmVxdWVzdHNcbi8vICAqIHRvIG91ciBMYXJhdmVsIGJhY2stZW5kLiBUaGlzIGxpYnJhcnkgYXV0b21hdGljYWxseSBoYW5kbGVzIHNlbmRpbmcgdGhlXG4vLyAgKiBDU1JGIHRva2VuIGFzIGEgaGVhZGVyIGJhc2VkIG9uIHRoZSB2YWx1ZSBvZiB0aGUgXCJYU1JGXCIgdG9rZW4gY29va2llLlxuLy8gICovXG5cbi8vIHdpbmRvdy5heGlvcyA9IHJlcXVpcmUoJ2F4aW9zJyk7XG5cbi8vIHdpbmRvdy5heGlvcy5kZWZhdWx0cy5oZWFkZXJzLmNvbW1vblsnWC1SZXF1ZXN0ZWQtV2l0aCddID0gJ1hNTEh0dHBSZXF1ZXN0JztcblxuLy8gLyoqXG4vLyAgKiBFY2hvIGV4cG9zZXMgYW4gZXhwcmVzc2l2ZSBBUEkgZm9yIHN1YnNjcmliaW5nIHRvIGNoYW5uZWxzIGFuZCBsaXN0ZW5pbmdcbi8vICAqIGZvciBldmVudHMgdGhhdCBhcmUgYnJvYWRjYXN0IGJ5IExhcmF2ZWwuIEVjaG8gYW5kIGV2ZW50IGJyb2FkY2FzdGluZ1xuLy8gICogYWxsb3dzIHlvdXIgdGVhbSB0byBlYXNpbHkgYnVpbGQgcm9idXN0IHJlYWwtdGltZSB3ZWIgYXBwbGljYXRpb25zLlxuLy8gICovXG5cbi8vIC8vIGltcG9ydCBFY2hvIGZyb20gJ2xhcmF2ZWwtZWNobyc7XG5cbi8vIC8vIHdpbmRvdy5QdXNoZXIgPSByZXF1aXJlKCdwdXNoZXItanMnKTtcblxuLy8gLy8gd2luZG93LkVjaG8gPSBuZXcgRWNobyh7XG4vLyAvLyAgICAgYnJvYWRjYXN0ZXI6ICdwdXNoZXInLFxuLy8gLy8gICAgIGtleTogcHJvY2Vzcy5lbnYuTUlYX1BVU0hFUl9BUFBfS0VZLFxuLy8gLy8gICAgIGNsdXN0ZXI6IHByb2Nlc3MuZW52Lk1JWF9QVVNIRVJfQVBQX0NMVVNURVIsXG4vLyAvLyAgICAgZm9yY2VUTFM6IHRydWVcbi8vIH0pO1xuIl0sImZpbGUiOiIuL3Jlc291cmNlcy9qcy9ib290c3RyYXAuanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/bootstrap.js\n");

/***/ }),

/***/ "./resources/js/global.js":
/*!********************************!*\
  !*** ./resources/js/global.js ***!
  \********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"datatablesFunction\": () => (/* binding */ datatablesFunction)\n/* harmony export */ });\n__webpack_require__(/*! datatables.net-bs5 */ \"./node_modules/datatables.net-bs5/js/dataTables.bootstrap5.js\");\n\nvar datatablesFunction = function datatablesFunction() {\n  $(function () {\n    $('table').DataTable({\n      \"language\": {\n        \"url\": \"/vendor/datatables/i18n/\" + config.local + \".json\"\n      }\n    });\n  });\n};\n\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvZ2xvYmFsLmpzLmpzIiwibWFwcGluZ3MiOiI7Ozs7QUFBQUEsbUJBQU8sQ0FBQyx5RkFBRCxDQUFQOztBQUVBLElBQU1DLGtCQUFrQixHQUFHLFNBQXJCQSxrQkFBcUIsR0FBTTtBQUU3QkMsRUFBQUEsQ0FBQyxDQUFFLFlBQU07QUFDTEEsSUFBQUEsQ0FBQyxDQUFDLE9BQUQsQ0FBRCxDQUFXQyxTQUFYLENBQXFCO0FBQ2pCLGtCQUFZO0FBQ1IsZUFBTyw2QkFBNkJDLE1BQU0sQ0FBQ0MsS0FBcEMsR0FBNEM7QUFEM0M7QUFESyxLQUFyQjtBQUtILEdBTkEsQ0FBRDtBQVFILENBVkQiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvZ2xvYmFsLmpzPzQyZjYiXSwic291cmNlc0NvbnRlbnQiOlsicmVxdWlyZSgnZGF0YXRhYmxlcy5uZXQtYnM1Jyk7XHJcblxyXG5jb25zdCBkYXRhdGFibGVzRnVuY3Rpb24gPSAoKSA9PiB7XHJcblxyXG4gICAgJCggKCkgPT4ge1xyXG4gICAgICAgICQoJ3RhYmxlJykuRGF0YVRhYmxlKHtcclxuICAgICAgICAgICAgXCJsYW5ndWFnZVwiOiB7XHJcbiAgICAgICAgICAgICAgICBcInVybFwiOiBcIi92ZW5kb3IvZGF0YXRhYmxlcy9pMThuL1wiICsgY29uZmlnLmxvY2FsICsgXCIuanNvblwiXHJcbiAgICAgICAgICAgIH0sXHJcbiAgICAgICAgfSk7XHJcbiAgICB9KTtcclxuXHJcbn07XHJcblxyXG5leHBvcnQgeyBkYXRhdGFibGVzRnVuY3Rpb24gfTsiXSwibmFtZXMiOlsicmVxdWlyZSIsImRhdGF0YWJsZXNGdW5jdGlvbiIsIiQiLCJEYXRhVGFibGUiLCJjb25maWciLCJsb2NhbCJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/global.js\n");

/***/ }),

/***/ "./resources/js/manufacturers.js":
/*!***************************************!*\
  !*** ./resources/js/manufacturers.js ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _global__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./global */ \"./resources/js/global.js\");\n\n(0,_global__WEBPACK_IMPORTED_MODULE_0__.datatablesFunction)();//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvbWFudWZhY3R1cmVycy5qcy5qcyIsIm1hcHBpbmdzIjoiOztBQUFBO0FBRUFBLDJEQUFrQiIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9qcy9tYW51ZmFjdHVyZXJzLmpzPzU2NDQiXSwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IHsgZGF0YXRhYmxlc0Z1bmN0aW9uIH0gZnJvbSBcIi4vZ2xvYmFsXCI7XHJcblxyXG5kYXRhdGFibGVzRnVuY3Rpb24oKTsiXSwibmFtZXMiOlsiZGF0YXRhYmxlc0Z1bmN0aW9uIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/manufacturers.js\n");

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvc2Fzcy9hcHAuc2Nzcy5qcyIsIm1hcHBpbmdzIjoiO0FBQUEiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvc2Fzcy9hcHAuc2Nzcz9hODBiIl0sInNvdXJjZXNDb250ZW50IjpbIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyJdLCJuYW1lcyI6W10sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/sass/app.scss\n");

/***/ }),

/***/ "./resources/sass/manufacturers.scss":
/*!*******************************************!*\
  !*** ./resources/sass/manufacturers.scss ***!
  \*******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvc2Fzcy9tYW51ZmFjdHVyZXJzLnNjc3MuanMiLCJtYXBwaW5ncyI6IjtBQUFBIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL3Nhc3MvbWFudWZhY3R1cmVycy5zY3NzPzlhN2QiXSwic291cmNlc0NvbnRlbnQiOlsiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307Il0sIm5hbWVzIjpbXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/sass/manufacturers.scss\n");

/***/ }),

/***/ "./resources/sass/form.scss":
/*!**********************************!*\
  !*** ./resources/sass/form.scss ***!
  \**********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvc2Fzcy9mb3JtLnNjc3MuanMiLCJtYXBwaW5ncyI6IjtBQUFBIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL3Nhc3MvZm9ybS5zY3NzP2U0ZGQiXSwic291cmNlc0NvbnRlbnQiOlsiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307Il0sIm5hbWVzIjpbXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/sass/form.scss\n");

/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["css/app","css/manufacturers","css/form","/js/vendor"], () => (__webpack_exec__("./resources/js/app.js"), __webpack_exec__("./resources/js/bootstrap.js"), __webpack_exec__("./resources/js/global.js"), __webpack_exec__("./resources/js/manufacturers.js"), __webpack_exec__("./resources/sass/app.scss"), __webpack_exec__("./resources/sass/manufacturers.scss"), __webpack_exec__("./resources/sass/form.scss")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);