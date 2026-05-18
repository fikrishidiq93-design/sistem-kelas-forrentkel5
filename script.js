// SEARCH + HIGHLIGHT
document.getElementById("searchInput").addEventListener("keyup", function(){
  let filter = this.value.toLowerCase();
  let rows = document.querySelectorAll("#tableMatkul tbody tr");

  rows.forEach(row=>{
    let text = row.innerText.toLowerCase();

    if(text.includes(filter)){
      row.style.display = "";
      row.style.background = "#eef1ff";
    } else {
      row.style.display = "none";
    }
  });
});


// SORT TABLE
function sortTable(n){
  let table = document.getElementById("tableMatkul");
  let rows = Array.from(table.rows).slice(1);
  let asc = table.getAttribute("data-sort") !== "asc";

  rows.sort((a, b)=>{
    let x = a.cells[n].innerText.toLowerCase();
    let y = b.cells[n].innerText.toLowerCase();

    return asc ? x.localeCompare(y) : y.localeCompare(x);
  });

  rows.forEach(row=>table.tBodies[0].appendChild(row));

  table.setAttribute("data-sort", asc ? "asc" : "desc");
}