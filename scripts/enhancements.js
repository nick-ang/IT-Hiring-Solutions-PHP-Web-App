/**
 * Author: Nick Ang 103776375
 * Target: All pages
 * Purpose: This file is for the enhancements job search using Adzuna API and a Live Clock.
 * Created: 18th Sep 2021
 * Last Updated: 18th Sep 2021
 * Credits: Swinburne Tutorial Notes, Adzuna API, Codepen javaScript clock
 */

// Code should be executed in "strict mode".

"use strict";

// Create Clock Function
function clock() {
  // Get current time and day from Date() Function
  const now = new Date();
  let hours = now.getHours();
  let min = now.getMinutes();
  let sec = now.getSeconds();
  const days = [
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday",
  ];
  // Convert day integer to day string using days array
  const day = days[now.getDay()];
  // Get Clock element
  const pageTime = document.getElementById("clock");
  // Calculate exact time and if AM or PM
  const amPm = hours < 12 ? "AM" : "PM";
  hours = hours % 12 || 12;
  min = (min < 10 ? "0" : "") + min;
  sec = (sec < 10 ? "0" : "") + sec;
  // Append to html
  pageTime.innerHTML = `<h1>${day} ${hours}:${min}:${sec} ${amPm}</h1>`;
  // Reset code after 1000 s
  setTimeout(clock, 1000);
}



window.onload = clock();
// document.getElementById("api").addEventListener("click", initEnhance());
