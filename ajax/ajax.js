$('#registrationBtn').on('click', ()=>{
    const name = $('#registrationName').val().replaceAll(' ', '');
    const email = $('#registrationEmail').val().replaceAll(' ', '');
    const password = $('#registrationPassword').val().replaceAll(' ', '');

    let error = $('#registrationError')
    error.text('')

    if(name.length < 2 ){
        error.text('Введите настоящее имя')
    }
    else if(email.lenght < 11 || !(email.indexOf('@'))){
        error.text('Введите настоящую почту')
    }
    else if(password.lenght < 9)[
        error.text('Пароль должен содержать более 8 цифр')
    ]
    else{
        $.ajax({
            url: 'ajax/registration.php',
            type: 'POST',
            cache: false,
            data: {
                'name':name,
                'email':email,
                'password':password,
            },
            dataType: 'html',
            beforeSend: function(){
                error.css('color', 'yellow')
                error.text('Происходит отправка')
            },
            success: function(data){
                error.css('color', 'green')
                error.text(data);
                if(data.includes('успешно')){
                    $('#registration').css('display', 'none');
                    $('#login').css('display', 'none');
                }
            },
        })
    }
})
$('#loginBtn').on('click', ()=>{
    const email = $('#loginEmail').val().replaceAll(' ', '');
    const password = $('#loginPassword').val().replaceAll(' ', '');

    let error = $('#loginError');
    error.text('');

    $.ajax({
        url: 'ajax/login.php',
        type: 'POST',
        cache: false,
        data: {
            'email':email,
            'password':password,
        },
        dataType: 'html',
        beforeSend: function(){
            error.css('color', 'yellow')
            error.text('Происходит отправка')
        },
        success: function(data){
            error.css('color', 'green')
            error.text(data);
            if(data.includes('успешно')){
                $('#registration').css('display', 'none');
                $('#login').css('display', 'none');
            }
        },
    })
})
$('#sendMessageBtn').on('click', () => {
    const name = $('#nameMessage').val().replaceAll(' ', '');
    const number = $('#numberMessage').val().replaceAll(' ', '');
    const text = $('#textMessage').val();

    const error = $('#messageError');

    error.text('')

    if(name.length < 4 || name.length > 20){
        error.text('Введите настоящее имя')
    }
    else if(number.length < 6 || number.length > 15){
        error.text('Введите настоящий номер')
    }
    else if(text.length < 25){
        error.text('Введите сообщение более 25 символов')
    }
    else{
        $.ajax({
            url: 'ajax/sendMessage.php',
            type: 'POST',
            cache: false,
            data: {
                'name': name,
                'number': number,
                'text': text,
            },
            dataType: 'html',
            beforeSend: function(){
                error.css('color', 'yellow')
                error.text('Происходит отправка')
            },
            success: function(){
                error.css('color', 'green')
                error.text('Данные успешно отправлены!');
            },
        })
    }
})