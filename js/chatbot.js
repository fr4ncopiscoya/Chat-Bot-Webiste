const chatbotToggle = document.querySelector(".chatbot-toggler");
chatbotToggle.addEventListener("click", () => document.body.classList.toggle("show-chatbot"));

$(document).ready(function () {
    $("#send-btn").on("click", function () {
        $value = $("#data").val();
        $msg = '<li class = "chat outgoing"><span class= "material-symbols-outlined"><img src="../svg/bot.svg" alt=""></span><p>' + $value + '</p> </li>';
        $(".chatbox").append($msg);
        $("#data").val('');

        // iniciar el código ajax
        $.ajax({
            url: '../includes/message.php',
            type: 'POST',
            data: 'text=' + $value,
            success: function (result) {
                $replay = '<li class = "chat incoming"><span class= "material-symbols-outlined"><img src="../svg/bot.svg" alt=""></span><p>' + result + '</p> </li>';
                $(".chatbox").append($replay);
                // cuando el chat baja, la barra de desplazamiento llega automáticamente al final
                $(".chatbox").scrollTop($(".chatbox")[0].scrollHeight);
            }
        });
    });
});