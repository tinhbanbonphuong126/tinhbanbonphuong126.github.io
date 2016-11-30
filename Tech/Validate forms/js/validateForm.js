$("#registers_form").on("click", function(){
    if($('#name').val().trim() == "")
    {
    console.log('ok');
    return false;
    }
})