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

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"datatablesFunction\": () => (/* binding */ datatablesFunction),\n/* harmony export */   \"select2Function\": () => (/* binding */ select2Function),\n/* harmony export */   \"sweetAlertFunction\": () => (/* binding */ sweetAlertFunction)\n/* harmony export */ });\n__webpack_require__(/*! datatables.net-bs5 */ \"./node_modules/datatables.net-bs5/js/dataTables.bootstrap5.js\");\n\n__webpack_require__(/*! select2 */ \"./node_modules/select2/dist/js/select2.js\"); // podpiecie tlumaczen do select2\n\n\n$.fn.select2.amd.define('select2/i18n/pl', [], __webpack_require__(/*! select2/src/js/select2/i18n/pl */ \"./node_modules/select2/src/js/select2/i18n/pl.js\"));\n\nvar datatablesFunction = function datatablesFunction(language) {\n  $(function () {\n    $('table').DataTable({\n      \"language\": {\n        \"url\": \"/vendor/datatables/i18n/\" + language + \".json\"\n      },\n      destroy: true // \"bDestroy\": true,\n\n    });\n  });\n};\n\nvar select2Function = function select2Function(language) {\n  $('.select2').select2({\n    theme: 'bootstrap-5',\n    language: language,\n    allowClear: true\n  });\n};\n\nvar sweetAlertFunction = function sweetAlertFunction() {\n  $('form[name=confirm-action]').on('submit', function (e) {\n    var _this = this;\n\n    e.preventDefault();\n    var data = $(e.currentTarget).data();\n    var message = !_.isNil(data.message) ? data.message : 'NO_MESSAGE_PROVIDED';\n    var icon = !_.isNil(data.icon) ? data.icon : 'warning';\n    var confirmText = !_.isNil(data.confirmText) ? data.confirmText : 'Yes';\n    var confirmClass = !_.isNil(data.confirmClass) ? data.confirmClass : '';\n    var cancelText = !_.isNil(data.cancelText) ? data.cancelText : 'No';\n    var cancelClass = !_.isNil(data.cancelClass) ? data.cancelClass : '';\n    Swal.mixin({\n      customClass: {\n        confirmButton: confirmClass,\n        cancelButton: cancelClass\n      },\n      buttonsStyling: false\n    }).fire({\n      text: message,\n      showCancelButton: true,\n      confirmButtonText: confirmText,\n      cancelButtonText: cancelText,\n      focusCancel: true,\n      icon: icon\n    }).then(function (result) {\n      if (result.value) {\n        _this.submit();\n      }\n    });\n  });\n};\n\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,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QUFBQSxpQkFBaUIsRUFBRWIsV0FIZjtBQUlKYyxNQUFBQSxnQkFBZ0IsRUFBRVosVUFKZDtBQUtKYSxNQUFBQSxXQUFXLEVBQUUsSUFMVDtBQU1KaEIsTUFBQUEsSUFBSSxFQUFFQTtBQU5GLEtBTlIsRUFhR2lCLElBYkgsQ0FhUSxVQUFDQyxNQUFELEVBQVk7QUFDaEIsVUFBSUEsTUFBTSxDQUFDQyxLQUFYLEVBQWtCO0FBQ2QsYUFBSSxDQUFDQyxNQUFMO0FBQ0g7QUFDSixLQWpCRDtBQWtCSCxHQTVCRDtBQTZCSCxDQTlCRCIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9qcy9nbG9iYWwuanM/NDJmNiJdLCJzb3VyY2VzQ29udGVudCI6WyJyZXF1aXJlKCdkYXRhdGFibGVzLm5ldC1iczUnKTtcclxuXHJcbnJlcXVpcmUoJ3NlbGVjdDInKTtcclxuLy8gcG9kcGllY2llIHRsdW1hY3plbiBkbyBzZWxlY3QyXHJcbiQuZm4uc2VsZWN0Mi5hbWQuZGVmaW5lKCdzZWxlY3QyL2kxOG4vcGwnLCBbXSwgcmVxdWlyZSgnc2VsZWN0Mi9zcmMvanMvc2VsZWN0Mi9pMThuL3BsJykpO1xyXG5cclxuY29uc3QgZGF0YXRhYmxlc0Z1bmN0aW9uID0gKGxhbmd1YWdlKSA9PiB7XHJcblxyXG4gICAgJCggKCkgPT4ge1xyXG4gICAgICAgICQoJ3RhYmxlJykuRGF0YVRhYmxlKHtcclxuICAgICAgICAgICAgXCJsYW5ndWFnZVwiOiB7XHJcbiAgICAgICAgICAgICAgICBcInVybFwiOiBcIi92ZW5kb3IvZGF0YXRhYmxlcy9pMThuL1wiICsgbGFuZ3VhZ2UgKyBcIi5qc29uXCJcclxuICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgZGVzdHJveTogdHJ1ZSxcclxuICAgICAgICAgICAgLy8gXCJiRGVzdHJveVwiOiB0cnVlLFxyXG4gICAgICAgIH0pO1xyXG4gICAgfSk7XHJcbn07XHJcblxyXG5jb25zdCBzZWxlY3QyRnVuY3Rpb24gPSAobGFuZ3VhZ2UpID0+IHtcclxuICAgICQoJy5zZWxlY3QyJykuc2VsZWN0Mih7XHJcbiAgICAgICAgdGhlbWU6ICdib290c3RyYXAtNScsXHJcbiAgICAgICAgbGFuZ3VhZ2U6IGxhbmd1YWdlLFxyXG4gICAgICAgIGFsbG93Q2xlYXI6IHRydWVcclxuICAgIH0pO1xyXG59O1xyXG5cclxuY29uc3Qgc3dlZXRBbGVydEZ1bmN0aW9uID0gKCkgPT4ge1xyXG4gICAgJCgnZm9ybVtuYW1lPWNvbmZpcm0tYWN0aW9uXScpLm9uKCdzdWJtaXQnLCBmdW5jdGlvbihlKSB7XHJcbiAgICAgICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xyXG4gICAgICAgIGNvbnN0IGRhdGEgPSAkKGUuY3VycmVudFRhcmdldCkuZGF0YSgpO1xyXG4gICAgICAgIGNvbnN0IG1lc3NhZ2UgPSAhXy5pc05pbChkYXRhLm1lc3NhZ2UpID8gZGF0YS5tZXNzYWdlIDogJ05PX01FU1NBR0VfUFJPVklERUQnO1xyXG4gICAgICAgIGNvbnN0IGljb24gPSAhXy5pc05pbChkYXRhLmljb24pID8gZGF0YS5pY29uIDogJ3dhcm5pbmcnO1xyXG4gICAgICAgIGNvbnN0IGNvbmZpcm1UZXh0ID0gIV8uaXNOaWwoZGF0YS5jb25maXJtVGV4dCkgPyBkYXRhLmNvbmZpcm1UZXh0IDogJ1llcyc7XHJcbiAgICAgICAgY29uc3QgY29uZmlybUNsYXNzID0gIV8uaXNOaWwoZGF0YS5jb25maXJtQ2xhc3MpID8gZGF0YS5jb25maXJtQ2xhc3MgOiAnJztcclxuICAgICAgICBjb25zdCBjYW5jZWxUZXh0ID0gIV8uaXNOaWwoZGF0YS5jYW5jZWxUZXh0KSA/IGRhdGEuY2FuY2VsVGV4dCA6ICdObyc7ICAgIFxyXG4gICAgICAgIGNvbnN0IGNhbmNlbENsYXNzID0gIV8uaXNOaWwoZGF0YS5jYW5jZWxDbGFzcykgPyBkYXRhLmNhbmNlbENsYXNzIDogJyc7ICAgIFxyXG4gICAgXHJcbiAgICAgICAgU3dhbC5taXhpbih7XHJcbiAgICAgICAgICAgIGN1c3RvbUNsYXNzOiB7XHJcbiAgICAgICAgICAgICAgICBjb25maXJtQnV0dG9uOiBjb25maXJtQ2xhc3MsXHJcbiAgICAgICAgICAgICAgICBjYW5jZWxCdXR0b246IGNhbmNlbENsYXNzXHJcbiAgICAgICAgICAgIH0sXHJcbiAgICAgICAgICAgIGJ1dHRvbnNTdHlsaW5nOiBmYWxzZVxyXG4gICAgICAgIH0pLmZpcmUoe1xyXG4gICAgICAgICAgICB0ZXh0OiBtZXNzYWdlLFxyXG4gICAgICAgICAgICBzaG93Q2FuY2VsQnV0dG9uOiB0cnVlLFxyXG4gICAgICAgICAgICBjb25maXJtQnV0dG9uVGV4dDogY29uZmlybVRleHQsICAgICAgXHJcbiAgICAgICAgICAgIGNhbmNlbEJ1dHRvblRleHQ6IGNhbmNlbFRleHQsXHJcbiAgICAgICAgICAgIGZvY3VzQ2FuY2VsOiB0cnVlLFxyXG4gICAgICAgICAgICBpY29uOiBpY29uXHJcbiAgICAgICAgfSkudGhlbigocmVzdWx0KSA9PiB7XHJcbiAgICAgICAgICAgIGlmIChyZXN1bHQudmFsdWUpIHtcclxuICAgICAgICAgICAgICAgIHRoaXMuc3VibWl0KClcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgIH0pO1xyXG4gICAgfSk7XHJcbn1cclxuXHJcblxyXG5cclxuZXhwb3J0IHsgZGF0YXRhYmxlc0Z1bmN0aW9uLCBzZWxlY3QyRnVuY3Rpb24sIHN3ZWV0QWxlcnRGdW5jdGlvbiB9OyJdLCJuYW1lcyI6WyJyZXF1aXJlIiwiJCIsImZuIiwic2VsZWN0MiIsImFtZCIsImRlZmluZSIsImRhdGF0YWJsZXNGdW5jdGlvbiIsImxhbmd1YWdlIiwiRGF0YVRhYmxlIiwiZGVzdHJveSIsInNlbGVjdDJGdW5jdGlvbiIsInRoZW1lIiwiYWxsb3dDbGVhciIsInN3ZWV0QWxlcnRGdW5jdGlvbiIsIm9uIiwiZSIsInByZXZlbnREZWZhdWx0IiwiZGF0YSIsImN1cnJlbnRUYXJnZXQiLCJtZXNzYWdlIiwiXyIsImlzTmlsIiwiaWNvbiIsImNvbmZpcm1UZXh0IiwiY29uZmlybUNsYXNzIiwiY2FuY2VsVGV4dCIsImNhbmNlbENsYXNzIiwiU3dhbCIsIm1peGluIiwiY3VzdG9tQ2xhc3MiLCJjb25maXJtQnV0dG9uIiwiY2FuY2VsQnV0dG9uIiwiYnV0dG9uc1N0eWxpbmciLCJmaXJlIiwidGV4dCIsInNob3dDYW5jZWxCdXR0b24iLCJjb25maXJtQnV0dG9uVGV4dCIsImNhbmNlbEJ1dHRvblRleHQiLCJmb2N1c0NhbmNlbCIsInRoZW4iLCJyZXN1bHQiLCJ2YWx1ZSIsInN1Ym1pdCJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/global.js\n");

/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["/js/vendor"], () => (__webpack_exec__("./resources/js/categories.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);