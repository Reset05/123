const body = document.body
const btnOpen = document.querySelector('#btn-open')
const bntReg = document.querySelector('#btn-reg')
const modalBg = document.querySelector('#modal-bg')
const modalSingin = document.querySelector('#modal-signin')
const modalSignup = document.querySelector('#modal-signup')
const btnLog = document.querySelector('#btn-log')
const btnExit = document.querySelectorAll('.btn-exit')

function setModalActive(arr){
    arr.forEach(element => {
        element.classList.remove('none')
    });
}
function setModalHidden(arr){
    arr.forEach(element => {
        element.classList.add('none')
    });
}

if(document.querySelector('.logout') != null ){

    const btnLogout = document.querySelector('.logout')
    const login = document.querySelector('.login__text')

    login.onclick = (e)=>{
        e.preventDefault()
        btnLogout.classList.remove('none')
    }

    document.onclick = (e)=>{
        if(e.target.classList.contains('login__text') == false && e.target.classList.contains('logout') == false){
            btnLogout.classList.add('none')
        }
    }
}


if( btnOpen != undefined){
    modalSingWindows()
}
function modalSingWindows(){
    btnOpen.onclick = (e)=>{
        e.preventDefault()
        
        setModalActive([modalBg,modalSingin])
        body.classList.add('body-freeze')

        bntReg.onclick = () =>{
            setModalHidden([modalSingin])
            setModalActive([modalSignup])
        }
        btnLog.onclick = () =>{
            setModalHidden([modalSignup])
            setModalActive([modalSingin])
        }

        btnExit.forEach(element =>{
            element.onclick = ()=>{
                setModalHidden([modalBg,modalSignup,modalSingin])
                body.classList.remove('body-freeze')
            }
        })

        modalBg.onclick = (e)=>{
            if(e.target.id == 'modal-bg'){
                setModalHidden([modalBg,modalSingin,modalSignup])
                body.classList.remove('body-freeze')
            }
        }
    }
}