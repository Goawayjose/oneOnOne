/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 9);
/******/ })
/************************************************************************/
/******/ ({

/***/ 10:
/***/ (function(module, exports) {

throw new Error("Module build failed: SyntaxError: Unexpected token (54:0)\n\n\u001b[0m \u001b[90m 52 | \u001b[39m        \u001b[36mif\u001b[39m(\u001b[36mthis\u001b[39m\u001b[33m.\u001b[39mstatus \u001b[33m!=\u001b[39m \u001b[32m\"starting\"\u001b[39m) {\n \u001b[90m 53 | \u001b[39m            \u001b[36mthis\u001b[39m\u001b[33m.\u001b[39mtimeClock\u001b[33m++\u001b[39m\u001b[33m;\u001b[39m\n\u001b[31m\u001b[1m>\u001b[22m\u001b[39m\u001b[90m 54 | \u001b[39m\u001b[33m<<\u001b[39m\u001b[33m<<\u001b[39m\u001b[33m<<\u001b[39m\u001b[33m<\u001b[39m \u001b[33mHEAD\u001b[39m\n \u001b[90m    | \u001b[39m\u001b[31m\u001b[1m^\u001b[22m\u001b[39m\n \u001b[90m 55 | \u001b[39m            \u001b[36mif\u001b[39m (\u001b[36mthis\u001b[39m\u001b[33m.\u001b[39mtimeClock \u001b[33m===\u001b[39m \u001b[35m5\u001b[39m) {\n \u001b[90m 56 | \u001b[39m              app\u001b[33m.\u001b[39mstatus \u001b[33m=\u001b[39m \u001b[32m\"timeClockViolation\"\u001b[39m\u001b[33m;\u001b[39m\n \u001b[90m 57 | \u001b[39m\u001b[33m===\u001b[39m\u001b[33m===\u001b[39m\u001b[33m=\u001b[39m\u001b[0m\n");

/***/ }),

/***/ 38:
/***/ (function(module, exports) {

throw new Error("Module build failed: ModuleBuildError: Module build failed: \n}\n^\n      Invalid CSS after \"}\": expected 1 selector or at-rule, was \"<<<<<<< HEAD\"\n      in /Users/joserammirez/Desktop/codes/builds/oneOnOne/resources/assets/sass/app.scss (line 70, column 2)\n    at runLoaders (/Users/joserammirez/Desktop/codes/builds/oneOnOne/node_modules/webpack/lib/NormalModule.js:195:19)\n    at /Users/joserammirez/Desktop/codes/builds/oneOnOne/node_modules/loader-runner/lib/LoaderRunner.js:364:11\n    at /Users/joserammirez/Desktop/codes/builds/oneOnOne/node_modules/loader-runner/lib/LoaderRunner.js:230:18\n    at context.callback (/Users/joserammirez/Desktop/codes/builds/oneOnOne/node_modules/loader-runner/lib/LoaderRunner.js:111:13)\n    at Object.asyncSassJobQueue.push [as callback] (/Users/joserammirez/Desktop/codes/builds/oneOnOne/node_modules/sass-loader/lib/loader.js:55:13)\n    at Object.<anonymous> (/Users/joserammirez/Desktop/codes/builds/oneOnOne/node_modules/async/dist/async.js:2257:31)\n    at Object.callback (/Users/joserammirez/Desktop/codes/builds/oneOnOne/node_modules/async/dist/async.js:958:16)\n    at options.error (/Users/joserammirez/Desktop/codes/builds/oneOnOne/node_modules/node-sass/lib/index.js:294:32)");

/***/ }),

/***/ 9:
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(10);
module.exports = __webpack_require__(38);


/***/ })

/******/ });