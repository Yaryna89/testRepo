$(document).ready(function(){
    $('#search').click(function(){
        var book = $('#book').val();
            var author = $('#author').val();
            if(book == '' && author == ''){
                alert('Type some keywords...');
            }else{
                $.get('/search_books.php',{book:book,author:author},function(data){
                    $('#response').html(data);
                })
            }
    });
});