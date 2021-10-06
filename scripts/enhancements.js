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

// Enhancement: Function to fetch jobs from Adzuna API
function fetchData(apiUrl) {
  // Fetch data from API
  fetch(`${apiUrl}`)
    .then((res) => res.json())
    .then((data) => {
      // Loop through object and get categories
      for (let index = 0; index < data.results.length; index += 1) {
        const category = data.results[index];
        if (category.title) {
          const message = document.getElementById("mymessage");
          message.insertAdjacentHTML(
            "afterend",
            `Job Title: ${category.title} | Company: ${category.company.display_name} | Location | ${category.location.display_name}Link: <a href="${category.redirect_url}">Link</a><br><br>`
          );
        }
      }
    });
}

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

// Listen for event
function initEnhance() {
  // Start clock
  clock();
  // Enhancement: Select search element and call Adzuna API fetch on search submit
  const search = document.getElementById("search");
  if (search) {
    const query = search.value;
    const apiUrl = `https://api.adzuna.com/v1/api/jobs/au/search/1?app_id=bdf84df6&app_key=aa32b79d7b3db5f6507e7de8291e31ac&results_per_page=5&title_only=${query}`;
    // Call Function on click
    search.onsubmit = fetchData(apiUrl);
  }
}

window.onload = initEnhance();
