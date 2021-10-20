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

const button = document.getElementById("api");
if (button) {
  button.addEventListener("click", (event) => {
    event.preventDefault();
    const search = document.getElementById("search");
    if (search) {
      const query = search.value;
      const apiUrl = `https://api.adzuna.com/v1/api/jobs/au/search/1?app_id=bdf84df6&app_key=aa32b79d7b3db5f6507e7de8291e31ac&results_per_page=5&title_only=${query}`;
      // Call Function on click
      fetchData(apiUrl);
    }
  });
}
