const inpEmailReg = document.querySelector('#inp-reg-email')
const errorMsg = document.querySelector('.block__error')
const btnSubmitReg = document.querySelector('#btn-submit-reg')

inpEmailReg.addEventListener('change',()=>{
    let symbolCheck = false
    inputValue = inpEmailReg.value
    for(let i = 0;i < inputValue.length; i++){
        if(inputValue[i] == '@'){
            symbolCheck = true
        }
    }
    if(symbolCheck == false){
        btnSubmitReg.setAttribute('disabled','disables')
        errorMsg.classList.remove('none')
    }
    else{
        btnSubmitReg.removeAttribute('disabled')
        errorMsg.classList.add('none')
    }
})