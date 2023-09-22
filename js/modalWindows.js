$('#aboutMe').on('click', ()=>{
    document.querySelector('#infoMe').scrollIntoView({behavior: 'smooth'});
})
$('#writeMe').on('click', ()=>{
    document.querySelector('#form').scrollIntoView({behavior: 'smooth'})
})

class Modal{
    trigger;
    ModalContent;
    Modal;
    stop;

    constructor(trigger, ModalContent, Modal, stop){
        this.trigger = trigger;
        this.ModalContent = ModalContent;
        this.Modal = Modal;
        this.stop = stop;

        $(this.trigger).on('click', ()=>{
            $(this.ModalContent).css('transform', 'translateY(0)');

            $(this.Modal).css(
                {'visibility': 'visible',
                'opacity': '100',
            });
        
            $('body').css('overflow', 'hidden')
        })
        $(stop).on('click', ()=>{
            $(this.ModalContent).css('transform', 'translateY(-300%)');
    
            $(this.Modal).css(
                {'visibility': 'hidden',
                'opacity': '0',
            });
        
            $('body').css('overflow', 'visible')
        })
        $(this.ModalContent).on('click', (event)=>{
            event.stopPropagation()
        })
        $(this.Modal).on('click', ()=>{
            $(this.ModalContent).css('transform', 'translateY(-300%)');
    
            $(this.Modal).css(
                {'visibility': 'hidden',
                'opacity': '0',
            });
        
            $('body').css('overflow', 'visible')
        })
    }
}

let registration = new Modal('#registration', '#modalContent', '#modal', '#closeModal');
let login = new Modal('#login', '#modalContent2', '#modal2', '#closeModal2');
let skill1 = new Modal('#skill1', '#modalContent3', '#modal3', '#closeModal3');
let skill2 = new Modal('#skill2', '#modalContent4', '#modal4', '#closeModal4');
let skill3 = new Modal('#skill3', '#modalContent5', '#modal5', '#closeModal5')