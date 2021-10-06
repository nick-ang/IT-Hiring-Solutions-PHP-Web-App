/**
 * Author: Nick Ang 103776375
 * Target: Apply.php and Jobs.php
 * Purpose: This file runs form validations, sessionStorage and localStorage.
 * Created: 18th Sep 2021
 * Last Updated: 18th Sep 2021
 * Credits: Swinburne Tutorial Notes
 */

// Code should be executed in "strict mode".

"use strict";

// Gets the button no. and reference number and stores in local storage.
function getRef(no, ref) {
  if (no === 1) {
    localStorage.ref = ref;
  } else if (no === 2) {
    localStorage.ref = ref;
  }
}

// Init function loads on window load
function init() {
  // Get Job Ref No.s
  const ref1 = document.getElementById("job1").innerText;
  const ref2 = document.getElementById("job2").innerText;
  // Listen for click events on each button and send appropriate id to getRef function
  document.getElementById("apply1").addEventListener("click", () => {
    getRef(1, ref1);
  });
  document.getElementById("apply2").addEventListener("click", () => {
    getRef(2, ref2);
  });
}

window.onload = init();
