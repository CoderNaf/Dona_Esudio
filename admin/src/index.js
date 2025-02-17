const popUpContent = document.querySelector('.sectionAddProyects-container')

const closePopUp = document.querySelector('.close-popUp').addEventListener('click',()=>{
    popUpContent.style.display = 'none'
})
const openPopUp = document.querySelector('.button').addEventListener('click',()=>{
    popUpContent.style.display = 'flex'
})

const budgetPrice = document.querySelector('.budget-price')

if(budgetPrice <= '10.000' ){
    budgetPrice.style.color = 'red'
}else if(budgetPrice <= '50.000'){
    budgetPrice.style.color = 'yellow'
}else{
    budgetPrice.style.color = 'green'
}