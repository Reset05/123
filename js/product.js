const btnReview = document.querySelector('.link__review')
const describe = document.querySelector('.describe')
const review = document.querySelector('.add__review')
const characteristic = document.querySelector('.link__char')

btnReview.addEventListener('click',function(e){
    e.preventDefault()
    describe.classList.add('none')
    review.classList.remove('none')
    btnReview.classList.add('light')
    characteristic.classList.remove('light')
})

characteristick.addEventListener('click',function(e){
    e.preventDefault()
    describe.classList.remove('none')
    review.classList.add('none')
    btnReview.classList.remove('light')
    characteristic.classList.add('light')
})