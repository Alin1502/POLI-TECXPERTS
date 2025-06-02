function filter(){
    let filter_value = document.getElementById('filter').value;
    $.ajax({
        url: 'filter.php',
        type: 'POST',
        data: {filter: filter_value},
        success: function(data){
            document.getElementById('product-div').innerHTML = data;
        }
    });
}
filter();