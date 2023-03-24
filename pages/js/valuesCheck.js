const inpEmailReg = document.querySelector('#inp-reg-email')
const errorMsg = document.querySelector('.block__error')
const btnSubmitReg = document.querySelector('#btn-submit-reg')

inpEmailReg.addEventListener('change',()=>{
    symbolCheck = false
    inputValue = inpEmailReg.value
    inputValue.forEach(element => {
        if(element == '@'){
            symbolCheck = true
        }
    });
    if(symbolCheck == false){
        errorMsg.classList.remove(none)
        btnSubmitReg.setAttribute('disabled','disabled')
    }
})