const menu = document.querySelector('#menu');
const cwrapper = document.querySelector('#cwrapper')
const header = document.querySelector('#header')
const reHeader = document.querySelector("#reHeader-wrapper")
const footer = document.querySelector('#footer')

menu.onclick = function(){
    // alert('hit')
   cwrapper.classList.toggle('hidden')
   header.classList.toggle('headerNav')
   reHeader.classList.toggle('hidden')
   footer.classList.toggle('footerNav')
    // body.classList.toggle('mobile-menu')

}