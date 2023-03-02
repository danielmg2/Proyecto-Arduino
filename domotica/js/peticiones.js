window.addEventListener("load", async (event) => {
  //   console.log("carga");
});


export function ponerOyentes(){
  document.getElementById("1").addEventListener("click", (event) => {
    event.preventDefault();
    console.log("1");
  });
  document.getElementById("2").addEventListener("click", (event) => {
    event.preventDefault();
  });
  document.getElementById("3").addEventListener("click", (event) => {
    event.preventDefault();
  });
  document.getElementById("4").addEventListener("click", (event) => {
    event.preventDefault();
  });
}