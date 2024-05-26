$(document).ready(function() {
    $('#form').submit(function(e) {
        e.preventDefault()

        $.ajax({
            url: 'test.php',
            data: $(this).serialize(),
            method: 'POST',
            // location.reload(true);
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
     // Refresh the page
}
function closePopup()
{
    popup.classList.remove("open-popup");
    location.reload(true);
}