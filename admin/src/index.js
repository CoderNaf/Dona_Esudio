const popUpContent = document.querySelector('.sectionAddProyects-container')

const closePopUp = document.querySelector('.close-popUp').addEventListener('click',()=>{
    popUpContent.style.display = 'none'
})
const openPopUp = document.querySelector('.button').addEventListener('click',()=>{
    popUpContent.style.display = 'flex'
})