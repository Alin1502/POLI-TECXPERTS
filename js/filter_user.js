function filter(){
    let filter_value = document.getElementById('filter').value;
    $.ajax({
        url: 'filter_user.php',
        type: 'POST',
        data: {filter: filter_value},
        success: function(data){
            document.getElementById('product-div').innerHTML = data;
        }
    });
}
filter();