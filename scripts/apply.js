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

// Receive form variables and store in sessionStorage
function storeBooking(
  ref,
  firstname,
  lastname,
  dob,
  male,
  female,
  neutral,
  street,
  suburb,
  state,
  postcode,
  email,
  number,
  html,
  css,
  javascript,
  php,
  mysql,
  other,
  text
) {
  let gender = "";
  if (male) gender = "male";
  if (female) gender = "female";
  if (neutral) gender = "neutral";
  sessionStorage.gender = gender;
  sessionStorage.ref = ref;
  sessionStorage.firstname = firstname;
  sessionStorage.lastname = lastname;
  sessionStorage.dob = dob;
  sessionStorage.street = street;
  sessionStorage.suburb = suburb;
  sessionStorage.state = state;
  sessionStorage.postcode = postcode;
  sessionStorage.email = email;
  sessionStorage.number = number;
  if (html) html = "html";
  sessionStorage.html = html;
  if (css) css = "css";
  sessionStorage.css = css;
  if (javascript) javascript = "javascript";
  sessionStorage.javascript = javascript;
  if (php) php = "php";
  sessionStorage.php = php;
  if (mysql) mysql = "mysql";
  sessionStorage.mysql = mysql;
  if (other) other = "other";
  sessionStorage.other = other;
  sessionStorage.text = text;
}

// Function to check if postcode matches state and returns error message to append if incorrect
function checkState(postcode, state) {
  let errMsg = "";
  const firstDigit = postcode.charAt(0);
  switch (state) {
    case "VIC":
      if (firstDigit !== "3") {
        errMsg =
          "The selected state must match the first digit of the postcode.\n";
      }
      break;
    case "NSW":
      if (firstDigit !== "1" && firstDigit !== "2") {
        errMsg =
          "The selected state must match the first digit of the postcode.\n";
      }
      break;
    case "QLD":
      if (firstDigit !== "4" && firstDigit !== "9") {
        errMsg =
          "The selected state must match the first digit of the postcode.\n";
      }
      break;
    case "NT":
      if (firstDigit !== "0") {
        errMsg =
          "The selected state must match the first digit of the postcode.\n";
      }
      break;
    case "WA":
      if (firstDigit !== "6") {
        errMsg =
          "The selected state must match the first digit of the postcode.\n";
      }
      break;
    case "SA":
      if (firstDigit !== "5") {
        errMsg =
          "The selected state must match the first digit of the postcode.\n";
      }
      break;
    case "TAS":
      if (firstDigit !== "7") {
        errMsg =
          "The selected state must match the first digit of the postcode.\n";
      }
      break;
    case "ACT":
      if (firstDigit !== "0") {
        errMsg =
          "The selected state must match the first digit of the postcode.\n";
      }
      break;
    default:
      errMsg = "Please enter a valid state and postcode.\n";
  }
  return errMsg;
}

// Function to check form data is entered correctly
function validate() {
  // initialize local variables
  let result = true;
  const dob = document.getElementById("dob").value;
  const dateParts = dob.split("/");
  const dateObject = new Date(+dateParts[2], dateParts[1] - 1, +dateParts[0]);
  const current = new Date(Date.now());
  const age = current.getFullYear() - dateObject.getFullYear();
  const state = document.getElementById("state").value;
  const postcode = document.getElementById("postcode").value;
  const other = document.getElementById("other").checked;
  const text = document.getElementById("text").value;
  const ref = document.getElementById("ref").value;
  const firstname = document.getElementById("firstname").value;
  const lastname = document.getElementById("lastname").value;
  const male = document.getElementById("male").checked;
  const female = document.getElementById("female").checked;
  const neutral = document.getElementById("neutral").checked;
  const street = document.getElementById("street").value;
  const suburb = document.getElementById("suburb").value;
  const email = document.getElementById("email").value;
  const number = document.getElementById("number").value;
  const html = document.getElementById("html").checked;
  const css = document.getElementById("css").checked;
  const javascript = document.getElementById("javascript").checked;
  const php = document.getElementById("php").checked;
  const mysql = document.getElementById("mysql").checked;

  const debug = false

  if (debug) {
    // Ensure text area is not blank if other skills checkbox is ticked
    if (other && text === "") {
      document.getElementById("error-text").innerHTML =
        "Please enter skills in the text area\n";
      result = false;
    }

    // Check if postcode matches state (calls checkState function)
    if (postcode) {
      const tempMsg = checkState(postcode, state);
      if (tempMsg !== "") {
        document.getElementById("error-postcode").innerHTML = tempMsg;
        result = false;
      }
    }

    // Check if age is within 15 - 79
    if (isNaN(age)) {
      document.getElementById("error-dob").innerHTML =
        "Your age must be a number\n";
      result = false;
    } else if (age < 15) {
      document.getElementById("error-dob").innerHTML =
        "Your age must be 15 or older\n";
      result = false;
    } else if (age >= 80) {
      document.getElementById("error-dob").innerHTML =
        "Your age must be less than 80\n";
      result = false;
    }
  }
  // Send form data to storeBooking if no errors
  if (result) {
    storeBooking(
      ref,
      firstname,
      lastname,
      dob,
      male,
      female,
      neutral,
      street,
      suburb,
      state,
      postcode,
      email,
      number,
      html,
      css,
      javascript,
      php,
      mysql,
      other,
      text
    );
  }
  return result;
}

// Prefill form from sessionStorage and localStorage
function prefillForm() {
  // Check if ref number is in localStorage and set value if present
  if (localStorage.ref !== undefined) {
    document.getElementById("ref").value = localStorage.ref;
  }
  // Check if form data is in sessionStorage and set value if present
  if (sessionStorage.firstname !== undefined) {
    document.getElementById("firstname").value = sessionStorage.firstname;
    document.getElementById("lastname").value = sessionStorage.lastname;
    document.getElementById("dob").value = sessionStorage.dob;
    document.getElementById("street").value = sessionStorage.street;
    document.getElementById("suburb").value = sessionStorage.suburb;
    document.getElementById("state").value = sessionStorage.state;
    document.getElementById("postcode").value = sessionStorage.postcode;
    document.getElementById("email").value = sessionStorage.email;
    document.getElementById("number").value = sessionStorage.number;
    document.getElementById("text").value = sessionStorage.text;
    if (sessionStorage.html === "html")
      document.getElementById("html").checked = true;
    if (sessionStorage.css === "css")
      document.getElementById("css").checked = true;
    if (sessionStorage.javascript === "javascript")
      document.getElementById("javascript").checked = true;
    if (sessionStorage.php === "php")
      document.getElementById("php").checked = true;
    if (sessionStorage.mysql === "mysql")
      document.getElementById("mysql").checked = true;
    if (sessionStorage.other === "other")
      document.getElementById("other").checked = true;
    switch (sessionStorage.gender) {
      case "male":
        document.getElementById("male").checked = true;
        break;
      case "female":
        document.getElementById("female").checked = true;
        break;
      case "neutral":
        document.getElementById("neutral").checked = true;
        break;
      default:
        document.getElementById("neutral").checked = true;
    }
  }
}

// initialize function called on window load
function init() {
  // call prefill form to prefill application if sessionStorage exists
  prefillForm();
  // Get form elements
  const regForm = document.getElementById("regform");
  // On submit call validate function
  regForm.onsubmit = validate;
}

window.onload = init();
