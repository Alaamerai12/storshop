const menu=document.getElementById("menu");

const actions=document.getElementById("actions");
menu.addEventListener("click",()=>{
    hundlemune();
})
function hundlemune(){
   alert("alaa")
  menu.classList.toggle("is-active");
  actions.classList.toggle("is-active");
}