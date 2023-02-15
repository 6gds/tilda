data = {
    city: 'Vladimir'
};

$.ajax({
    type: "post",
    url: form.attr('action'),
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    data: data,
    dataType: "json",
    complete: function (data) {
        if (data.responseJSON.status === 'success'){
            $('.work-popup__form').html(data.responseJSON.items);
        }
    },
    error: function (data){
        console.log(data);
    }
});
