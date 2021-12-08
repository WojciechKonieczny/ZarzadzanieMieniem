"use strict";
/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
(self["webpackChunk"] = self["webpackChunk"] || []).push([["/js/categories"],{

/***/ "./resources/js/categories.js":
/*!************************************!*\
  !*** ./resources/js/categories.js ***!
  \************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _global__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./global */ \"./resources/js/global.js\");\n\n(0,_global__WEBPACK_IMPORTED_MODULE_0__.datatablesFunction)(config.local);//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvY2F0ZWdvcmllcy5qcy5qcyIsIm1hcHBpbmdzIjoiOztBQUFBO0FBRUFBLDJEQUFrQixDQUFDQyxNQUFNLENBQUNDLEtBQVIsQ0FBbEIiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvY2F0ZWdvcmllcy5qcz9hYjhmIl0sInNvdXJjZXNDb250ZW50IjpbImltcG9ydCB7IGRhdGF0YWJsZXNGdW5jdGlvbiB9IGZyb20gXCIuL2dsb2JhbFwiO1xyXG5cclxuZGF0YXRhYmxlc0Z1bmN0aW9uKGNvbmZpZy5sb2NhbCk7Il0sIm5hbWVzIjpbImRhdGF0YWJsZXNGdW5jdGlvbiIsImNvbmZpZyIsImxvY2FsIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/categories.js\n");

/***/ }),

/***/ "./resources/js/global.js":
/*!********************************!*\
  !*** ./resources/js/global.js ***!
  \********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"datatablesFunction\": () => (/* binding */ datatablesFunction),\n/* harmony export */   \"select2Function\": () => (/* binding */ select2Function)\n/* harmony export */ });\n__webpack_require__(/*! datatables.net-bs5 */ \"./node_modules/datatables.net-bs5/js/dataTables.bootstrap5.js\");\n\n__webpack_require__(/*! select2 */ \"./node_modules/select2/dist/js/select2.js\"); // podpiecie tlumaczen do select2\n\n\n$.fn.select2.amd.define('select2/i18n/pl', [], __webpack_require__(/*! select2/src/js/select2/i18n/pl */ \"./node_modules/select2/src/js/select2/i18n/pl.js\"));\n\nvar datatablesFunction = function datatablesFunction(language) {\n  $(function () {\n    $('table').DataTable({\n      \"language\": {\n        \"url\": \"/vendor/datatables/i18n/\" + language + \".json\"\n      },\n      destroy: true // \"bDestroy\": true,\n\n    });\n  });\n};\n\nvar select2Function = function select2Function(language) {\n  $('.select2').select2({\n    theme: 'bootstrap-5',\n    language: language,\n    allowClear: true\n  });\n};\n\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvZ2xvYmFsLmpzLmpzIiwibWFwcGluZ3MiOiI7Ozs7O0FBQUFBLG1CQUFPLENBQUMseUZBQUQsQ0FBUDs7QUFFQUEsbUJBQU8sQ0FBQywwREFBRCxDQUFQLEVBQ0E7OztBQUNBQyxDQUFDLENBQUNDLEVBQUYsQ0FBS0MsT0FBTCxDQUFhQyxHQUFiLENBQWlCQyxNQUFqQixDQUF3QixpQkFBeEIsRUFBMkMsRUFBM0MsRUFBK0NMLG1CQUFPLENBQUMsd0ZBQUQsQ0FBdEQ7O0FBRUEsSUFBTU0sa0JBQWtCLEdBQUcsU0FBckJBLGtCQUFxQixDQUFDQyxRQUFELEVBQWM7QUFFckNOLEVBQUFBLENBQUMsQ0FBRSxZQUFNO0FBQ0xBLElBQUFBLENBQUMsQ0FBQyxPQUFELENBQUQsQ0FBV08sU0FBWCxDQUFxQjtBQUNqQixrQkFBWTtBQUNSLGVBQU8sNkJBQTZCRCxRQUE3QixHQUF3QztBQUR2QyxPQURLO0FBSWpCRSxNQUFBQSxPQUFPLEVBQUUsSUFKUSxDQUtqQjs7QUFMaUIsS0FBckI7QUFPSCxHQVJBLENBQUQ7QUFTSCxDQVhEOztBQWFBLElBQU1DLGVBQWUsR0FBRyxTQUFsQkEsZUFBa0IsQ0FBQ0gsUUFBRCxFQUFjO0FBQ2xDTixFQUFBQSxDQUFDLENBQUMsVUFBRCxDQUFELENBQWNFLE9BQWQsQ0FBc0I7QUFDbEJRLElBQUFBLEtBQUssRUFBRSxhQURXO0FBRWxCSixJQUFBQSxRQUFRLEVBQUVBLFFBRlE7QUFHbEJLLElBQUFBLFVBQVUsRUFBRTtBQUhNLEdBQXRCO0FBS0gsQ0FORCIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9qcy9nbG9iYWwuanM/NDJmNiJdLCJzb3VyY2VzQ29udGVudCI6WyJyZXF1aXJlKCdkYXRhdGFibGVzLm5ldC1iczUnKTtcclxuXHJcbnJlcXVpcmUoJ3NlbGVjdDInKTtcclxuLy8gcG9kcGllY2llIHRsdW1hY3plbiBkbyBzZWxlY3QyXHJcbiQuZm4uc2VsZWN0Mi5hbWQuZGVmaW5lKCdzZWxlY3QyL2kxOG4vcGwnLCBbXSwgcmVxdWlyZSgnc2VsZWN0Mi9zcmMvanMvc2VsZWN0Mi9pMThuL3BsJykpO1xyXG5cclxuY29uc3QgZGF0YXRhYmxlc0Z1bmN0aW9uID0gKGxhbmd1YWdlKSA9PiB7XHJcblxyXG4gICAgJCggKCkgPT4ge1xyXG4gICAgICAgICQoJ3RhYmxlJykuRGF0YVRhYmxlKHtcclxuICAgICAgICAgICAgXCJsYW5ndWFnZVwiOiB7XHJcbiAgICAgICAgICAgICAgICBcInVybFwiOiBcIi92ZW5kb3IvZGF0YXRhYmxlcy9pMThuL1wiICsgbGFuZ3VhZ2UgKyBcIi5qc29uXCJcclxuICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgZGVzdHJveTogdHJ1ZSxcclxuICAgICAgICAgICAgLy8gXCJiRGVzdHJveVwiOiB0cnVlLFxyXG4gICAgICAgIH0pO1xyXG4gICAgfSk7XHJcbn07XHJcblxyXG5jb25zdCBzZWxlY3QyRnVuY3Rpb24gPSAobGFuZ3VhZ2UpID0+IHtcclxuICAgICQoJy5zZWxlY3QyJykuc2VsZWN0Mih7XHJcbiAgICAgICAgdGhlbWU6ICdib290c3RyYXAtNScsXHJcbiAgICAgICAgbGFuZ3VhZ2U6IGxhbmd1YWdlLFxyXG4gICAgICAgIGFsbG93Q2xlYXI6IHRydWVcclxuICAgIH0pO1xyXG59O1xyXG5cclxuXHJcblxyXG5leHBvcnQgeyBkYXRhdGFibGVzRnVuY3Rpb24sIHNlbGVjdDJGdW5jdGlvbiB9OyJdLCJuYW1lcyI6WyJyZXF1aXJlIiwiJCIsImZuIiwic2VsZWN0MiIsImFtZCIsImRlZmluZSIsImRhdGF0YWJsZXNGdW5jdGlvbiIsImxhbmd1YWdlIiwiRGF0YVRhYmxlIiwiZGVzdHJveSIsInNlbGVjdDJGdW5jdGlvbiIsInRoZW1lIiwiYWxsb3dDbGVhciJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/global.js\n");

/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["/js/vendor"], () => (__webpack_exec__("./resources/js/categories.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);