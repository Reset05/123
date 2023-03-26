const inpEmailReg = document.querySelector('#inp-reg-email')
const errorMsg = document.querySelector('.block__error')
const btnSubmitReg = document.querySelector('#btn-submit-reg')

inpEmailReg.addEventListener('change',()=>{
    let symbolCheck = false
    inputValue = inpEmailReg.value
        if(inputValue != 0){
            for(let i = 0;i < inputValue.length; i++){
                if(inputValue[i] == '@'){
                    symbolCheck = true
                }
            }
            if(symbolCheck == false){
                btnSubmitReg.setAttribute('disabled','disables')
                btnSubmitReg.classList.add('btn-disabled')
                errorMsg.classList.remove('none')
            }
            else{
                btnSubmitReg.removeAttribute('disabled')
                btnSubmitReg.classList.remove('btn-disabled')
                errorMsg.classList.add('none')
            }
        }
        else{
            errorMsg.classList.add('none')
            btnSubmitReg.classList.add('btn-disabled')
            btnSubmitReg.setAttribute('disabled','disables')
        }
})