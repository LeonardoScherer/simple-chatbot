<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src/css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    <div class="wrapper">
        <div class="title">ChatBot</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Olá, em que posso ajudá-lo?</p>
                </div>
            </div>
            
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Digite" required>
                <button id="send-btn">Enviar</button>
            </div>
        </div>
    </div>

    <script>
        $(document).ready( function() {
            $("#send-btn").on("click", function() {
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');

                $.ajax({
                    url: 'src/message.php',
                    type: 'POST',
                    data: 'text=' +$value,
                    success: function(result) {
                        $replay = '<div class="bot-inbox inbox">'
                        +'<div class="icon">'
                        +'<i class="fas fa-user"></i>'
                        +'</div><div class="msg-header"><p>'+ result +'</p></div></div>'
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight)
                    }
                })
            }) 
        })
    </script>
</body>
</html>