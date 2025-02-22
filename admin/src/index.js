const popUpContent = document.querySelector('.sectionAddProyects-container')

const closePopUp = document.querySelector('.close-popUp').addEventListener('click',()=>{
    popUpContent.style.display = 'none'
})
const openPopUp = document.querySelector('.button').addEventListener('click',()=>{
    popUpContent.style.display = 'flex'
})

const budgetPrice = document.querySelector('.budget-price')
budgetPrice.style.color = 'green'

const buttonMenu = document.querySelector('.profile-header').addEventListener('click',()=>{
    const menu = document.querySelector('.menuHeader')
    menu.classList.toggle('menuHeaderOn')
    const iconMenu = document.querySelector('.iconMenu')
    iconMenu.classList.toggle('rotateIcon')
})