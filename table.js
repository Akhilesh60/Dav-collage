//** tables **/
const tables = document.querySelectorAll("table");
if (tables) {
  tables.forEach((table) => {
    const headerRow = table.querySelector("thead tr");
    const thElements = headerRow.querySelectorAll("th");
    const tdElements = table.querySelectorAll("tbody tr td");
    const tr = table.querySelectorAll("tbody tr");

    let mainIndex = 0;
    tdElements.forEach((td) => {
      let index = mainIndex / tdElements.length;
      td.setAttribute("data-label", thElements[mainIndex].innerHTML);

      if (mainIndex == thElements.length - 1) {
        mainIndex = 0;
      } else {
        mainIndex += 1;
      }
    });
  });
}