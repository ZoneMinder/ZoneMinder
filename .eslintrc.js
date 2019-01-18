"use strict";

module.exports = {
  "env": {
    "browser": true,
  },
  "extends": ["google"],
  "rules": {
    "camelcase": "off",
    "comma-dangle": "off",
    "curly": "off",
    "guard-for-in": "off",
    "key-spacing": "off",
    "keyword-spacing": "off",
    "max-len": "off",
    "new-cap": ["error", {
      capIsNewExceptions: ["Error", "Warning", "Debug", "Polygon_calcArea", "Play", "Stop"],
      newIsCapExceptionPattern: "^Asset\.."
    }],
    "no-array-constructor": "off",
    "no-caller": "off",
    "no-new-object": "off",
    "no-unused-vars": "off",
    "no-var": "off",
    "object-curly-spacing": "off",
    "prefer-rest-params": "off",
    "quotes": "off",
    "require-jsdoc": "off",
    "spaced-comment": "off",
  },
};
