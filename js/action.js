$(document).ready(function() {
    $('#form').submit(function(e) {
        e.preventDefault()

        $.ajax({
            url: 'test.php',
            data: $(this).serialize(),
            method: 'POST',
            success: function(resp) {
                $('#error_msg').html(resp);
            }
        })
    })
})

let popup=document.getElementById("popup");
function openPopup()
{
    popup.classList.add("open-popup");
}
function closePopup()
{
    popup.classList.remove("open-popup");
}