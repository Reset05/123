const body = document.body
const btnOpen = document.querySelector('#btn-open')
const bntReg = document.querySelector('#btn-reg')
const modalBg = document.querySelector('#modal-bg')
const modalSingin = document.querySelector('#modal-signin')
const modalSignup = document.querySelector('#modal-signup')
const btnLog = document.querySelector('#btn-log')
const btnExit = document.querySelectorAll('.btn-exit')

btnOpen.onclick = (e)=>{
    e.preventDefault()
    
    setModalActive([modalBg,modalSingin])
    body.classList.add('body-freeze')

    bntReg.onclick = () =>{
        setModalSacred([modalSingin])
        setModalActive([modalSignup])
    }
    btnLog.onclick = () =>{
        setModalSacred([modalSignup])
        setModalActive([modalSingin])
    }

    btnExit.forEach(element =>{
        element.onclick = ()=>{
            setModalSacred([modalBg,modalSignup,modalSingin])
            body.classList.remove('body-freeze')
        }
    })

    modalBg.onclick = (e)=>{
        if(e.target.id == 'modal-bg'){
            setModalSacred([modalBg,modalSingin,modalSignup])
            body.classList.remove('body-freeze')
        }
    }
}

function setModalActive(arr){
    arr.forEach(element => {
        element.classList.remove('none')
    });
}
function setModalSacred(arr){
    arr.forEach(element => {
        element.classList.add('none')
    });
}