<script>
function updateOpoParamsTopSingle() {
    $.ajax({
        url: '/opo_params/1',
        type: "GET",
        success: function (data) {
            $('#min_ip_of_opo').text(data['min_last'])
            var window = document.getElementById('min_ip_of_opo')
            if (data['min_last'] <= 1.00) {
                $('#min_ip_of_opo').backgroundColor = "#49ce56";
                window.style.backgroundColor = "#49ce56";
            }
            if (data['min_last'] <= 0.80) {
                window.style.backgroundColor = "#ffca45";
            }
            if (data['min_last'] <= 0.50) {
                window.style.backgroundColor = "#f58b2c";
            }
            if (data['min_last'] <= 0.20) {
                window.style.backgroundColor = "#f26161";
            }
        }
    })
}
$(document).ready(function (){
    updateOpoParamsTopSingle();
    setInterval(updateOpoParamsTopSingle, 60000);
})

</script>
